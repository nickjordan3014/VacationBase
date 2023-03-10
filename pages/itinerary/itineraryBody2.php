<?php
    if(isset($_SESSION['user'])){
?>
<section class="main-content"><section class="inner-content">
<!-- 
    *If user not logged in, prompt user to log in or create account

    *If user logged in, prompt user to create an Itinerary with Dates

    *If Card Row is empty, prompt user to go find different activities from ideabase, search, home pages

    *Carousel (only if user adds more then four activities / Images at top will contain activities user selected
        - same design and database pulls as cards from home and ideabase

    Carousel (more then 4 days on big screen / all trips on mobile) / Row will be created based on length of trip selected
        - user will drag and drop activities from top carousel to carousel with dates to create itinerary
        - activites dropped will be saved into the back end when the user hits the save button
-->

<h1>Itinerary Builder</h1>
<h2>Selected Activities</h2><br>
<section class="carousel-itinerary">
    <ul id="selection" class="ul-itin">
        <li class='li-itin'>
            <span class='card-it'>
            <img src="img/images/animalkingdom/animalkingdom1.jpg" alt="" class='card-image'>
            <h4>Magic Kingdom 1</h4>
            <p class='captions'>Words Words Words</p>
            </span>
        </li>
        <li class='li-itin'>
            <span href="" class='card-it'><img src="img/images/animalkingdom/animalkingdom1.jpg" alt="" class='card-image'><h4>Magic Kingdom 2</h4><p class='captions'>Words Words Words</p></span>
        </li>
        <li class='li-itin'>
            <span href="" class='card-it'><img src="img/images/animalkingdom/animalkingdom1.jpg" alt="" class='card-image'><h4>Magic Kingdom 3</h4><p class='captions'>Words Words Words</p></span>
        </li>
        <li class='li-itin'>
            <span href="" class='card-it'><img src="img/images/animalkingdom/animalkingdom1.jpg" alt="" class='card-image'><h4>Magic Kingdom 4</h4><p class='captions'>Words Words Words</p></span>
        </li>
        <li class='li-itin'>
            <span href="" class='card-it'><img src="img/images/animalkingdom/animalkingdom1.jpg" alt="" class='card-image'><h4>Magic Kingdom 5</h4><p class='captions'>Words Words Words</p></span>
        </li>
    </ul>

    <br>
    <br>

    <section class="" id="itinerary">

        <h2>Your Itinerary</h2>

            <section class='card-yt'>
                <h3 class="center-text">Day 1</h3><hr>
                <ul id="day_0" class="itin-h">
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 2</h3><hr>
                <ul id="day_1" class="itin-h"> 
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 3</h3><hr>
                <ul id="day_2" class="itin-h"> 
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 4</h3><hr>
                <ul id="day_3" class="itin-h"> 
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 5</h3><hr>
                <ul id="day_4" class="itin-h"> 
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 6</h3><hr>
                <ul id="day_5" class="itin-h"> 
                    
                </ul>
            </section>

            <section class='card-yt'>
                <h3 style='text-align:center'>Day 7</h3><hr>
                <ul id="day_6" class="itin-h"> 
                    
                </ul>
            </section>       
    </section>
    <!-- button used to be here -->
</section>
<button onclick=itineraryString()>Save Itinerary</button> <!--Last function in itinerary2.js operates this onclick-->


</section></section>
<?php
    } else{
        header("location: login.php");
    }
?>
