<?php
    if(isset($_SESSION['user'])){
?>
    <section class="main-content">
        <header>
            <section>
                <section class="user">
                    <?php
                        $profile_pic = "img/icons-VB/".$_SESSION['user']['profilePic'];
                        print($_SESSION['user']['profilePic']);
                    ?>

                    <img src="img/icons-VB/banana_icon.png" alt="Profile Picture">
                    <?php
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
                        <!-- <li>
                            <a href="#itineraries">
                                <i class="fa-regular fa-map"></i>&nbsp;&nbsp;
                                Itineraries
                            </a>
                        </li> -->
                        <li>
                            <a id="account-link">
                                <i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbsp;
                                Account
                            </a>
                        </li>
                        <li>
                            <a id="about-link">
                                <i class="fa-solid fa-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                About Us
                            </a>
                        </li>
                        <li>
                            <a id="rate-link">
                                <i class="fa-regular fa-pen-to-square"></i>&nbsp;&nbsp;
                                Rate & Review
                            </a>
                        </li>
                    </ul>
                </section>
            </section>
        </header>

    
        <div class="containerProfile">
            <!-- <section class="itineraries" id="itineraries">
                <h1 class="headingProfile">Itineraries</h1>
                
                <div class="content">

                </div>
            </section> -->

            <section class="account" id="account">

                <div class="content">
                    <h1 class="headingProfile">Account Information</h1>
                    <form action="profile.php" method="POST" autocomplete="off" class="moveform">
                        <dd class="form-labels">
                            <span class="span-left">
                                <br>
                                <label for="name" class="label-pad">First Name</label>
                                <?php
                                    $fname = $_SESSION['user']['firstName'];
                                    $id = $_SESSION['user']['id'];
                                ?>
                                <input type="text" class="box-short box-pad-profile" name="firstName" value="<?php echo($fname); ?>">
                            </span>
                            <span class="span-left">
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
                        <label for="profile"><p class="centerp">Change Profile Picture</p></label>
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
                    <br>
                </div>
            </section>
            <section class="about invis" id="about">
                <h1 class="headingProfile">About Us</h1>

                <div class="aboutContent">
                    <br>
                    
                    <h4>
                        Who We Are
                    </h4>
                    
                    <p>
                        Vacation Base is the perfect destination for planning your next getaway! Our travel itinerary website provides 
                        custom-tailored trips with detailed guides and recommended activities, making it easy to find the perfect trip 
                        for you. Whether you're looking for an adventure-packed vacation or a family friendly activites, Vacation Base 
                        has you covered!
                    </p>
                    <br>
                    
                    <h4>
                        What We Provide
                    </h4>
                    <br>
                    <p>
                        <b>Home Page</b> - We want to introduce our vacation planners to all that we have to offer. We have vacation selections such as Theme Parks, Restaurants,
                        Local Events, Outdoor Events, and Cheap Thrills! 
                    </p>
                    <p>
                        <b>IdeaBase Page</b> - Vacation planners are provided with ideas for their vacation planning through various preplanned itineraries, travel tips, and specialties.  
                    </p>
                    <p>
                        <b>Search Page</b> - Vacation planners are able to search up events they would like to attend and we return a listing of results that fall within that category.
                    </p>
                    <p>
                        <b>Itinerary Page</b> - This is where the magic takes place. Vacation planners can drag and drop events of their choosing in order to plan the perfect vacation!
                    </p>
                    <br>
                </div>
            </section>

            <section class="rate invis" id="rate-review-sec">
                <h1 class="headingProfile">Rate & Review</h1>
                <!-- <section id="rate-review-sec" class="inner-content center-section invisible"> -->
                <form action="" class="moveform">
                    <!-- <h3 class="center-text">Leave a review</h3> -->
                    &nbsp;
                    &nbsp;
                    <p class="centerp">How are you liking your experience?</p>
                    &nbsp;
                    <dt class="dtpad">
                        <label for="review">Name</label>
                    </dt>
                    <dd class="tb-container">
                        <input type="text" class="box-long" value="<?php echo($fname." ".$lname); ?>" disabled>
                    </dd>
                    &nbsp;
                    <dt class="dtpad">
                        <label for="review">Email</label>
                    </dt>
                    <dd class="tb-container">
                        <input type="text" class="box-long" value="<?php echo($email); ?>" disabled>
                    </dd>
                    &nbsp;
                    <dt class="dtpad">
                        <label for="review">Review</label>
                    </dt>
                    <dd class="tb-container">
                        <input type="text" class="box tall" class="review-box-size">
                    </dd>
                    <div class="stars-in-box">
                        <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-1" class="star-size">
                        <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-2" class="star-size">
                        <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-3" class="star-size">
                        <img src="img/icons-VB/blackstar.png" alt="review star 1" id="star-4" class="star-size">
                        <img src="img/icons-VB/blackstar.png" alt="review star 1" id="star-5" class="star-size"> 
                    </div>
                    <div class="button-div">
                        <button type="submit" class="account-submit lil-more-btn">Save Changes</button>
                    </div>
                    </form>
                <!-- </section>   -->
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