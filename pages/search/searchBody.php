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

            // $search_tp = array( str_contains($results, metaphone("park")) , metaphone("water park") , metaphone("theme park") , metaphone("roller coaster") , metaphone("amusement park") , metaphone("carnival") , metaphone("fair") , metaphone("attraction") , metaphone("adventure"));
            // $search_res = array(metaphone("eat"), metaphone("eating"), metaphone("eatery"), metaphone("food"), metaphone("drink"), metaphone("drinks"), metaphone("lunch"), metaphone("dinner"), metaphone("breakfast"), metaphone("cafe"), metaphone("dish"), );

            // if there is nothing in the search bar
            if (!isset($_POST['searchbar']) || empty($_POST['searchbar'])){
                print("You have not searched for anything yet. Search for an event");
            }

            // else if there is something in the search bar
            else {
                // returns the value of whatever the user enters on the search bar
                $results = strtolower($_POST['searchbar']);
                echo($results);
                echo("<br>");
                echo(metaphone($results));
                echo("<br>");

                $search_tp = array(metaphone("park"), metaphone("water park"), metaphone("theme park"), metaphone("roller coaster"), metaphone("amusement park"), metaphone("carnival"), metaphone("fair"), metaphone("attraction"), metaphone("adventure"), metaphone("shows"),);
                $search_res = array(metaphone("eat"), metaphone("eating"), metaphone("eatery"), metaphone("food"), metaphone("drink"), metaphone("drinks"), metaphone("lunch"), metaphone("dinner"), metaphone("breakfast"), metaphone("cafe"), metaphone("dish"), metaphone("dishes"), metaphone("hungry"), metaphone("thirsty"), metaphone("meal"), metaphone("cook"), metaphone("snack"), metaphone("beverage"), metaphone("cater"), metaphone("munch"), metaphone("feed"));
                $search_rainy = array(metaphone("bad weather"), metaphone("weather"), metaphone("storm"), metaphone("rain"), metaphone("weather day"), metaphone("inside"), metaphone("jacket"), metaphone("thunder"), metaphone("wind"));
                $search_fam = array(metaphone("child"), metaphone("children"), metaphone("kids"), metaphone("teens"), metaphone("teenagers"), metaphone("teenager"), metaphone("family"), metaphone("friend"), metaphone("families"), metaphone("friends"));
                $search_local = array(metaphone("around"), metaphone("area"), metaphone("community"), metaphone("local"), metaphone("normal"), metaphone("nearby"), metaphone("corner"), metaphone("familiar"), metaphone("familiarity"), metaphone("UCF"), metaphone("university of central florida"), metaphone("college"), metaphone("football"), metaphone("native"));
                $search_good = array(metaphone("cheap"), metaphone("poor"), metaphone("dollar"), metaphone("coin"), metaphone("price"), metaphone("cost"), metaphone("afford"), metaphone("affordable"), metaphone("bargain"), metaphone("special"), metaphone("reasonable"), metaphone("budget"), metaphone("reduce"), metaphone("money"));
                $search_outdoor = array(metaphone("out"), metaphone("outdoor"), metaphone("outside"), metaphone("animal"), metaphone("animals"), metaphone("zoo"), metaphone("explore"), metaphone("exploring"), metaphone("land"), metaphone("sky"), metaphone("wind"), metaphone("exercise"), metaphone("garden"), metaphone("air"), metaphone("green"), metaphone("recreation"), metaphone("fresh"));
                $search_live = array(metaphone("music"), metaphone("shows"), metaphone("concert"), metaphone("festival"), metaphone("show"), metaphone("social"), metaphone("musical"), metaphone("play"), metaphone("opera"), metaphone("nightclub"), metaphone("club"), metaphone("comedy"), metaphone("standup"), metaphone("band"), metaphone("venue"), metaphone("film"), metaphone("live"),metaphone("screen"));
                $search_art = array(metaphone("music"), metaphone("museum"), metaphone("shows"), metaphone("culture"), metaphone("show"), metaphone("paint"), metaphone("mural"), metaphone("artist"), metaphone("create"), metaphone("craft"), metaphone("brush"), metaphone("design"), metaphone("history"), metaphone("draw"), metaphone("photo"), metaphone("color"), metaphone("sketch"), metaphone("exhibit"), metaphone("easel"), metaphone("sculpt"), metaphone("media"), metaphone("animation"), metaphone("studio"), metaphone("display"), metaphone("heritage"), metaphone("renaissance"), metaphone("statue"), metaphone("mythology"));
                
                // if what the user searches matches matches something from the meta data
                if (in_array(metaphone($results), $search_tp) || strstr($results, 'park') || strstr($results, 'theme') || strstr($results, 'amusement') || strstr($results, 'attraction')){
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

                if (in_array(metaphone($results), $search_res) || strstr($results, 'eat') || strstr($results, 'food') || strstr($results, 'lunch') || strstr($results, 'dinner') || strstr($results, 'breakast') || strstr($results, 'meal') || strstr($results, 'cook') || strstr($results, 'drink')){
                    echo "We have found a restaurant match match!";


                    foreach($searchRestaurant AS $searchRes){
                        $id = $searchRes["id"];
                        $name = $searchRes["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }


                if (in_array(metaphone($results), $search_rainy) || strstr($results, 'weater') || strstr($results, 'jacket') || strstr($results, 'inside') || strstr($results, 'rain')){
                    echo "We have found a rainy day match match!";


                    foreach($searchRainy AS $searchRain){
                        $id = $searchRain["id"];
                        $name = $searchRain["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_fam) || strstr($results, 'child') || strstr($results, 'teen') || strstr($results, 'friend') || strstr($results, 'family') || strstr($results, 'sister') || strstr($results, 'brother') || strstr($results, 'daughter') || strstr($results, 'son') || strstr($results, 'father') || strstr($results, 'mother') || strstr($results, 'dad') || strstr($results, 'mom')){
                    echo "We have found a family and friends match match!";


                    foreach($searchFamily AS $searchFF){
                        $id = $searchFF["id"];
                        $name = $searchFF["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_local) || strstr($results, 'local') || strstr($results, 'nearby') || strstr($results, 'area') || strstr($results, 'native')){
                    echo "We have found a local event match match!";


                    foreach($searchLocal AS $searchLoc){
                        $id = $searchLoc["id"];
                        $name = $searchLoc["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_good) || strstr($results, 'cheap') || strstr($results, 'poor') || strstr($results, 'bargain') || strstr($results, 'cost') || strstr($results, 'dollar') || strstr($results, 'afford') || strstr($results, 'money')){
                    echo "We have found a good value match match!";


                    foreach($searchGoodVal AS $searchGood){
                        $id = $searchGood["id"];
                        $name = $searchGood["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }


                if (in_array(metaphone($results), $search_outdoor) || strstr($results, 'out') || strstr($results, 'outside') || strstr($results, 'exercise') || strstr($results, 'air')){
                    echo "We have found a outdoor events match match!";


                    foreach($searchOutdoor AS $searchOut){
                        $id = $searchOut["id"];
                        $name = $searchOut["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_live) || strstr($results, 'music') || strstr($results, 'club') || strstr($results, 'concert') || strstr($results, 'social')){
                    echo "We have found a live events match match!";


                    foreach($searchLiveEvent AS $searchLive){
                        $id = $searchLive["id"];
                        $name = $searchLive["event_name"];

                        print(
                            "<a href='itinerary.php'>
                                <section class='search-card'>    
                                    $name
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_art) || strstr($results, 'art') || strstr($results, 'museum') || strstr($results, 'culture') || strstr($results, 'show') || strstr($results, 'exhibit') || strstr($results, 'draw') || strstr($results, 'color') || strstr($results, 'sculpt') || strstr($results, 'easel') || strstr($results, 'design')){
                    echo "We have found a arts, museums, and culture match match!";


                    foreach($searchArts AS $searchArt){
                        $id = $searchArt["id"];
                        $name = $searchArt["event_name"];

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
                else if (!(in_array(metaphone($results), $search_tp) || strstr($results, 'park') || strstr($results, 'theme') || strstr($results, 'amusement') || strstr($results, 'attraction')) && !(in_array(metaphone($results), $search_res) || strstr($results, 'eat') || strstr($results, 'food') || strstr($results, 'lunch') || strstr($results, 'dinner') || strstr($results, 'breakast') || strstr($results, 'meal') || strstr($results, 'cook') || strstr($results, 'drink')) && !(in_array(metaphone($results), $search_rainy) || strstr($results, 'weater') || strstr($results, 'jacket') || strstr($results, 'inside') || strstr($results, 'rain')) && !(in_array(metaphone($results), $search_fam) || strstr($results, 'child') || strstr($results, 'teen') || strstr($results, 'friend') || strstr($results, 'family') || strstr($results, 'sister') || strstr($results, 'brother') || strstr($results, 'daughter') || strstr($results, 'son') || strstr($results, 'father') || strstr($results, 'mother') || strstr($results, 'dad') || strstr($results, 'mom')) && !(in_array(metaphone($results), $search_local) || strstr($results, 'local') || strstr($results, 'nearby') || strstr($results, 'area') || strstr($results, 'native')) && !(in_array(metaphone($results), $search_good) || strstr($results, 'cheap') || strstr($results, 'poor') || strstr($results, 'bargain') || strstr($results, 'cost') || strstr($results, 'dollar') || strstr($results, 'afford') || strstr($results, 'money')) && !(in_array(metaphone($results), $search_outdoor) || strstr($results, 'out') || strstr($results, 'outside') || strstr($results, 'exercise') || strstr($results, 'air')) && !(in_array(metaphone($results), $search_live) || strstr($results, 'music') || strstr($results, 'club') || strstr($results, 'concert') || strstr($results, 'social')) && !(in_array(metaphone($results), $search_art) || strstr($results, 'art') || strstr($results, 'museum') || strstr($results, 'culture') || strstr($results, 'show') || strstr($results, 'exhibit') || strstr($results, 'draw') || strstr($results, 'color') || strstr($results, 'sculpt') || strstr($results, 'easel') || strstr($results, 'design'))) {
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