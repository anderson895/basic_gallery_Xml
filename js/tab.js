function openTab(event, tabName) {
    var i, tabContent, tabButtons;

    // Hide all tab content
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Deactivate all tab buttons
    tabButtons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }

    // Show the specific tab content
    document.getElementById(tabName).style.display = "block";

    // Activate the clicked tab button
    event.currentTarget.classList.add("active");
}

// Open the default tab on page load
document.getElementById("defaultOpen").click();
