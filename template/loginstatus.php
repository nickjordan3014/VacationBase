<!-- if the user is not logged into their account, they will see "New Here? Sign Up! Or, Log In" -->
<?php
    if(!isset($_SESSION['user'])){
?>
<section class="login-status">
    <div class="margActivity">
        <p>New Here? <a href="signup.php">Sign Up!</a></p>
        <p>Or, <a href="login.php">Log-In</a></p>
    </div>
</section>
<?php
    }
?>
<?php
    if (isset($_SESSION['user'])){
?>
<section class="login-status">
    <div class="profile-drop">
        <div class="drop-btn" onclick="toggle()" >
            <span>
                <?php
                    echo("<h4><p style='text-decoration:none;color:black;font-weight:700;'>Hey there, ".$_SESSION['user']['firstName']."</p></h4>");
                ?>
            </span>
        </div>

        <ul class="drop-list">
            <li class="drop-items">
                <a href="profile.php">
                    <i class="fa-regular fa-user"></i>
                    User Profile
                </a>
            </li>
            <li class="drop-items">
                <a href="#">
                    <i class="fa-solid fa-question"></i>
                    FAQ
                </a>
            </li>
            <li class="drop-items">
                <a href="#">
                    <i class="fa-regular fa-envelope"></i>
                    Contact Us
                </a>
            </li>
            <hr />
            <li class="drop-items">
                <a href="logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
    
</section>
<?php
    }
?>