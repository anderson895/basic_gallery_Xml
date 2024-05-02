<?php 
include "navbar.php";
?>

<link rel="stylesheet" href="css/todolist.css">
<link rel="stylesheet" href="css/tab.css">

<br>


<div class="container">


    <h1>A. My To-Do List</h1>
    <input type="text" id="taskInput" placeholder="Add a new task">
    <button onclick="addTask()">Add Task</button>
    <ul id="taskList"></ul>
</div>

<br>

<div class="container">
    <h1>B. Image Slideshow</h1>
    <div id="slideshow" class="slideshow-container">
        <img class="slide" src="assets/img1.jpg" alt="Slide 1">
        <img class="slide" src="assets/img2.jpg" alt="Slide 2">
        <img class="slide" src="assets/img3.jpg" alt="Slide 3">
        <img class="slide" src="assets/img4.jpg" alt="Slide 4">
        <img class="slide" src="assets/img5.jpg" alt="Slide 5">
        <img class="slide" src="assets/img6.jpg" alt="Slide 6">
        <img class="slide" src="assets/img7.jpg" alt="Slide 7">
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
   

</div>




<div class="tab-container">
    <div class="tab-header">
        F.
        <button class="tab-button" onclick="openTab(event, 'tab1')" id="defaultOpen">Jewelry authenticity</button>
        <button class="tab-button" onclick="openTab(event, 'tab2')">Shipping And Delivery</button>
        <button class="tab-button" onclick="openTab(event, 'tab3')">Payment Method</button>
    </div>
    
    <div class="tab-content-container">
        <div id="tab1" class="tab-content active">
            <h2>Tab 1 Content</h2>
            <p><img src="assets/img1.jpg" alt="Image 1"></p>
        </div>
        
        <div id="tab2" class="tab-content">
            <h2>Tab 2 Content</h2>
            <p><img src="assets/img2.jpg" alt="Image 2"></p>
        </div>
        
        <div id="tab3" class="tab-content">
            <h2>Tab 3 Content</h2>
            <p><img src="assets/img5.jpg" alt="Image 3"></p>
        </div>
    </div>

</div>




<script src="js/index.js"></script>
<script src="js/tab.js"></script>
