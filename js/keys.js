
var holdInterval;
var holdDelay = 200; // milliseconds

// Function to simulate key press events
function simulateKeyPress(keyCode) {
    var eventObj = document.createEventObject
        ? document.createEventObject()
        : document.createEvent("Events");

    if (eventObj.initEvent) {
        eventObj.initEvent("keydown", true, true);
    }

    eventObj.keyCode = keyCode;
    eventObj.which = keyCode;

    document.dispatchEvent
        ? document.dispatchEvent(eventObj)
        : document.fireEvent("onkeydown", eventObj);
}

// Function to simulate key release events
function simulateKeyRelease(keyCode) {
    var eventObj = document.createEventObject
        ? document.createEventObject()
        : document.createEvent("Events");

    if (eventObj.initEvent) {
        eventObj.initEvent("keyup", true, true);
    }

    eventObj.keyCode = keyCode;
    eventObj.which = keyCode;

    document.dispatchEvent
        ? document.dispatchEvent(eventObj)
        : document.fireEvent("onkeyup", eventObj);
}

// Add click and hold event listeners to the arrow images
var rightArrow = document.getElementById("right");
var leftArrow = document.getElementById("left");
var upArrow = document.getElementById("up");

rightArrow.addEventListener("mousedown", function () {
    simulateKeyPress(39); // Key code for right arrow key

    holdInterval = setInterval(function () {
        simulateKeyPress(39); // Key code for right arrow key
    }, holdDelay);
});

leftArrow.addEventListener("mousedown", function () {
    simulateKeyPress(37); // Key code for left arrow key

    holdInterval = setInterval(function () {
        simulateKeyPress(37); // Key code for left arrow key
    }, holdDelay);
});

upArrow.addEventListener("mousedown", function () {
    simulateKeyPress(90); // Key code for up arrow key

    holdInterval = setInterval(function () {
        simulateKeyPress(90); // Key code for up arrow key
    }, holdDelay);
});

// Add release event listeners to stop holding the arrow keys
rightArrow.addEventListener("mouseup", function () {
    clearInterval(holdInterval);
    simulateKeyRelease(39); // Key code for right arrow key
});

leftArrow.addEventListener("mouseup", function () {
    clearInterval(holdInterval);
    simulateKeyRelease(37); // Key code for left arrow key
});

upArrow.addEventListener("mouseup", function () {
    clearInterval(holdInterval);
    simulateKeyRelease(90); // Key code for up arrow key
});