function codeAddress() {
    let text = "Hello, and welcome to DarkEL! Feel free to have a look around! Hope you like it.";
    let utterance = new SpeechSynthesisUtterance(text);
    speechSynthesis.speak(utterance); 
}
window.onload = codeAddress;