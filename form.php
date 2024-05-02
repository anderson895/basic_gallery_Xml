<?php 
include "navbar.php";
?>
<body>

<link rel="stylesheet" href="css/form.css">


<div class="container">
    <h1>D. Form Validation</h1>
    <form id="myForm">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <span class="error" id="nameError"></span>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span class="error" id="emailError"></span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span class="error" id="passwordError"></span>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

<script src="js/form.js"></script>

</body>
</html>
