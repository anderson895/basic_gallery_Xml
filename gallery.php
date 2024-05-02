<?php 
include "navbar.php";
?>

<link rel="stylesheet" href="css/gallery.css">

<div class="gallery-container">
    G.
    <div class="thumbnails">
        <img src="assets/img1.jpg" alt="Thumbnail 1" onclick="openImage('assets/img1.jpg')">
        <img src="assets/img2.jpg" alt="Thumbnail 2" onclick="openImage('assets/img2.jpg')">
        <img src="assets/img3.jpg" alt="Thumbnail 3" onclick="openImage('assets/img3.jpg')">
        <img src="assets/img4.jpg" alt="Thumbnail 4" onclick="openImage('assets/img4.jpg')">
        <img src="assets/img5.jpg" alt="Thumbnail 5" onclick="openImage('assets/img5.jpg')">
        <img src="assets/img6.jpg" alt="Thumbnail 6" onclick="openImage('assets/img6.jpg')">
        <!-- Add more thumbnails as needed -->
    </div>
    
    <div class="modal" id="imageModal">
        <span class="close" onclick="closeImage()">&times;</span>
        <img src="" alt="Modal Image" id="modalImage">
    </div>
</div>




<script src="js/gallery.js"></script>

