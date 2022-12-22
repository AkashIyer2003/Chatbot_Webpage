<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About me</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="cya.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#">SOURCEs:-</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="#about">MAIL</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://github.com/AkashIyer2003">GITHUB</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="https://www.linkedin.com/in/akashiyer2003/">LINKEDIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">A AKASH IYER</h1>
                        <p class="intro-text">B.Tech AI &amp; Data Science Student<br>Web Dev Enthusiast</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>About ME</h2>
                    <p>I'm currently a second-year student at Shiv Nadar University, Chennai. My choice of Course for pursuing my bachelor's is Artificial intelligence &amp; Data Science.&nbsp;</p>
                    <p>I'm proficient in languages Python, Java and C. I also have background knowledge in HTML and CSS. The preferred software for data analysis that I use is Tableau.</p>
                    <p>If you like to learn more about me, you can ask the chatbot.</p>
                    <p> My GMAIL ID is akash22iyer@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center download-section content-section" id="download" style="background-image:url('assets/img/downloads-bg.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1>PERSONAL CHATBOT</h1>
                <p>The chatbot given below can tell many things about me.</p><button class="btn btn-primary btn-lg btn-default" type="button" onclick="openForm()">visit CHATBOT</button>
            </div>
        </div>
	<div class="chat-popup" id="myForm">
    	    <h2>About Me</h2>
            <div id="chatbox">
                  <h5 id="chat-timestamp"></h5>
                  <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
            </div>
            <div class="chat-bar-input-block">
                <div id="userInput">
                    <input id="textInput" class="input-box" type="text" name="msg" placeholder="Enter a message.">
                    <p></p>
                </div>

                <div class="chat-bar-icons">
		    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                </div>
	        <div id="chat-bar-bottom">
                            <p></p>
                </div>
            </div>
	    <button type="button" class="btncancel" onclick="closeForm()">✖️</button>
	</div>

    </section>
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact ME</h2>
                    <p>Feel free to check me through Gmail, Github or Linkedin</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fa-fw" style="font-size: 26px;padding-left: 0px;">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" fill="currentColor"></path>
                                </svg><span class="network-name">&nbsp; GMAIL</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" href="https://www.linkedin.com/in/akashiyer2003/" type="button"><i class="fa fa-linkedin fa-fw"></i><span class="network-name">&nbsp;LINKEDIN</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" href="https://github.com/AkashIyer2003" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean" style="padding-bottom: 0px;margin-bottom: -110px;"></div>
    <footer>
        <div class="container text-center">
            <p>Thank you for reading this page 😊</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="pop.js"></script>
    <script src="hello.js"></script>
    <?php
    echo shell_exec("/Users/akash/chat.py 'Hello'");
    ?>
</body>

</html>

