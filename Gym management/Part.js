var header = document.querySelector("h1")

function getRandomColor() {
    var letters = "0123456789ABCDEF";
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color
}


function changeHeaderColor() {
    colorInput = getRandomColor()
    header.style.color = colorInput;
}


setInterval("changeHeaderColor()", 500);


//  Line
var sym = document.querySelector(".sym")


function geRandomColor() {
    var letters = "0123456789ABCDEF";
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color
}

// Simple function for clarity
function changHeaderColor() {
    colorInput = geRandomColor()
    sym.style.color = colorInput;
}


setInterval("changHeaderColor()", 500);