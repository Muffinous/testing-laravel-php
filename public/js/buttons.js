var btn = document.getElementById("navbtn");
var content = document.getElementById("content");

console.log(content);

var pulsed = false;

function delay(milliseconds){
    return new Promise(resolve => {
        setTimeout(resolve, milliseconds);
    });
}

btn.onclick = function() {
    pulsed = !pulsed;
    checkpulsed();
}

async function checkpulsed() {
    console.log("PULSED? ", pulsed);
    if (pulsed == true) {
        console.log("menu activated");
        content.style.cssText += 'z-index: -1';
    } else if (pulsed == false) {
        console.log("menu deactivated");
        await delay(500);
        content.style.cssText -= 'z-index: -1';
    }
}


// check esto https://www.javascripttutorial.net/dom/css/add-styles-to-an-element/