<section class="main-content">
    <section class="inner-content">
        <article class="adleaderboard">
            <p>[ad here]</p> <!-- where does it go?! figure out later -->
        </article>
    </section>
    <!-- SEARCH PAGE HEADER -->
    <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="mobileLogo">
    <section class="search-content">
        <section class="logo-area">
            <form action="search.php" method="POST" class="logo-area">     
                    <label for="search" class="searchlabel">Show me... </label>
                    <input type="text" name="searchbar" class="searchpagebox">
                    <button class="nobtndecor" type="submit" name="search_btn">
                        <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                    </button>
            </form>
        </section>
        <hr class="hsline">
        <?php

            $search_tp = array(metaphone("park"), metaphone("water park"), metaphone("theme park"), metaphone("roller coaster"), metaphone("amusement park"), metaphone("carnival"), metaphone("fair"), metaphone("attraction"), metaphone("adventure"));
            // $search_res = array();

            // if there is nothing in the search bar
            if (!isset($_POST['searchbar']) || empty($_POST['searchbar'])){
                print("You have not searched for anything yet. Search for an event");
            }

            // else if there is something in the search bar
            else {
                // returns the value of whatever the user enters on the search bar
                $results = $_POST['searchbar'];

                // if what the user searches matches matches something from the meta data
                if (in_array(metaphone($results), $search_tp)){
                    echo "We have found a theme park match match!";


                    foreach($searchThemePark AS $searchTP){
                        $id = $searchTP["id"];
                        $name = $searchTP["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                // else if what the yser searches doesnt match anything
                else {
                    print("We couldnt find any results for the search '".$results."'");
                }

            }
        ?>
        <!-- <section class="search-card" href="activity.php">
            <img src="img/images/legoland.jpg" class="search-image" alt="Magic Kingdom Castle">
            <article class="search-card-content">
                <h3>Legoland Florida | From $84</h3>
                <p class ="subtext">$$$, Themepark, Kid-Focused, Family-Friendly, Outdoors</p>
                <p>Legoland is a themepark bursting with...</p>
            </article>
        </section>
        <section class="search-card" href="activity.php">
            <img src="img/images/universal.jpg" class="search-image" alt="Magic Kingdom Castle">
            <article class="search-card-content">
                <h3>Universal Studios FL | From $104</h3>
                <p class ="subtext">$$$, Themepark, Universal, Fun Solo, Outdoors</p>
                <p>With a theme of movies, TV, adventure, and...</p>
            </article>
        </section>
        <section class="search-card" href="activity.php">
            <img src="img/images/aquatica.jpg" class="search-image" alt="Magic Kingdom Castle">
            <article class="search-card-content">
                <h3>Aquatica Orlando | From $44</h3>
                <p class ="subtext">$$$, Themepark, Waterpark, Family-Friendly, Outdoors</p>
                <p>Aquatica combines high-speed thrills with...</p>
            </article>
        </section>
        <section class="search-card" href="activity.php">
            <img src="img/images/popular.jpg" class="search-image" alt="Magic Kingdom Castle">
            <article class="search-card-content">
                <h3>Magic Kingdom Park | From $109</h3>
                <p class ="subtext">$$$, Themepark, Disney, Family-Friendly, Outdoors</p>
                <p>Magic Kingdom park is a theme park at...</p>
            </article>
        </section> -->
    </section>
    <section class="filter-content">
        <form action="filter.php" class="filter-form">
            <section>
                <h4>Days Open</h4>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Sunday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Monday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Tuesday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Wednesday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Thursday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Friday
                </label>
                <label for="daysOpen" class="filter-label">
                    <input type="checkbox">
                    Saturday
                </label>
            </section>
            <section>
                <h4>Budget</h4>
                <label for="budget">No more per person minimum than </label>
                <input type="text" placeholder="$" class="filter-text">
            </section>
            <section>
                <h4>Age Requirement</h4>
                <label for="all"><input type="radio">All</label>
                <label for="13"><input type="radio">13+</label>
                <label for="18"><input type="radio">18+</label>
                <label for="21"><input type="radio">21+</label>
            </section>
            <section>
                <h4>Great For</h4>
                <label for="storm" class="filter-label"><input type="checkbox">Stormy Weather</label>
                <label for="fam" class="filter-label"><input type="checkbox">Families</label>
                <label for="solo" class="filter-label"><input type="checkbox">Going Solor</label>
                <label for="value" class="filter-label"><input type="checkbox">Awesome Value</label>
                <label for="local" class="filter-label"><input type="checkbox">Living like a Local</label>
                <label for="transit" class="filter-label"><input type="checkbox">Public Transit</label>
            </section>
        </form>
        <article class="sa">
            <p>[ad here]</p>
        </article>
    </section>
</section>