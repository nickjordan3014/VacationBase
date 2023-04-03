<?php
    require_once 'sql/database.php';

    session_start();

    // grabs any searches submitted from URL
    if(isset($_GET['query'])){
        $search_query = $_GET['query']; 
    }
    else {
        $search_query = "";
    }

    
    // runs our search function if there's something to search, results get stored in $query_results
    $query_results = "";
    if ($search_query) {
        $query_results = _run_search($search_query);
    }


    // makes and performs query out of search input
    function _run_search($search_query) {
        global $db;
        // $total_results = "";

        // finds and appends total results with name matches, if search query is long enough
        if (strlen($search_query) > 2) {
            $select_name = "SELECT * FROM orlando_florida WHERE event_name LIKE '%$search_query%'";
            $name_results = $db->query($select_name);
            $total_results = $name_results;

            $total_results = array(
                array (
                    "name" => "theme parks",
                    "title" => "Orlando's Signature: Theme Parks",
                    "results" => $db->query($select_name),
                    "link" => "See All Theme Park Activities",
                    "href" => "search.php?event='themeparks'"
                )
            );

        }

        // returns any viable category that $search_query may be
        $category_query = _category_validation($search_query);

        // if $search_query was a viable category, performs a query for it and append results
        if ($category_query) {
            $select_category = "SELECT * FROM orlando_florida WHERE '$category_query' = 'Y'";
            $category_results = $db->query($select_category);

            // appends results if there are any, if not just sets results
            if ($total_results) {
                $total_results = array_merge($total_results, $name_results);
            }
            else {
                $total_results = $category_results;
            }
        }

        return $total_results;
    }


    // if the provided input is a category or close to it, it will return that category. else, it returns null
    function _category_validation($search_query) {
        $category = "";

        // code here to see if it's a category or similar to a category,
        // if it is, then $reword = whatever it should be, instead of ""

        // pleeeaaase eventually make this a pseudo-object like the $row_objects array in connIndex
        // that way we can iterate thru more efficiently than all this horseshit and return as soon as we get a result

        // houses our arrays to check, we cannot have duplicate array items as searching will just go with first match!
        $array_themepark = array(metaphone("parks"), metaphone("water parks"), metaphone("theme parks"), metaphone("roller coasters"), metaphone("amusement parks"), metaphone("carnivals"), metaphone("fairs"), metaphone("attractions"), metaphone("adventures"), metaphone("shows"),);
        $array_restaurant = array(metaphone("restaurants"), metaphone("eat"), metaphone("eating"), metaphone("eatery"), metaphone("food"), metaphone("drink"), metaphone("drinks"), metaphone("lunch"), metaphone("dinner"), metaphone("breakfast"), metaphone("cafe"), metaphone("dish"), metaphone("dishes"), metaphone("hungry"), metaphone("thirsty"), metaphone("meal"), metaphone("cook"), metaphone("snack"), metaphone("beverage"), metaphone("cater"), metaphone("munch"), metaphone("feed"));
        $array_rainy = array(metaphone("bad weather"), metaphone("weather"), metaphone("storm"), metaphone("rain"), metaphone("weather day"), metaphone("inside"), metaphone("jacket"), metaphone("thunder"), metaphone("wind"));
        $array_family = array(metaphone("child"), metaphone("children"), metaphone("kids"), metaphone("teens"), metaphone("teenagers"), metaphone("teenager"), metaphone("family"), metaphone("friend"), metaphone("families"), metaphone("friends"));
        $array_local = array(metaphone("around"), metaphone("area"), metaphone("community"), metaphone("local"), metaphone("normal"), metaphone("nearby"), metaphone("corner"), metaphone("familiar"), metaphone("familiarity"), metaphone("UCF"), metaphone("university of central florida"), metaphone("college"), metaphone("football"), metaphone("native"));
        $array_value = array(metaphone("cheap"), metaphone("poor"), metaphone("dollar"), metaphone("coin"), metaphone("price"), metaphone("cost"), metaphone("afford"), metaphone("affordable"), metaphone("bargain"), metaphone("special"), metaphone("reasonable"), metaphone("budget"), metaphone("reduce"), metaphone("money"), metaphone("broke"), metaphone("finance"));
        $array_outdoors = array(metaphone("outdoor"), metaphone("outside"), metaphone("animal"), metaphone("animals"), metaphone("zoo"), metaphone("explore"), metaphone("exploring"), metaphone("land"), metaphone("sky"), metaphone("wind"), metaphone("exercise"), metaphone("garden"), metaphone("air"), metaphone("green"), metaphone("recreation"), metaphone("fresh"));
        $array_live = array(metaphone("music"), metaphone("shows"), metaphone("concert"), metaphone("festival"), metaphone("show"), metaphone("social"), metaphone("musical"), metaphone("play"), metaphone("opera"), metaphone("comedy"), metaphone("standup"), metaphone("band"), metaphone("venue"), metaphone("film"), metaphone("live"),metaphone("screen"));
        $array_arts = array(metaphone("museum"), metaphone("shows"), metaphone("culture"), metaphone("show"), metaphone("paint"), metaphone("mural"), metaphone("artist"), metaphone("create"), metaphone("craft"), metaphone("brush"), metaphone("design"), metaphone("history"), metaphone("draw"), metaphone("photo"), metaphone("color"), metaphone("sketch"), metaphone("exhibit"), metaphone("easel"), metaphone("sculpt"), metaphone("media"), metaphone("animation"), metaphone("studio"), metaphone("display"), metaphone("heritage"), metaphone("renaissance"), metaphone("statue"), metaphone("mythology"));

        // checks to see then return if our search_query 
        if (in_array($search_query, $array_themepark)) {
            $category = "isThemePark";
            return $category;
        }
        else if (in_array($search_query, $array_restaurant)){
            $category = "isFoodDrink";
            return $category;
        }
        else if (in_array($search_query, $array_rainy)){
            $category = "isRainy";
            return $category;
        }
        else if (in_array($search_query, $array_family)){
            $category = "isFamily";
            return $category;
        }
        else if (in_array($search_query, $array_local)){
            $category = "isLocal";
            return $category;
        }
        else if (in_array($search_query, $array_value)){
            $category = "isGoodValue";
            return $category;
        }
        else if (in_array($search_query, $array_outdoors)){
            $category = "isOutdoorActive";
            return $category;
        }
        else if (in_array($search_query, $array_live)){
            $category = "isLiveEvent";
            return $category;
        }
        else if (in_array($search_query, $array_arts)){
            $category = "isLiveEvent";
            return $category;
        }

        // if not returned by now a category wasn't found!
        return $category;
    }


    function _build_search_card($result) {

        // getting basic info for the card
        $card_id = $result["id"];
        $card_name = $result["event_name"];
        $card_image = $result["img1"];
        $card_alt = $result["alt_text_img1"];
        $card_price = $result["price"];

        // removing empty decimals from numerical prices to free up space, or one $ from dollar sign prices since we add one below
        $priceCheck = $card_price[0];
        if ($priceCheck == "$") {
            $card_price = substr($card_price, 1);
        }
        else {
            $card_price = rtrim($card_price, ".00");
        }

        // build card caption here, put more rare & interesting captions higher up so its not every activity saying "family-friendly"
        // captions are to grab interest! so categorical tags like food & drink or arts belong in rows and searches rather than here
        $card_caption = ("$" . $card_price . 
            (($result["isLiveEvent"] == 'Y') ? " | Live Events" : "") .
            (($result["isLocal"] == 'Y') ? " | Local Hangout" : "") .
            (($result["isGoodValue"] == 'Y') ? " | Great Value" : "") .
            (($result["isOutdoorActive"] == 'Y') ? " | Outdoors" : "") .
            (($result["isRainy"] == 'Y') ? " | Any Weather" : "") .
            (($result["isFamily"] == 'Y') ? " | Family-Friendly" : "")
        );

        $card_html = "<a class='card' id='cardA1' title='$card_name' href='activity.php?id=$card_id'>
            <img class='card-image' src='img/images/$card_image' alt='$card_alt'>
            <h4>$card_name</h4>
            <p class='captions'>$card_caption</p>
            </a>";

        return $card_html;
    }





    // if we have results, we populate them here!
    if ($query_results) {
        // build the result cards here
    }

    // if not, we display a message depending on if a search was attempted or it's a fresh visit
    else {
        if ($search_query) {
            // something was searched but had no results
        }
        else {
            // nothing was searched, they prolly clicked on the search nav icon
        }
    }





        // old code below:

    // $searchTP = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";
    // $searchThemePark = $db->query($searchTP);

    // $searchRes = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y'";
    // $searchRestaurant = $db->query($searchRes);

    // $searchRain = "SELECT * FROM orlando_florida WHERE isRainy = 'Y'";
    // $searchRainy = $db->query($searchRain);

    // $searchFF = "SELECT * FROM orlando_florida WHERE isFamily = 'Y'";
    // $searchFamily = $db->query($searchFF);

    // $searchLoc = "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";
    // $searchLocal = $db->query($searchLoc);

    // $searchGood = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y'";
    // $searchGoodVal = $db->query($searchGood);

    // $searchOut = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";
    // $searchOudoor = $db->query($searchOut);

    // $searchLive = "SELECT * FROM orlando_florida WHERE isLiveEvent = 'Y'";
    // $searchLiveEvent = $db->query($searchLive);

    // $searchArt = "SELECT * FROM orlando_florida WHERE isArts = 'Y'";
    // $searchArts = $db->query($searchArt);

    // $searchAll = "SELECT * FROM orlando_florida";
    // $allResults = $db->query($searchAll);
?>