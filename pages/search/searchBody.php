<?php 
if(isset($_GET['query'])){
    $see = $_GET['query']; 
}
?>

<section class="main-content">
    <section class="inner-content">
    </section>
    <!-- SEARCH PAGE HEADER -->
    <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="mobileLogo">
    <section class="search-content">
        <section class="logo-area">
            <form action="search.php" method="get" id="mainSearchForm" class="logo-item">     
                    <label for="search" class="logo-item">Show me... </label>
                    <input type="text" name="query" class="searchpagebox logo-item" value='<?php print($search_query)?>'>
                    <button class="nobtndecor" type="submit">
                        <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                    </button>
            </form>
        </section>
        <hr class="hsline">

        <hr><hr>
        <?php 
        
        foreach ($query_results AS $search_result){ 
            foreach ($search_result["results"] AS $debug){
                $this_card = _build_search_card($debug);
                print("$this_card");
                print("<br>test2<br>");  // for debug
            }
            print("<br>test1<br>"); // for debug
        }
        ?>
        <hr><hr>

        <!-- older code -->
        <?php

            // $see = $_GET['eventType'];

            // print($see);
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
                // echo($results);
                // echo("<br>");
                // echo(metaphone($results));
                // echo("<br>");
                $somePrint = 'false';
                $oneName = 'false';

                $search_tp = array(metaphone("parks"), metaphone("water parks"), metaphone("theme parks"), metaphone("roller coasters"), metaphone("amusement parks"), metaphone("carnivals"), metaphone("fairs"), metaphone("attractions"), metaphone("adventures"), metaphone("shows"),);
                $search_res = array(metaphone("restaurants"), metaphone("eat"), metaphone("eating"), metaphone("eatery"), metaphone("food"), metaphone("drink"), metaphone("drinks"), metaphone("lunch"), metaphone("dinner"), metaphone("breakfast"), metaphone("cafe"), metaphone("dish"), metaphone("dishes"), metaphone("hungry"), metaphone("thirsty"), metaphone("meal"), metaphone("cook"), metaphone("snack"), metaphone("beverage"), metaphone("cater"), metaphone("munch"), metaphone("feed"));
                $search_rainy = array(metaphone("bad weather"), metaphone("weather"), metaphone("storm"), metaphone("rain"), metaphone("weather day"), metaphone("inside"), metaphone("jacket"), metaphone("thunder"), metaphone("wind"));
                $search_fam = array(metaphone("child"), metaphone("children"), metaphone("kids"), metaphone("teens"), metaphone("teenagers"), metaphone("teenager"), metaphone("family"), metaphone("friend"), metaphone("families"), metaphone("friends"));
                $search_local = array(metaphone("around"), metaphone("area"), metaphone("community"), metaphone("local"), metaphone("normal"), metaphone("nearby"), metaphone("corner"), metaphone("familiar"), metaphone("familiarity"), metaphone("UCF"), metaphone("university of central florida"), metaphone("college"), metaphone("football"), metaphone("native"));
                $search_good = array(metaphone("cheap"), metaphone("poor"), metaphone("dollar"), metaphone("coin"), metaphone("price"), metaphone("cost"), metaphone("afford"), metaphone("affordable"), metaphone("bargain"), metaphone("special"), metaphone("reasonable"), metaphone("budget"), metaphone("reduce"), metaphone("money"), metaphone("broke"), metaphone("finance"));
                $search_outdoor = array(metaphone("outdoor"), metaphone("outside"), metaphone("animal"), metaphone("animals"), metaphone("zoo"), metaphone("explore"), metaphone("exploring"), metaphone("land"), metaphone("sky"), metaphone("wind"), metaphone("exercise"), metaphone("garden"), metaphone("air"), metaphone("green"), metaphone("recreation"), metaphone("fresh"));
                $search_live = array(metaphone("music"), metaphone("shows"), metaphone("concert"), metaphone("festival"), metaphone("show"), metaphone("social"), metaphone("musical"), metaphone("play"), metaphone("opera"), metaphone("comedy"), metaphone("standup"), metaphone("band"), metaphone("venue"), metaphone("film"), metaphone("live"),metaphone("screen"));
                $search_art = array(metaphone("music"), metaphone("museum"), metaphone("shows"), metaphone("culture"), metaphone("show"), metaphone("paint"), metaphone("mural"), metaphone("artist"), metaphone("create"), metaphone("craft"), metaphone("brush"), metaphone("design"), metaphone("history"), metaphone("draw"), metaphone("photo"), metaphone("color"), metaphone("sketch"), metaphone("exhibit"), metaphone("easel"), metaphone("sculpt"), metaphone("media"), metaphone("animation"), metaphone("studio"), metaphone("display"), metaphone("heritage"), metaphone("renaissance"), metaphone("statue"), metaphone("mythology"));
                
                
                // if what the user searches matches matches something from the meta data. (also test for if what user enters metaphone($results) matches a name in the database)
                if (in_array(metaphone($results), $search_tp) || strstr($results, 'parks') || strstr($results, 'theme') || strstr($results, 'amusement') || strstr($results, 'attractions')){
                    echo "We have found a theme park match match!";


                    foreach($searchThemePark AS $searchTP){
                        $id = $searchTP["id"];
                        $name = $searchTP["event_name"];
                        $price = $searchTP["price"];
                        $img = $searchTP["img1"];
                        $meta = $searchTP["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';
                        print(
                            
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card' >
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }
                
                if (in_array(metaphone($results), $search_res) || strstr($results, 'eat') || strstr($results, 'food') || strstr($results, 'lunch') || strstr($results, 'dinner') || strstr($results, 'breakast') || strstr($results, 'meal') || strstr($results, 'cook') || strstr($results, 'drink')){
                    echo "We have found a restaurant match!";


                    foreach($searchRestaurant AS $searchRes){
                        $id = $searchRes["id"];
                        $name = $searchRes["event_name"];
                        $price = $searchRes["price"];
                        $img = $searchRes["img1"];
                        $meta = $searchRes["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';
                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }


                if (in_array(metaphone($results), $search_rainy) || strstr($results, 'weater') || strstr($results, 'jacket') || strstr($results, 'inside') || strstr($results, 'rain')){
                    echo "We have found a rainy day match!";


                    foreach($searchRainy AS $searchRain){
                        $id = $searchRain["id"];
                        $name = $searchRain["event_name"];
                        $price = $searchRain["price"];
                        $img = $searchRain["img1"];
                        $meta = $searchRain["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';
                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_fam) || strstr($results, 'child') || strstr($results, 'teen') || strstr($results, 'friend') || strstr($results, 'family') || strstr($results, 'sister') || strstr($results, 'brother') || strstr($results, 'daughter') || strstr($results, 'son') || strstr($results, 'father') || strstr($results, 'mother') || strstr($results, 'dad') || strstr($results, 'mom')){
                    echo "We have found a family and friends match!";


                    foreach($searchFamily AS $searchFF){
                        $id = $searchFF["id"];
                        $name = $searchFF["event_name"];
                        $price = $searchFF["price"];
                        $img = $searchFF["img1"];
                        $meta = $searchFF["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_local) || strstr($results, 'local') || strstr($results, 'nearby') || strstr($results, 'area') || strstr($results, 'native')){
                    echo "We have found a local event match!";


                    foreach($searchLocal AS $searchLoc){
                        $id = $searchLoc["id"];
                        $name = $searchLoc["event_name"];
                        $price = $searchLoc["price"];
                        $img = $searchLoc["img1"];
                        $meta = $searchLoc["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_good) || strstr($results, 'cheap') || strstr($results, 'poor') || strstr($results, 'bargain') || strstr($results, 'cost') || strstr($results, 'dollar') || strstr($results, 'afford') || strstr($results, 'money') || strstr($results, 'broke') || strstr($results, 'finance')){
                    echo "We have found a good value match!";


                    foreach($searchGoodVal AS $searchGood){
                        $id = $searchGood["id"];
                        $name = $searchGood["event_name"];
                        $price = $searchGood["price"];
                        $img = $searchGood["img1"];
                        $meta = $searchGood["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }


                if (in_array(metaphone($results), $search_outdoor) || strstr($results, 'exercise') || strstr($results, 'air') || strstr($results, 'outside')){
                    echo "We have found a outdoor events match!";


                    foreach($searchOutdoor AS $searchOuts){
                        print("outside");
                        $id = $searchOuts["id"];
                        $name = $searchOuts["event_name"];
                        $price = $searchOutside["price"];
                        $img = $searchOutside["img1"];
                        $meta = $searchOutside["meta_description"];
                        $ctr = $id;

                        print($name);

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>  
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_live) || strstr($results, 'music') || strstr($results, 'club') || strstr($results, 'concert') || strstr($results, 'social')){
                    echo "We have found a live events match!";


                    foreach($searchLiveEvent AS $searchLive){
                        $id = $searchLive["id"];
                        $name = $searchLive["event_name"];
                        $price = $searchLive["price"];
                        $img = $searchLive["img1"];
                        $meta = $searchLive["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                if (in_array(metaphone($results), $search_art) || strstr($results, 'art') || strstr($results, 'museum') || strstr($results, 'culture') || strstr($results, 'show') || strstr($results, 'exhibit') || strstr($results, 'draw') || strstr($results, 'color') || strstr($results, 'sculpt') || strstr($results, 'easel') || strstr($results, 'design')){
                    echo "We have found a arts, museums, and culture match!";


                    foreach($searchArts AS $searchArt){
                        $id = $searchArt["id"];
                        $name = $searchArt["event_name"];
                        $price = $searchArt["price"];
                        $img = $searchArt["img1"];
                        $meta = $searchArt["meta_description"];
                        $ctr = $id;

                        $somePrint = 'true';

                        print(
                            "<a href='activity.php?count=$ctr&id=$id'>
                                <section class='search-card'>
                                    <h3>$name | From $price</h3>
                                    <p>$meta</p>
                                </section>
                            </a>"
                        );
                    }
                }

                // else if what the yser searches doesnt match anything
                else if ($somePrint == 'false' && $oneName == 'false'){
                    foreach($allResults AS $all){
                        
                        // print("<br>resultsss: ".metaphone($results). "  database: ".metaphone($all["event_name"]));
                        // print('&nbsp;');
                        // print('&nbsp;');
    
                        $id = $all["id"];
                        $name = $all["event_name"];
                        $price = $all["price"];
                        $img = $all["img1"];
                        $meta = $all["meta_description"];
                        $ctr = $id;

                        $tpFullName = metaphone($name);

                        
    
                        if(metaphone($results) == $tpFullName || strstr(strtolower($name), $results)){
                            $oneName = 'true';
                            
                            print(
                                "<a href='activity.php?count=$ctr&id=$id'>
                                    <section class='search-card' >
                                        <h3>$name | From $price</h3>
                                        <p>$meta</p>
                                    </section>
                                </a>"
                            );
                        }
                        
                    }

                    if ($oneName == 'false'){
                        print("<br>We couldnt find any results for the search '".$results."'");
                    }
                    
                }
            }

        ?>

        <!-- old old code
            <section class="search-card" href="activity.php">
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

    <!-- filtering -->
    <section class="filter-content">
        <form action="filter.php" class="filter-form">
            <section class="filter-segment">
                <h4>Days Open</h4>
                <hr class="tightline">
                <label for="daysOpen" class="inline">
                    Sun
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Mon
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Tue
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Wed
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Thur
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Fri
                    <input type="checkbox">
                </label>
                <label for="daysOpen" class="inline">
                    Sat
                    <input type="checkbox">
                </label>
            </section>

            <section class="filter-segment">
                <h4>Budget</h4>
                <hr class="tightline">
                <label for="budget" class="inline">Max per-person cost: </label>
                <input type="text" placeholder="$" class="filter-text inline">
            </section>

            <section class="filter-segment">
                <h4>Age Requirement</h4>
                <hr class="tightline">
                <label for="all" class="inline">All<input type="radio"></label>
                <label for="13" class="inline">13+<input type="radio"></label>
                <label for="18" class="inline">18+<input type="radio"></label>
                <label for="21" class="inline">21+<input type="radio"></label>
            </section>

            <section class="filter-segment">
                <h4>Great For...</h4>
                <hr class="tightline">
                <label for="storm" class="filter-label"><input type="checkbox" class="inline list">Stormy Weather</label>
                <label for="fam" class="filter-label"><input type="checkbox" class="inline list">Families</label>
                <label for="solo" class="filter-label"><input type="checkbox" class="inline list">Going Solo</label>
                <label for="value" class="filter-label"><input type="checkbox" class="inline list">Awesome Value</label>
                <label for="local" class="filter-label"><input type="checkbox" class="inline list">Living like a Local</label>
                <label for="transit" class="filter-label"><input type="checkbox" class="inline list">Public Transit</label>
            </section>
            <section>
                <button type="submit" name="filter-btn"> Filter Results </button>
            </section>
        </form>
    </section>
</section>