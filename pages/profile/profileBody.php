<section class="main-content">
    <section class="inner-content">
        <section>
            <img src="img/icons-VB/orange_icon.png" alt="Profile Picture" class="profile-pic">
            <p class="username">USERNAME</p>

            <a href="logout.php"><button class="logout_btn">Log Out</button></a>
        </section>
        <section class="profile-navbar">
            <button class="nobtndecor profile-nav" id="itineraries-link">Itineraries</button>
            <button class="nobtndecor profile-nav" id="account-link">Account</button>
            <button class="nobtndecor profile-nav" id="about-link">About Us</button>
            <button class="nobtndecor profile-nav" id="rate-link">Rate & Review</button>
        </section>
        <hr class="hsline">
    </section>
    <!--Itineraries-->
    <section class="profile-split-left" id="itinerary-left"> 
        <h2 class="itinerary-header">Saved Itineraries</h2>
        <div class="itinerary-card">
            <img src="img/images/magickingdom.jpeg" alt="Example Image" class="itinerary-card-img">
            <div class="card-col">
                <p class="card-title">Disney Trip 1</p>
                <p class="card-date">1/02/22</p>
            </div>
            <div class="card-col">
                <div class="card-icons">
                    <img src="img/icons-VB/share_icon.png" alt="Share Icon" class="icons">
                    <img src="img/icons-VB/edit_icon.png" alt="Edit Icon" class="icons">
                </div>
                <p class="card-remove" id="remove-1">remove</p>
            </div>
        </div>
    </section>

    <section class="profile-split-right" id="itinerary-right"> 
        <h2 class="itinerary-header">Previous Purchases</h2>
        <div class="itinerary-card">
            <img src="img/images/magickingdom.jpeg" alt="Example Image" class="itinerary-card-img">
            <div class="card-col">
                <p class="card-title">Disney Trip 1</p>
                <p class="card-date">1/02/22</p>
            </div>
            <div class="card-col">
                <img src="img/icons-VB/share_icon.png" alt="Share Icon" class="share-icon">
                <button class="card-button">Add to Cart</button>
            </div>
        </div>
    </section>

    <!--Account-->
    <section id="account-sec" class="inner-content center-section invisible">
        <form action="accountsettings.php" class="profile-form">
            <!--First Name-->
            <dt>
                <label for="firstName">First Name</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box">
            </dd>
            <!--Last Name-->
            <dt>
                <label for="lastName">Last Name</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box">
            </dd>
            <!--Email-->
            <dt>
                <label for="email">Email</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box">
            </dd>
            <!--Profile Pics-->
            <dt>
                <label for="email">Change Profile Picture</label>
            </dt>
            <dd class="icon-container">
                <img src="img/icons-VB/strawberry_icon.png" alt="Strawberry Icon" class="user-icons">
                <img src="img/icons-VB/banana_icon.png" alt="banana Icon" class="user-icons">
                <img src="img/icons-VB/watermelon_icon.png" alt="watermelon Icon" class="user-icons">
                <img src="img/icons-VB/orange_icon.png" alt="orange Icon" class="user-icons">
                <img src="img/icons-VB/pineapple_icon.png" alt="pineapple Icon" class="user-icons">
            </dd>
            <button type="submit" class="account-submit">Save Changes</button>
        </form>
    </section>

    <!--About Us-->
    <section id="about-us-sec" class="inner-content about-us-text invisible">
        <h2>Who We Are</h2>
        <p>Vacation Base is the perfect destination for planning your next getaway! Our travel itinerary website provides custom-tailored trips with detailed guides and recommended activities, making it easy to find the perfect trip for you. Whether you're looking for an adventure-packed vacation or a family friendly activites, Vacation Base has you covered!</p>
        
    </section>
    <!--Rate & Review-->
    <section id="rate-review-sec" class="inner-content center-section invisible">
        <form action="review.php" class="profile-form">
            <h3 class="center-text">Leave a review</h3>
            <p>How are you liking your experience?</p>
            <dt>
                <label for="review">Name</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box">
            </dd>
            <dt>
                <label for="review">Email</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box">
            </dd>
            <dt>
                <label for="review">Review</label>
            </dt>
            <dd class="tb-container">
                <input type="text" class="box tall">
            </dd>
            <div class="stars-in-box">
                <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-1" class="star-size">
                <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-2" class="star-size">
                <img src="img/icons-VB/goldstar.png" alt="review star 1" id="star-3" class="star-size">
                <img src="img/icons-VB/blackstar.png" alt="review star 1" id="star-4" class="star-size">
                <img src="img/icons-VB/blackstar.png" alt="review star 1" id="star-5" class="star-size">
            </div>
            <button type="submit" class="account-submit">Save Changes</button>
        </form>
    </section>
</section>