<section class="main-content"><section class="inner-content">
    <br><br>
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
                <a class= "actPage" href="search.php?query=Restaurants" name='restaurants' onclick='post'>
                        <img 
                            src="img/gallery/bar_resturants.png" 
                            class="ideabase-image" 
                            alt="Bars and Restaurants Graphic" 
                        />
                </a>
            </div>
            <div class="ideabase-card" id="ibC1"> 
                <a class= "actPage" href="search.php?query=Value" onclick='post'>
                    <img 
                        src="img/gallery/cheap.png" 
                        class="ideabase-image" 
                        alt="Cheap Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC2">
                <a class= "actPage" href="search.php?query=Art" onclick='post'>
                    <img 
                        src="img/gallery/culture.png" 
                        class="ideabase-image" 
                        alt="Culture Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC3"> 
                <a class= "actPage" href="search.php?query=Family" onclick='post'>
                    <img 
                        src="img/gallery/kid-friendly.png" 
                        class="ideabase-image" 
                        alt="Kid Friendly Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC4"> 
                <a class= "actPage" href="search.php?query=Live" onclick='post'>
                    <img 
                        src="img/gallery/live_entertainment.png" 
                        class="ideabase-image" 
                        alt="Live Entertainment Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="search.php?query=Outdoor" onclick='post'>
                    <img 
                        src="img/gallery/outdoor_active.png" 
                        class="ideabase-image" 
                        alt="Outdoor Graphic" 
                    />
                </a>
            </div>
            <div class="ideabase-card" id="ibC5"> 
                <a class= "actPage" href="search.php?query=ThemePark" onclick='post'>
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

    <!-- premade itineraries -->
    <section class="card-row">
        <h2 class="row-title">Orlando Itineraries Just For You</h2>
        <!--Cards-->
        <section class="carousel" id="scroll2">
            <?php
                print(
                    "<a class= 'card' id='piC0' href='preplanned.php?preplanned=1'>
                    <img src='img/images/preplanned/threedayTP.jpg' class='card-image' alt=''>
                    <h4>3 Day Theme Park Trip</h4>
                    <p class='captions'>Starting at $317.99</p>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC1' href='preplanned.php?preplanned=2'>
                    <img src='img/images/preplanned/museum.jpg' class='card-image' alt=''>
                    <h4>4 Days of Art and Culture</h4>
                    <p class='captions'>Starting at $129.99</p>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC2' href='preplanned.php?preplanned=3'>
                    <img src='img/images/preplanned/nightlife.jpg' class='card-image' alt=''>
                    <h4>A Week of Orlando Nightlife</h4>
                    <p class='captions'>Starting at $349.99</p>
                    </a>&nbsp;"
                );
                print(
                    "<a class= 'card' id='piC3' href='preplanned.php?preplanned=4'>
                    <img src='img/images/preplanned/outside.jpg' class='card-image' alt=''>
                    <h4>3 Day Outdoor Fun</h4>
                    <p class='captions'>Starting at $189.99</p>
                    </a>&nbsp;"
                );
            ?>
        </section>
    </section>

    <!-- travel tips -->
    <section class="card-row">
    <h2 class="row-title">Tips for Traveling Orlando</h2>
    <!--Cards-->
    <section class="carousel" id="scroll3">
        <?php
            print(
                "<a class= 'card' id='aC0' href='triptips.php?tips=1'>
                <img src='img/images/traveltips/sunrail.jpg' class='card-image' alt=''>
                <h4>Orlando's SunRails</h4>
                <p class='captions'> Sunrail tips & destinations.</p>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='aC1' href='triptips.php?tips=2'>
                <img src='img/images/traveltips/i4.jpg' class='card-image' alt=''>
                <h4>Getting Around I-4</h4>
                <p class='captions'>Things to know about the I-4 highway.</p>
                </a>&nbsp;"
            );
            echo(
                "<a class= 'card' id='aC2' href='triptips.php?tips=3'>
                <img src='img/images/traveltips/carrent.jpg' class='card-image' alt=''>
                <h4>Transportation Services</h4>
                <p class='captions'>Explore Orlando transportation methods.</p>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='aC3' href='triptips.php?tips=4'>
                <img src='img/images/traveltips/toll.jpg' class='card-image' alt=''>
                <h4>E-Passes, Sunpasses and Quarters</h4>
                <p class='captions'>Tips for using toll roads in Orlando.</p>
                </a>&nbsp;"
            );
        ?>
    </section>
    </section>


    <!--Orlando Best of's-->
    <section class="card-row">
        <h2 class="row-title">Orlando's Specialties</h2>
            <!--Cards-->
            <section class="carousel" id="scroll1">
                <?php
                    print(
                        "<a class= 'card' id='bC0' href='blog.php?blog=1'>
                        <img src='img/images/oblogs/popularTP.jpg' class='card-image' alt='People riding an attraction'>
                        <h4>The Popular Theme Parks</h4>
                        <p class='captions'>| Theme Parks | Live Events | Local Hangout | Family-Friendly | Outdoors |</p>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php?blog=2'>
                        <img src='img/images/oblogs/beaches.jpg' class='card-image' alt='Sun setting at Cocoa Beach'>
                        <h4>Best Beaches in the Area</h4>
                        <p class='captions'>| Local Hangout | Great Value | Family-Friendly | Outdoors |</p>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php?blog=3'>
                        <img src='img/images/oblogs/idrive.jpg' class='card-image' alt='I-Drive'>
                        <h4>I-Drive</h4>
                        <p class='captions'>| Live Events | Local Hangout | Great Value | Any Weather | Family-Friendly | Outdoors |</p>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php?blog=4'>
                        <img src='img/images/oblogs/downtown.jpg' class='card-image' alt='Downtown Orlando'>
                        <h4>Downtown Orlando</h4>
                        <p class='captions'>| Live Events | Local Hangout | Great Value | Family-Friendly | Outdoors |</p>
                        </a>&nbsp;"
                    );
                ?>
            </section>
    </section>

</section></section>