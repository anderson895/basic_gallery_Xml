<?php 
include "navbar.php";
?>


<link rel="stylesheet" href="css/faq.css">


<div class="container">
    <h1>C. Frequently Asked Questions</h1>
    <div class="faq">
        <div class="question">
            <h2>Question 1: What is Lorem Ipsum?</h2>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam ex ac turpis posuere, eu scelerisque dui vestibulum.</p>
            </div>
        </div>
        <div class="question">
            <h2>Question 2: Why do we use it?</h2>
            <div class="answer">
                <p>Nulla facilisi. Fusce porta, libero ac convallis placerat, nisl metus pulvinar arcu, et consequat lectus magna id libero.</p>
            </div>
        </div>
        <div class="question">
            <h2>Question 3: Where does it come from?</h2>
            <div class="answer">
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec non quam a justo tincidunt ullamcorper.</p>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('.question h2').click(function() {
        // Toggle visibility of answer
        $(this).next('.answer').slideToggle();
        // Rotate arrow icon
        $(this).toggleClass('expanded');
    });
});

</script>
<!-- <script src="js/scripts.js"></script> -->
</body>
</html>
