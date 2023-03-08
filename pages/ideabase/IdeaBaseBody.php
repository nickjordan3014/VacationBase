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
        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <!--Cards-->
        <section class="carousel" id="scroll0">
            <div class="ideabase-card" id="ibC0"> 
                <a class= "actPage" href="search.php?eventType=Restaurants" onclick='post'>
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
                <a class= "actPage" href="search.php?eventType='Good Value'" onclick='post'>
                    <img 
                        src="img/gallery/cheap.png" 
                        class="ideabase-image" 
                        alt="Cheap Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC2">
                <a class= "actPage" href="search.php?eventType='Art, Museum and Culture'" onclick='post'>
                    <img 
                        src="img/gallery/culture.png" 
                        class="ideabase-image" 
                        alt="Culture Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC3"> 
                <a class= "actPage" href="search.php?eventType=Family" onclick='post'>
                    <img 
                        src="img/gallery/kid-friendly.png" 
                        class="ideabase-image" 
                        alt="Kid Friendly Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC4"> 
                <a class= "actPage" href="search.php?eventType=Live" onclick='post'>
                    <img 
                        src="img/gallery/live_entertainment.png" 
                        class="ideabase-image" 
                        alt="Live Entertainment Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="search.php?eventType=Outdoor" onclick='post'>
                    <img 
                        src="img/gallery/outdoor_active.png" 
                        class="ideabase-image" 
                        alt="Outdoor Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="search.php?eventType='Theme Park'" onclick='post'>
                    <img 
                        src="img/gallery/themepark.png" 
                        class="ideabase-image" 
                        alt="Themepark Graphic" 
                    />
                </a>
            </div>
        </section>


        <button class="caro-btn-right" id="autoRight0">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
    </section>


    <!--Orlando Signature-->
    <section class="card-row">

        <h2 class="row-title">Blogs about Orlando</h2>

        <button class="caro-btn-left" id="autoLeft1">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll1">
                <?php
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/oblogs/popularTP.jpg' class='card-image' alt='People riding an attraction'>
                        <h4>The Popular Theme Parks</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/oblogs/beaches.jpg' class='card-image' alt='Sun setting at Cocoa Beach'>
                        <h4>Best Beaches in the Area</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
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


    <!-- TBD -->


    <!--Blogs-->
    
    <section class="card-row">
        <h2 class="row-title">Preplanned Orlando Itineraries</h2>

        <button class="caro-btn-left" id="autoLeft2">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>  

        <!--Cards-->
        <section class="carousel" id="scroll2">
            <?php
                print(
                    "<a class= 'card' id='piC0' href='preplanned.php'>
                    <img src='img/images/preplanned/threedayTP.jpg' class='card-image' alt=''>
                    <h4>3 Day Theme Park Trip</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC1' href='preplanned.php'>
                    <img src='img/images/preplanned/family.jpg' class='card-image' alt=''>
                    <h4>Family Vacation</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC2' href='preplanned.php'>
                    <img src='img/images/preplanned/21.jpg' class='card-image' alt=''>
                    <h4>21+ Weekend of Fun</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC3' href='preplanned.php'>
                    <img src='img/images/preplanned/budget.jpg' class='card-image' alt=''>
                    <h4>On a Budget Getaway</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC4' href='preplanned.php'>
                    <img src='img/images/preplanned/friends.jpg' class='card-image' alt=''>
                    <h4>Friends Trip</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC5' href='preplanned.php'>
                    <img src='img/images/preplanned/restaurant.jpg' class='card-image' alt=''>
                    <h4>Restaurant Dine and Dash</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC6' href='preplanned.php'>
                    <img src='img/images/preplanned/outside.jpg' class='card-image' alt=''>
                    <h4>Outdoor Fun</h4>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC7' href='preplanned.php'>
                    <img src='img/images/preplanned/local.jpg' class='card-image' alt=''>
                    <h4>Living Like a Local</h4>
                    </a>&nbsp;"
                );
            ?>
        </section>

        <button class="caro-btn-right" id="autoRight2">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
    </section>

    <section class="card-row">

        <h2 class="row-title">Orlando Travel Tips</h2>

        <button class="caro-btn-left" id="autoLeft3">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll3">

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

        <button class="caro-btn-right" id="autoRight3">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

</section></section>