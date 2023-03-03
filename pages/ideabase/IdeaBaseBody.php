<section class="main-content"><section class="inner-content">
    <article class="adleaderboard">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>
    <h1 class="ideabase-heading">Welcome to your IdeaBase</h1>
    <p class="ideabase-info">
        Explore different hot activity topics in your area, preplanned vacations &
        day trips just for you. Find out more about local happenings.
    </p>

    <!--idea base cards-->

    <section class="card-row">
        <button class="caro-btn-left" id="autoLeft4">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <!--Cards-->
        <section class="carousel" id="scroll4">
            <div class="ideabase-card" id="ibC0"> 
                <a class= "actPage" href="">
                    <!-- <div class="clickCard"> -->
                        <img 
                            src="img/gallery/bar_resturants.png" 
                            class="ideabase-image" 
                            alt="Bars and Restaurants Graphic" 
                        />
                    <!-- </div> -->
                </a>
            </div>
            <div class="ideabase-card" id="ibC1"> 
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/cheap.png" 
                        class="ideabase-image" 
                        alt="Cheap Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC2">
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/culture.png" 
                        class="ideabase-image" 
                        alt="Culture Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC3"> 
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/kid-friendly.png" 
                        class="ideabase-image" 
                        alt="Kid Friendly Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC4"> 
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/live_entertainment.png" 
                        class="ideabase-image" 
                        alt="Live Entertainment Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/outdoor_active.png" 
                        class="ideabase-image" 
                        alt="Outdoor Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="">
                    <img 
                        src="img/gallery/themepark.png" 
                        class="ideabase-image" 
                        alt="Themepark Graphic" 
                    />
                </a>
            </div>
        </section>


        <button class="caro-btn-right" id="autoRight4">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
    </section>


    <!-- FIRST CARD ROW -->
    <section class="card-row">
        <h2 class="row-title">Orlando's Signature: Theme Parks</h2>
        
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Theme Park Activities</p></a>
        <!--Cards-->


        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <section class="carousel" id="scroll0">
            <!-- DYNAMIC CARD CODE -->
            <?php
                // $ctr = 0;
                // foreach($results AS $result){
                //     $img = $result["img1"];
                //     $name = $result["event_name"];
                //     print(
                //         "<div class='card' id='tpC$ctr' title='$name'>
                //             <a class='actPage' href='activity.php'>
                //                 <div class='clickCard'>
                //                     <img class='image' src='img/images/$img' alt='Magic Kingdom Castle'>
                //                     <p>".$result["event_name"]."</p>
                //                 </div>
                //             </a>
                //         </div>"
                //     );
                //     $ctr = $ctr+1;
                // }
            ?>
            <div class="card" id="tpC0">
                <a class= "actPage" href="activity.php">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom Park</p>
                </a>
            </div>

            <div class="card" id="tpC1">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Legoland Florida</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC2">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/universal.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Universal Studios</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC3">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Aquatica Orlando</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC4">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Activity 5</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC5">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Activity 6</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC6">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Activity 7</p>
                    </div>
                </a>
            </div>

            <div class="card" id="tpC7">
                <a class= "actPage" href="activity.php">
                    <div class="clickCard">
                        <img src="img/images/universal.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Activity 8</p>
                    </div>
                </a>
            </div>
        </section>


        <button class="caro-btn-right" id="autoRight0">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>


    <!-- TBD -->


    <!--Blogs-->
    <section class="card-row">
        <h2 class="row-title">Blogs about Orlando</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Blogs</p></a>
        <!-- <div class="carouselInline"> -->


        <button class="caro-btn-left" id="autoLeft1">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <section class="carousel" id="scroll1">
            <div class="card" id="bC0"> <!--Naming Convention for cards bC0 = blog card 0-->
                <a class= "actPage" href="blog.php">
                    <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>The Popular Themeparks</p> <!--Will worry about text styling later-->
                </a>
            </div>
            <div class="card" id="bC1">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Getting Around on I4</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC2">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Where's The Beach?</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC3">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>What Orlando Locals do</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC4">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Blog 5</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC5">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Blog 6</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC6">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Blog 7</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
            <div class="card" id="bC7">
                <a class= "actPage" href="blog.php">
                    <!-- <div class="clickCard"> -->
                        <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Blog 8</p> <!--Will worry about text styling later-->
                    <!-- </div> -->
                </a>
            </div>
        </section>

        <button class="caro-btn-right" id="autoRight1">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <!-- </div> -->
        <!--Cards-->
    </section>

    <br>
    <br>
    <br>
    <br>

    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>
    
    <br>
    <br>
    <br>
    <br>

    <!--Articles-->
    <section class="card-row">
        <h2 class="row-title">Local Orlando Vibes</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Local Vibes</p></a>
        <!--Cards-->
        <!-- <div class="carouselInline"> -->


        <button class="caro-btn-left" id="autoLeft2">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <section class="carousel" id="scroll2">
            <div class="card" id="aC0"> <!--Naming Convention for cards aC0 = articles card 0-->
                <a class= "actPage" href="">
                    <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>BEST: Beach</p> <!--Will worry about text styling later-->
                </a>
            </div>
            <div class="card" id="aC1">
                <a class= "actPage" href="">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>BEST: Themepark</p>
                </a>
            </div>
            <div class="card" id="aC2">
                <a class= "actPage" href="">
                    <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>POPULAR: Orlando Tips</p>
                </a>
            </div>
            <div class="card" id="aC3">
                <a class= "actPage" href="">
                    <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>POPULAR: Local Spot</p>
                </a>
            </div>
            <div class="card" id="aC4">
                <a class= "actPage" href="">
                    <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 5</p>
                </a>
            </div>
            <div class="card" id="aC5">
                <a class= "actPage" href="">
                    <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 6</p>
                </a>
            </div>
            <div class="card" id="aC6">
                <a class= "actPage" href="">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 7</p>
                </a>
            </div>
            <div class="card" id="aC7">
                <a class= "actPage" href="">
                    <img src="img/images/universal.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 8</p>
                </a>
            </div>

        </section>


        <button class="caro-btn-right" id="autoRigh2">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
        <!-- </div>  -->
    </section>


    <!--Preplanned-->
    <section class="card-row">
        <h2 class="row-title">Preplanned Orlando Itineraries</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Preplanned Orlando Itineraries</p></a>
        <!-- <div class="carouselInline"> -->


            <button class="caro-btn-left" id="autoLeft3">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
            </button>
            
            
            <!--Cards-->
            <section class="carousel" id="scroll3">
                <div class="card" id="piC0"> <!--Naming Convention for cards piC0 = preplanned itineraries card 0-->
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>3 Day Themepark Trip</p> <!--Will worry about text styling later-->
                    </a>
                </div>  
                <div class="card" id="piC1">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Visiting Brevard County</p>
                    </a>
                </div>
                <div class="card" id="piC2">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Family Florida Fun</p>
                    </a>
                </div>
                <div class="card" id="piC3">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Top Tourist Traps</p>
                    </a>
                </div>
                <div class="card" id="piC4">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Preplanned 5</p>
                    </a>
                </div>
                <div class="card" id="piC5">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Preplanned 6</p>
                    </a>
                </div>
                <div class="card" id="piC6">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Preplanned 7</p>
                    </a>
                </div>
                <div class="card" id="piC7">
                    <a class="actPage" href="preplanned.php">
                        <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                        <p>Dynamic Preplanned 8</p>
                    </a>
                </div>
            </section>

            <button class="caro-btn-right" id="autoRight3">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
            </button>
        <!-- </div> -->
        
    </section>

    <br>
    <br>
    <br>
    <br>

    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

    <br>
    <br>
    <br>
    <br>

</section></section>