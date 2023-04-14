<?php
    if(isset($_SESSION['user'])){
?>
    <section class="main-content">
        <header>
            <section>
                <section class="user">
                    <?php
                        $profile_pic = "img/icons-VB/".$_SESSION['user']['profilePic'];
                    ?>

                    <img src="img/icons-VB/banana_icon.png" alt="Profile Picture">
                    <?php
                        print("<h4><b>".$profile_pic."</b></h4>");
                        print("<h4 class='name'><b>".$_SESSION['user']['firstName']." ".$_SESSION['user']['lastName']."</b></h4>");
                    ?>
                    <br>
                    <a href="logout.php"><button class="logout_btn">Log Out</button></a>
                </section>
                <br>
                <br>
                <section class="navbar_profile">
                    <h4>Profile</h4>
                    <ul>
                        <li>
                            <a href="#itineraries">
                                <i class="fa-regular fa-map"></i>&nbsp;&nbsp;
                                Itineraries
                            </a>
                        </li>
                        <li>
                            <a href="#account">
                                <i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbsp;
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="#about">
                                <i class="fa-solid fa-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#rate">
                                <i class="fa-regular fa-pen-to-square"></i>&nbsp;&nbsp;
                                Rate & Review
                            </a>
                        </li>
                    </ul>
                </section>
            </section>
        </header>
        <br>
        <br>
    
        <div class="containerProfile">
            <section class="itineraries" id="itineraries">
                <h1 class="headingProfile">Itineraries</h1>
                
                <div class="content">

                </div>
            </section>

            <section class="account" id="account">
                <h1 class="headingProfile">Account Information</h1>

                <div class="content">
                    <form action="profile.php" method="POST" autocomplete="off">
                        <dd class="form-labels">
                            <span style="float: left;">
                                <br>
                                <label for="name" class="label-pad">First Name</label>
                                <?php
                                    $fname = $_SESSION['user']['firstName'];
                                    $id = $_SESSION['user']['id'];
                                ?>
                                <input type="text" class="box-short box-pad-profile" name="firstName" value="<?php echo($fname); ?>">
                            </span>
                            <span style="float: left;">
                                <br>
                                <label for="name" class="label-pad">Last Name</label>
                                <?php
                                    $lname = $_SESSION['user']['lastName'];
                                ?>
                                <input type="text" class="box-short" name="lastName" value="<?php echo($lname); ?>">
                            </span>
                            <br>
                            <br>
                        </dd>
                        <br>
                        <br>
                        <br>
                        <label for="email" class="label-pad">Email Address</label>
                        <?php
                            $email = $_SESSION['user']['emailAddress'];
                        ?>
                        <dd class="form-labels"><input type="text" class="box-long" name="emailAddress"  value="<?php echo($email); ?>" disabled></dd>
                        <br>
                        <br>
                        <label for="profile">Change Profile Picture</label>
                        <dd class="icon-container-profile">
                            <img src="img/icons-VB/strawberry_icon.png" alt="Strawberry Icon" class="user-icons-profile">
                            <img src="img/icons-VB/banana_icon.png" alt="banana Icon" class="user-icons-profile">
                            <img src="img/icons-VB/watermelon_icon.png" alt="watermelon Icon" class="user-icons-profile">
                            <img src="img/icons-VB/orange_icon.png" alt="orange Icon" class="user-icons-profile">
                            <img src="img/icons-VB/pineapple_icon.png" alt="pineapple Icon" class="user-icons-profile">
                        </dd>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                    <section class="profile_btns">
                        <button class="profile_btnOne btn-pad" type="submit" name="save_changes"><b>Save Changes</b></button>
                        <!-- <input class="profile_btnOne btn-pad" onclick="location.href = 'index.php';" type="submit" name="save_changes" value="Save Changes" > -->
                        <!-- <button class="profile_btnTwo" name="cancel_btn" onclick="location.href = 'profile.php#account.php';"><b>Cancel</b></button> -->
                        <!-- <input class="profile_btnTwo" onclick="location.href = 'profile.php#account';" type="submit" name="cancel" value="Cancel"> -->
                    </section>
                </div>
            </section>

            <section class="about" id="about">
                <h1 class="headingProfile">About Us</h1>

                <div class="content">
                    <br>
                    <br>
                    <h4>
                        Who We Are
                    </h4>
                    <br>
                    <p>
                        Vacation Base is the perfect destination for planning your next getaway! Our travel itinerary website provides 
                        custom-tailored trips with detailed guides and recommended activities, making it easy to find the perfect trip 
                        for you. Whether you're looking for an adventure-packed vacation or a family friendly activites, Vacation Base 
                        has you covered!
                    </p>
                    <br>
                    <br>
                    <h4>
                        What We Provide
                    </h4>
                    <br>
                    <p>
                        <b>Home Page</b> (What we provide)
                    </p>
                    <p>
                        <b>IdeaBase Page</b> (What we provide)
                    </p>
                    <p>
                        <b>Search Page</b> (What we provide)
                    </p>
                    <p>
                        <b>Itinerary Page</b> (What we provide)
                    </p>
                </div>
            </section>

            <section class="rate" id="rate">
                <h1 class="headingProfile">Rate & Review</h1>
                
            </section>
        </div>
    </section>
<?php
    }
?>
<?php
    if(!isset($_SESSION['user'])){
        header("location: login.php");
?>
<?php
   }
?>