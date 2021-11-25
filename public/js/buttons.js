var btn = document.getElementById("navbtn");
var content = document.getElementsByClassName("content");

console.log(content);

var pulsed = false;

btn.onclick = function() {
    console.log("click before ",pulsed);
    pulsed = !pulsed;
    console.log("click later ", pulsed);
    checkpulsed();
}


 