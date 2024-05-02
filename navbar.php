<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav.css">
 
</head>
<body>


<nav class="navbar">
    <div class="logo">
        <a href="#"><img src="assets/img6.jpg" alt="Logo" style="border-radius: 50%; height: 50px;"></a>
    </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li class="dropdown">
                <a href="#">ABOUT US</a>
                <ul class="dropdown-content">
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="mission.php">Mission</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="form.php">FORM</a></li>
        </ul>

    <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
      E.  &#9776; <!-- Hamburger icon -->
    </a>
</nav>

<!-- Timer display -->
H.<br> <div id="timer"></div>



<script src="js/nav.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/timerLocal.js"></script>
</body>
</html>

</body>
</html>
