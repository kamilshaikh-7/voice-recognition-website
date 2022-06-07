let speechRecognition = window.webkitSpeechRecognition; //API for voice recognition

let recognition = new speechRecognition();  //initializing speechRecognition variable

let textbox = $("#textbox");
let instructions = $("#instructions");

let content = "";   //content inside text-box is initially empty

recognition.continuous = true;  //continuously looking for voice

//recognition is started

recognition.onstart = function () {
    instructions.text("You can speak now!");
}

recognition.onspeechend = function () {
    instructions.text("No Activity");
}

recognition.onerror = function () {
    instructions.text("Try Again");
}

recognition.onresult = function (event) {
    let current = event.resultIndex;
    let transcript = event.results[current][0].transcript;
    content += transcript;
    textbox.val(content);
}

$("#startbtn").click(function (event) {
    if (content.length) {
        content += '';  //empty text-box if there is anything inside
    }
    recognition.start();
})
