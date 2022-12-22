function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "What do you want to know about me?"
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    fetch('http://localhost:8888/untitled%20folder/call.py', {
            method: 'POST',
            body: JSON.stringify({ message: userText }),
            mode: 'cors',
            headers: {
              'Content-Type': 'application/javascript'
            },
          })
          .then(r => r.text())
          .then(r => {
            console.log(r);
            console.log(r.toString());
            let msg = r.answer;a
            let botHtml = '<p class="botText"><span>' + msg + '</span></p>';
            $("#chatbox").append(botHtml);
        
            document.getElementById("chat-bar-bottom").scrollIntoView(true);

        });

}

//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();

    if (userText == "") {
        userText = "00";
    }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getResponse();
}

function heartButton() {
    buttonSendText("Heart clicked!")
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});


function getBotResponse(input) {
    //rock paper scissors
    if (input == "What is your name?") {
        return "Akash";
    } else if (input == "What is your age?") {
        return "19";
    } else if (input == "What do you study?") {
        return "Data Science";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}
