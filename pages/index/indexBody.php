<!-- PAGE TOP AD-->
<section class="main-content"><section class="inner-content">
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

<!-- HOMEPAGE HEADER -->
    
    <section class="logo-area">
        <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="logo">
        <form action="search.php" class="logo-area">     
                <label for="home_search" class="">Where to? Enter a City or Zip Code to see activities there: </label>
                <input type="text" name="home_search" class="searchbox">
                <button class="nobtndecor">
                    <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                </button>
        </form>
    </section>
    <hr class="hsline">


<!-- FIRST CARD ROW -->

    <section class="card-row">
        
        <h2 class="row-title">Orlando's Signature: Theme Parks</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Theme Park Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <!--Cards-->
        <section class="carousel" id="scroll0">
            <?php
                $ctr = 0;
                $inc = 1;
                foreach($results AS $result){
                    $id[] = $result["id"];
                    $name[] = $result["event_name"];
                    $img1[] = $result["img1"];
                    $altText1[] = $result["alt_text_img1"];
                    $price[] = $result["price"];
                    $address[] = $result["address"];
                    $url[] = $result["url"];
                    $meta[] = $result["meta_description"];
                    $map[] = $result["map_img"];
                    $map_link[] = $result["map_link"];

                    // Session sends
                    $_SESSION['id'] = $id;
                    $_SESSION['event_name'] = $name;
                    $_SESSION['price'] = $price;
                    $_SESSION['img1'] = $img1;
                    $_SESSION['alt_text_img1'] = $altText1;
                    $_SESSION['address'] = $address;
                    $_SESSION['url'] = $url;
                    $_SESSION['meta_description'] = $meta;
                    $_SESSION['map_img'] = $map;
                    $_SESSION['map_link'] = $map_link;

                    // echo($img1);

                    echo(
                        "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr'>
                        <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                        <h4>$name[$ctr]</h4>
                        <p class='captions'>From $".$price[$ctr].(($result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result["isLocal"] == 'Y') ? " | Local Activity" : "").(($result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                        </a>"
                    );
                    $ctr = $ctr+1;
                }
            ?>

            <!-- <a class="card" id="cardA0" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly | Theme Park Here Yessir</p>
            </a> -->

            <!-- <a class="card" id="cardA1" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA2" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA3" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA4" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA5" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA6" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a>

            <a class="card" id="cardA7" href="activity.php">
                <img class="card-image" src="img/images/magickingdom.jpeg" alt="Magic Kingdom Castle">
                <h4>Magic Kingdom Park</h4>
                <p class="captions">From $109 | Family-Friendly</p>
            </a> -->

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
        <div class="carouselInline">
            <button class="nobtndecor" id="autoLeft1">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="carouselArrow carouselRight"> <!--Using add icon as a placeholder for css purposes-->
            </button>
            <section class="carousel" id="scroll1">
                <div class="card" id="bC0"> <!--Naming Convention for cards bC0 = blog card 0-->
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>The Popular Themeparks</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC1">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Getting Around on I4</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC2">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Where's The Beach?</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC3">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>What Orlando Locals do</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC4">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Dynamic Blog 5</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC5">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Dynamic Blog 6</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC6">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Dynamic Blog 7</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
                <div class="card" id="bC7">
                    <a class= "actPage" href="blog.php">
                        <div class="clickCard">
                            <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                            <p>Dynamic Blog 8</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
            </section>
            <button class="nobtndecor" id="autoRight1">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="carouselArrow carouselLeft"> <!--Using add icon as a placeholder for css purposes-->
            </button>
        </div>
        <!--Cards-->
    </section>
    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>
    <!--Articles-->
    <section class="card-row">
        <h2 cclass="row-title">Local Orlando Vibes</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Local Vibes</p></a>
        <!--Cards-->
        <div class="carouselInline">
            <button class="nobtndecor" id="autoLeft2">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="carouselArrow carouselLeft"> <!--Using add icon as a placeholder for css purposes-->
            </button>
            <section class="carousel" id="scroll2">
                <div class="card" id="aC0"> <!--Naming Convention for cards aC0 = articles card 0-->
                    <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>BEST: Beach</p> <!--Will worry about text styling later-->
                </div>
                <div class="card" id="aC1">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>BEST: Themepark</p>
                </div>
                <div class="card" id="aC2">
                    <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>POPULAR: Orlando Tips</p>
                </div>
                <div class="card" id="aC3">
                    <img src="img/images/keg.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>POPULAR: Local Spot</p>
                </div>
                <div class="card" id="aC4">
                    <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 5</p>
                </div>
                <div class="card" id="aC5">
                    <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 6</p>
                </div>
                <div class="card" id="aC6">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 7</p>
                </div>
                <div class="card" id="aC7">
                    <img src="img/images/universal.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Vibe 8</p>
                </div>
            </section>
            <button class="nobtndecor inline" id="autoRight2">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="carouselArrow carouselRight"> <!--Using add icon as a placeholder for css purposes-->
            </button>
        </div> 
    </section>
    <!--Preplanned-->
    <section class="card-row">
        <h2 class="row-title">Preplanned Orlando Itineraries</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Preplanned Orlando Itineraries</p></a>
        <div class="carouselInline">
            <button class="nobtndecor" id="autoLeft3">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="carouselArrow carouselLeft"> <!--Using add icon as a placeholder for css purposes-->
            </button>        
            <!--Cards-->
            <section class="carousel" id="scroll3">
                <div class="card" id="piC0"> <!--Naming Convention for cards piC0 = preplanned itineraries card 0-->
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>3 Day Themepark Trip</p> <!--Will worry about text styling later-->
                </div>
                    </a>
                <div class="card" id="piC1">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Visiting Brevard County</p>
                </div>
                    </a>
                <div class="card" id="piC2">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Family Florida Fun</p>
                </div>
                    </a>
                <div class="card" id="piC3">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/i4.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Top Tourist Traps</p>
                </div>
                    </a>
                <div class="card" id="piC4">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/aquatica.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Preplanned 5</p>
                </div>
                    </a>
                <div class="card" id="piC5">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/legoland.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Preplanned 6</p>
                </div>
                    </a>
                <div class="card" id="piC6">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Preplanned 7</p>
                </div>
                    </a>
                <div class="card" id="piC7">
                    <a class="actPage" href="preplanned.php">
                    <img src="img/images/beach.jpg" class="image" alt="Magic Kingdom Castle">
                    <p>Dynamic Preplanned 8</p>
                </div>
                    </a>
            </section>
            <button class="nobtndecor" id="autoRight3">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="carouselArrow carouselRight"> <!--Using add icon as a placeholder for css purposes-->
            </button>
        </div>
        
    </section>
    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>
</section></section>