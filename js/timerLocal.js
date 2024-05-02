// timer.js

// Function to initialize or resume the timer
function initializeTimer() {
    var storedStartTime = localStorage.getItem("timerStartTime");

    if (storedStartTime) {
        // Use the stored start time if available
        startTime = parseInt(storedStartTime, 10);
    } else {
        // If no stored start time, set the current time as start time
        startTime = Date.now();
        localStorage.setItem("timerStartTime", startTime);
    }

    // Start updating the timer display
    setInterval(updateTimer, 1000);
}

// Function to update and display the timer
function updateTimer() {
    var currentTime = Date.now();
    var elapsedTime = currentTime - startTime;

    // Display formatted time
    var timerDisplay = document.getElementById("timer");
    timerDisplay.textContent = "Timer: " + formatTime(elapsedTime);
}

// Function to format elapsed time in HH:MM:SS format
function formatTime(elapsedTime) {
    var totalSeconds = Math.floor(elapsedTime / 1000);
    var hours = Math.floor(totalSeconds / 3600);
    var minutes = Math.floor((totalSeconds % 3600) / 60);
    var seconds = totalSeconds % 60;

    return (
        pad(hours, 2) +
        ":" +
        pad(minutes, 2) +
        ":" +
        pad(seconds, 2)
    );
}

// Function to pad numbers with leading zeros
function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}

// Call initializeTimer when the script is loaded
initializeTimer();
