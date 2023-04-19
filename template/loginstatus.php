<!-- if the user is not logged into their account, they will see "New Here? Sign Up! Or, Log In" -->
<?php
    if(!isset($_SESSION['user'])){
?>
<section class="login-status">
    <!-- <div class="margActivity"> -->
        <span style="display: flex;">
            <button class="buttons-lsOne"><a href="signup.php" style="font-weight: 600;">Sign Up</a></button>
            &nbsp;
            <button class="buttons-lsTwo"><a href="login.php" style="font-weight: 600;">Log In</a></button>
        </span>
    <!-- </div> -->
</section>
<?php
    }
?>
<?php
    if (isset($_SESSION['user'])){
?>
<section class="login-status">
    <div class="profile-drop">
        <div class="drop-btn">
            <span>
                <?php
                    echo("<h4><p style='text-decoration:none;color:black;font-weight:700;'>Hey there, ".$_SESSION['user']['firstName']."</p></h4>");
                ?>
            </span>
        </div>

        <!-- <ul class="drop-list">
            <li class="drop-items">
                <a href="profile.php">
                    <i class="fa-regular fa-user"></i>
                    User Profile
                </a>
            </li>
            <hr />
            <li class="drop-items">
                <a href="logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Log Out
                </a>
            </li>
        </ul> -->
    </div>  
</section>
<?php
    }
?>