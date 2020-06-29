<?php
require "header.php";
?>
<link rel="stylesheet" href="style.css">
<main>
<div class="wrap">
    <section class="section-default">
        <h2>
            Signup Here
        </h2>
        <form  class="form-signup" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username" required>
        <input type="text" name="mail" placeholder="E-mail" required>
        <input type="text" name="roll" placeholder="Rollno" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="password" name="pwd-repeat" placeholder="Repeat password" required>
        <button type="submit" name="signup-submit">Signup</button>
    
    </form>
    </section>
</div>

</main>

<?php
require "footer.php";
?>