<!-- if the user is not logged into their account, they will see "New Here? Sign Up! Or, Log In" -->
<?php
    if(!isset($_SESSION['user'])){
?>
<section class="login-status">
    <p>New Here? <a href="signup.php">Sign Up!</a></p>
    <p>Or, <a href="login.php">Log-In</a></p>
</section>
<?php
    }
?>
<?php
    if (isset($_SESSION['user'])){
?>
<section class="login-status">
    <?php
        echo("<h4>Hey there, <a href='profile.php'>".$_SESSION['user']['firstName']."</a></h4>");
        // print_r($_SESSION);
    ?>
</section>
<?php
    }
?>