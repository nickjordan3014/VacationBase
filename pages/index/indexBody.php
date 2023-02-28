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

                            echo(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>From $".$price[$ctr].(($result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result["isLocal"] == 'Y') ? " | Local Activity" : "").(($result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                            $ctr = $ctr+1;
                        }
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight0">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <br>
    <br>
    <br>
    <br>


<!-- SECOND CARD ROW -->

    <!--Blogs-->
    <section class="card-row">

        <h2 class="row-title">Blogs about Orlando</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Blogs</p></a>

        <button class="caro-btn-left" id="autoLeft1">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
            
            <!--Cards-->
            <section class="carousel" id="scroll1">
                <?php
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>The Popular Theme Parks</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                ?>
            </section>

        <button class="caro-btn-right" id="autoRight1">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

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

<!-- THIRD CARD ROW -->

    <!--Travel TIps-->
    <section class="card-row">

        <h2 class="row-title">Orlando Travel Tips</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Travel Tips</p></a>

        <button class="caro-btn-left" id="autoLeft2">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
        
            <!--Cards-->
            <section class="carousel" id="scroll2">

                <?php
                    echo(
                        "<a class= 'card' id='aC0' href=''>
                        <img src='img/images/traveltips/i4.jpg' class='card-image' alt=''>
                        <h4>Getting Around I-4</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC1' href=''>
                        <img src='img/images/traveltips/shuttlebus.jpg' class='card-image' alt=''>
                        <h4>Bus and Shuttle Routes</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC2' href=''>
                        <img src='img/images/traveltips/carrent.jpg' class='card-image' alt=''>
                        <h4>Car Rental Services</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC3' href=''>
                        <img src='img/images/traveltips/toll.jpg' class='card-image' alt=''>
                        <h4>E-Passes, Sunpasses and Quarters</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC4' href=''>
                        <img src='img/images/traveltips/garage.jpg' class='card-image' alt=''>
                        <h4>Parking Garage To-Dos</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC5' href=''>
                        <img src='img/images/traveltips/scooter.jpg' class='card-image' alt=''>
                        <h4>E-Scooters</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC6' href=''>
                        <img src='img/images/traveltips/ubertaxi.jpg' class='card-image' alt=''>
                        <h4>Ubers and Taxis</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='aC7' href=''>
                        <img src='img/images/traveltips/night.jpg' class='card-image' alt=''>
                        <h4>Walking Around at Night</h4>
                        </a>&nbsp;"
                    );
                ?>

            </section>

        <button class="caro-btn-right" id="autoRight2">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <br>
    <br>
    <br>
    <br>

<!-- FOURTH CARD ROW -->

    <!--Preplanned-->
    <section class="card-row">

        <h2 class="row-title">Preplanned Orlando Itineraries</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Preplanned Orlando Itineraries</p></a>

        <button class="caro-btn-left" id="autoLeft3">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>  

        <!--Cards-->
        <section class="carousel" id="scroll3">
        <?php
                    echo(
                        "<a class= 'card' id='piC0' href='preplanned.php'>
                        <img src='img/images/preplanned/threedayTP.jpg' class='card-image' alt=''>
                        <h4>3 Day Theme Park Trip</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC1' href='preplanned.php'>
                        <img src='img/images/preplanned/family.jpg' class='card-image' alt=''>
                        <h4>Family Vacation</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC2' href='preplanned.php'>
                        <img src='img/images/preplanned/21.jpg' class='card-image' alt=''>
                        <h4>21+ Weekend of Fun</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC3' href='preplanned.php'>
                        <img src='img/images/preplanned/budget.jpg' class='card-image' alt=''>
                        <h4>On a Budget Getaway</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC4' href='preplanned.php'>
                        <img src='img/images/preplanned/friends.jpg' class='card-image' alt=''>
                        <h4>Friends Trip</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC5' href='preplanned.php'>
                        <img src='img/images/preplanned/restaurant.jpg' class='card-image' alt=''>
                        <h4>Restaurant Dine and Dash</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC6' href='preplanned.php'>
                        <img src='img/images/preplanned/outside.jpg' class='card-image' alt=''>
                        <h4>Outdoor Fun</h4>
                        </a>&nbsp;"
                    );
                    echo(
                        "<a class= 'card' id='piC7' href='preplanned.php'>
                        <img src='img/images/preplanned/local.jpg' class='card-image' alt=''>
                        <h4>Living Like a Local</h4>
                        </a>&nbsp;"
                    );
                ?>
            <!-- <div class="card" id="piC0">
                <a class="actPage" href="preplanned.php">
                <img src="img/images/popular.jpg" class="image" alt="Magic Kingdom Castle">
                <p>3 Day Theme Park Trip</p>
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
                </a> -->
        </section>

        <button class="caro-btn-right" id="autoRight3">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
                
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