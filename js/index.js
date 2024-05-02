// To-Do List Functionality

function addTask() {
    const input = document.getElementById('taskInput');
    const taskText = input.value.trim();

    if (taskText !== '') {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Reload tasks after successful addition
                    location.reload();
                } else {
                    console.error('Failed to add task.');
                }
            }
        };
        xhr.open('POST', 'tasks.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('task=' + encodeURIComponent(taskText));
        
        input.value = ''; // Clear input after sending task
    }
}


// Function to remove a task
function removeTask(index) {

    // console.log('Removing task with index:', index);


        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    location.reload();
                } else {
                    console.error('Failed to remove task.');
                }
            }
        };
        xhr.open('POST', 'tasks.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('removeTask=' + index);
    
}

 // Ensure that the removeTask function is properly called in the button onclick attribute
    // Dynamically add the onclick event to each remove button based on the task list
    document.addEventListener('DOMContentLoaded', function() {
        const taskList = document.getElementById('taskList');
        taskList.addEventListener('click', function(event) {
            if (event.target && event.target.nodeName === 'BUTTON') {
                // Find the index of the task item (li) in the list
                const taskIndex = Array.prototype.indexOf.call(taskList.children, event.target.parentNode);
                removeTask(taskIndex); // Call the removeTask function with the task index
            }
        });
    });




// Load tasks via AJAX
document.addEventListener('DOMContentLoaded', function() {
    const taskList = document.getElementById('taskList');
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                taskList.innerHTML = xhr.responseText;
            } else {
                console.error('Failed to load tasks.');
            }
        }
    };
    xhr.open('GET', 'tasks.php', true);
    xhr.send();
});





// Slideshow Module
const Slideshow = (function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll('#slideshow img');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    function showSlide(index) {
        if (index < 0) {
            slideIndex = slides.length - 1;
        } else if (index >= slides.length) {
            slideIndex = 0;
        } else {
            slideIndex = index;
        }

        // Hide all slides
        slides.forEach(slide => {
            slide.style.display = 'none';
        });

        // Display the current slide
        slides[slideIndex].style.display = 'block';
    }

    // Function to show the next slide
    function nextSlide() {
        showSlide(slideIndex + 1);
    }

    // Function to show the previous slide
    function prevSlide() {
        showSlide(slideIndex - 1);
    }

    // Event listeners for manual navigation
    if (prevButton && nextButton) {
        prevButton.addEventListener('click', prevSlide);
        nextButton.addEventListener('click', nextSlide);
    }

    // Automatic slideshow functionality
    function start() {
        showSlide(slideIndex);
        setInterval(() => {
            nextSlide();
        }, 3000); // Change image every 3 seconds
    }

    // Expose public methods/properties
    return {
        start: start
    };
})();

// Start the slideshow
Slideshow.start();







