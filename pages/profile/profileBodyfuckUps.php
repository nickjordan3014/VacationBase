<?php
    if(isset($_SESSION['user'])){
?>
<section class="main-content">
    <div class="row">
        <div class="col-first">
            <div class="card-profile-sides">
                <div class="card-profile-body">
                    <img src="img/icons-VB/orange_icon.png" alt="Profile Picture" class="profile-pic">
                    <div class="prof-sidenav">
                        <?php
                            echo("<p class='user'><b>".$_SESSION['user']['firstName']." ".$_SESSION['user']['lastName']."</b></p>");
                        ?>
                        <a href="">My Itineraries</a>
                        <a href="">Account Settings</a>
                        <a href="">About Us</a>
                        <a href="">Rate & Review</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-second">
            <div class="card-profile-sides">
                <h1 class="side-title1">Account Settings</h1>
                <div class="card-profile-body">
                    <div class="row">
                        <div class="col-display">
                            <h3>First Name</h3>
                        </div>
                        <div class="diplay-answer">
                            <?php
                                echo("<p>".$_SESSION['user']['firstName']."</b></p>");
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-display">
                            <h3>Last Name</h3>
                        </div>
                        <div class="diplay-answer">
                            <?php
                                echo("<p>".$_SESSION['user']['lastName']."</b></p>");
                            ?>
                        </div>
                    </div>
                    <!-- mark email address as uneditable -->
                    <div class="row">
                        <div class="col-display">
                            <h3>Email Address</h3>
                        </div>
                        <div class="diplay-answer">
                            <?php
                                echo("<p>".$_SESSION['user']['emailAddress']."</b></p>");
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-display">
                            <h3>Change Profile Picture</h3>
                        </div>
                        <div class="diplay-answer">
                            load picture icons here
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    }
?>

<?php
    if(!isset($_SESSION['user'])){
        header("location: signup.php");
?>
<?php
   }
?>