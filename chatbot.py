import random
import json
import pickle
import numpy as np

import nltk
from nltk.corpus import wordnet
from nltk.stem import WordNetLemmatizer

from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Activation, Dropout
from tensorflow.keras.optimizers import SGD

lemma = WordNetLemmatizer()

intents = json.loads(open('intents.json').read())

words2 = []

classes = [] 

documents = []

ignore_letters = ['?','.',',','!']

for intent in intents['intents']:
	for word in intent['words']:
		word_list = nltk.word_tokenize(word)
		words2.extend(word_list) 
		documents.append((word_list,intent['tag']))
		if intent['tag'] not in classes:
			classes.append(intent['tag']) 

words2 = [lemma.lemmatize(word) for word in words2]
words2 = sorted(set(words2))
classes = sorted(set(classes))

pickle.dump(words2, open('words.pkl', 'wb'))
pickle.dump(classes, open('classes.pkl', 'wb'))

training = []
output_empty = [0] * len(classes)

for document in documents:
        bag = []
        word_patterns = document[0]
        word_patterns = [lemma.lemmatize(word.lower()) for word in word_patterns]
        for word in words2:
                bag.append(1) if word in word_patterns else bag.append(0)
                
        output_row = list(output_empty)
        output_row[classes.index(document[1])] = 1
        training.append([bag, output_row])
        
random.shuffle(training)
training = np.array(training)

train_x = list(training[:, 0])
train_y = list(training[:, 1])

model = Sequential()
model.add(Dense(128, input_shape=(len(train_x[0]),),activation = 'relu'))
model.add(Dropout(0.5))
model.add(Dense(64,activation = 'relu'))
model.add(Dropout(0.5))
model.add(Dense(len(train_y[0]),activation = 'softmax'))

sgd =  SGD(lr = 0.01, decay = 1e-6, momentum = 0.9,  nesterov = True)
model.compile(loss = 'categorical_crossentropy', optimizer = sgd, metrics = ['accuracy'])

hist = model.fit(np.array(train_x),np.array(train_y),epochs=1000,batch_size=5,verbose=1)

print('done')

def cleanup_sentence(sentence):
    sentence_words = nltk.word_tokenize(sentence)
    sentence_words = [lemma.lemmatize(word) for word in sentence_words]
    return sentence_words

def bag_of_words(sentence):
    sentence_words = cleanup_sentence(sentence)
    bag = [0]*len(words2)
    for w in sentence_words:
        for i, word in enumerate(words2):
            if word == w:
                bag[i] = 1
    return np.array(bag)

def predict_class(sentence):
    bow = bag_of_words(sentence)
    res = model.predict(np.array([bow]))[0]
    ERROR_THRESHOLD = 0.25
    results = [[i,r] for i, r in enumerate(res) if r > ERROR_THRESHOLD]
    results.sort(key = lambda x: x[1], reverse=True)
    return_list = []
    for r in results:
        return_list.append({'intents': classes[r[0]],'probability': str(r[1])})
    return return_list
 
def get_response(intents_list, intents_json):
    tag = intents_list[0]['intents']
    list_of_intents = intents_json['intents']
    for i in list_of_intents:
        if i['tag'] == tag:
            result = random.choice(i['response'])
            break
    return result

print("Chatbot is running")


def to_respond(msg):
    impulse = json.loads(open('intents.json').read())
    ints = predict_class(msg)
    res = get_response(ints, impulse)
    return res
    
# while True:
#     Word = input("")
#     res = to_respond(Word)
#     print(res)