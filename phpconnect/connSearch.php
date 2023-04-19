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
        if (strlen($search_query) > 2) {
            $query_results = _run_search($search_query);
        }
    }


    // makes and performs query out of search input
    function _run_search($search_query) {
        global $db;
        $full_query = "";

        // sets up our query and searches for results where a part of the activity title matches the query
        $title_query = "(SELECT * FROM orlando_florida WHERE event_name LIKE '%$search_query%')";
        $full_query = ($full_query . $title_query);

        // checks if the query is a category we account for, and if so converts query text into our proper category name
        $category_search = _category_validation($search_query);

        // if $search_query was a viable category, appends a categorical search to our query
        if ($category_search) {
            $category_query = " UNION (SELECT * FROM orlando_florida WHERE $category_search = 'Y')";
            $full_query = ($full_query . $category_query);
        }

        // takes our completed query string, runs it, and returns the PDO results object
        $full_results = $db->query($full_query);
        return $full_results;
    }


    // if the provided input is a category or close to it, it will return that category. else, it returns null
    function _category_validation($search_query) {
        $category = "";
        // We were not able to find a search result for...

        $search_query = metaphone($search_query);

        // pleeeaaase eventually make this a pseudo-object like the $row_objects array in connIndex
        // that way we can iterate thru more efficiently and return as soon as we get a result

        // houses our arrays to check, we cannot have duplicate array items as searching will just go with first match!
        $array_themepark = array(metaphone("park"), metaphone("water park"), metaphone("theme park"), metaphone("roller coaster"), metaphone("amusement park"), metaphone("carnival"), metaphone("fair"), metaphone("attraction"), metaphone("adventure"), metaphone("show"));
        $array_restaurant = array(metaphone("restaurant"), metaphone("eat"), metaphone("eating"), metaphone("eatery"), metaphone("food"), metaphone("drink"), metaphone("lunch"), metaphone("dinner"), metaphone("breakfast"), metaphone("cafe"), metaphone("dish"), metaphone("dishes"), metaphone("hungry"), metaphone("thirsty"), metaphone("meal"), metaphone("cook"), metaphone("snack"), metaphone("beverage"), metaphone("cater"), metaphone("munch"), metaphone("feed"));
        $array_rainy = array(metaphone("bad weather"), metaphone("weather"), metaphone("storm"), metaphone("rain"), metaphone("rainy"), metaphone("weather day"), metaphone("inside"), metaphone("jacket"), metaphone("thunder"), metaphone("wind"));
        $array_family = array(metaphone("family"), metaphone("child"), metaphone("children"), metaphone("kid"), metaphone("teen"), metaphone("teenager"), metaphone("friend"), metaphone("familie"), metaphone("friend"), metaphone("good"), metaphone("good value"));
        $array_local = array(metaphone("around"), metaphone("area"), metaphone("community"), metaphone("local"), metaphone("normal"),metaphone("nearby"), metaphone("corner"), metaphone("familiar"),metaphone("familiarity"), metaphone("UCF"), metaphone("university of central florida"), metaphone("college"), metaphone("football"), metaphone("native"));
        $array_value = array(metaphone("cheap"), metaphone("value"), metaphone("poor"), metaphone("dollar"), metaphone("coin"), metaphone("price"), metaphone("cost"), metaphone("afford"), metaphone("affordable"), metaphone("bargain"), metaphone("special"), metaphone("reasonable"), metaphone( "budget"), metaphone("reduce"), metaphone("money"), metaphone("broke"), metaphone("finance"));
        $array_outdoors = array(metaphone("outdoor"), metaphone("outside"), metaphone("animal"), metaphone("zoo"), metaphone("explore"), metaphone("exploring"), metaphone("land"), metaphone("sky"), metaphone("wind"),metaphone("exercise"), metaphone("garden"), metaphone("air"), metaphone("green"), metaphone("recreation"), metaphone("fresh"));
        $array_live = array(metaphone("music"), metaphone("show"), metaphone("concert"), metaphone("festival"), metaphone("social"), metaphone("musical"), metaphone("play"), metaphone("opera"), metaphone("comedy"), metaphone("standup"), metaphone("band"), metaphone("venue"), metaphone("film"), metaphone("live"), metaphone("screen"));
        $array_arts = array(metaphone("art"), metaphone("museum"), metaphone("culture"), metaphone("show"), metaphone("paint"), metaphone("mural"), metaphone("artist"), metaphone("create"), metaphone("craft"), metaphone("brush"), metaphone("design"), metaphone("history"), metaphone("draw"), metaphone("photo"), metaphone("color"), metaphone("sketch"), metaphone("exhibit"), metaphone("easel"), metaphone("sculpt"), metaphone("media"), metaphone("animation"), metaphone("studio"), metaphone("display"), metaphone("heritage"), metaphone("renaissance"), metaphone("statue"), metaphone("mythology"));
        
        // checks to see then return if our search_query
        for ($i = 0; $i < count($array_themepark); $i++){ 
            if (str_contains($search_query, $array_themepark[$i])) {
                $category = "isThemePark";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_restaurant); $i++){     
            if (str_contains($search_query, $array_restaurant[$i])){
                $category = "isFoodDrink";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_rainy); $i++){ 
            if (str_contains($search_query, $array_rainy[$i])){
                $category = "isRainy";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_family); $i++){ 
            if (str_contains($search_query, $array_family[$i])){
                $category = "isFamily";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_local); $i++){ 
            if (str_contains($search_query, $array_local[$i])){
                $category = "isLocal";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_value); $i++){ 
            if (str_contains($search_query, $array_value[$i])){
                $category = "isGoodValue";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_outdoors); $i++){ 
            if (str_contains($search_query, $array_outdoors[$i])){
                $category = "isOutdoorActive";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_live); $i++){ 
            if (str_contains($search_query, $array_live[$i])){
                $category = "isLiveEvent";
                return $category;
            }
        }
        for ($i = 0; $i < count($array_arts); $i++){ 
            if (str_contains($search_query, $array_arts[$i])){
                $category = "isArts";
                return $category;
            }
        }

        // if ($category == ""){
        //     $category = "We were not able to find a search result for...");
        //     return $category;
        // }

            // if not returned by now a category wasn't found!
            return $category;
        // }
    }

    // does our filtering on each result we've already pulled via additional url params
    function _run_filter_validation($result) {

        $is_valid = true;

        if(isset($_GET['budget'])){
            $budget_filter = $_GET['budget'];
            // removes any leading $s from budget input that would cause trouble!
            $budget_filter = ltrim($budget_filter, '$');
            $result_price = $result["price"];

            // converting dollar sign prices to numerical values, this is subjective and can be adjusted anytime  -sean
            if ($result_price == "$") {$result_price = 8;}
            if ($result_price == "$$") {$result_price = 16;}
            if ($result_price == "$$$") {$result_price = 32;}
            if ($result_price == "$$$$") {$result_price = 64;}

            if (is_numeric($budget_filter)) {
                // we have a valid budget filter to test against
                if ($result_price > $budget_filter) {
                    $is_valid = false;
                }
            }
        }

        // goes through checking for categorical filters existing and if so runs a simple check
        if(isset($_GET['weather'])){
            $weather_category = $result["isRainy"];
            if ($weather_category == "N") {
                $is_valid = false;
            }
        }

        if(isset($_GET['family'])){
            $family_category = $result["isFamily"];
            if ($family_category == "N") {
                $is_valid = false;
            }
        }
        
        if(isset($_GET['value'])){
            $value_category = $result["isGoodValue"];
            if ($value_category == "N") {
                $is_valid = false;
            }
        }

        if(isset($_GET['local'])){
            $local_category = $result["isLocal"];
            if ($local_category == "N") {
                $is_valid = false;
            }
        }

        // if $is_valid was ever marked false, then that $result failed filtering and is excluded
        return $is_valid;
    }

    // when called fills and returns the html of a search card with provided content
    function _build_search_card($result, $card_count) {

        // getting info for the search card
        $card_id = $result["id"];
        $card_name = $result["event_name"];
        $card_image = $result["img1"];
        $card_alt = $result["alt_text_img1"];
        $card_price = $result["price"];
        $description = $result["meta_description"];

        // corrects how we display numerical prices for cards

        // this specific part doesnt work for everything because it only stores the first indexed integer of the price (aka 60.00 translates to $6 on the cards for top golf)
        // changed it from $card_price = ("From $" . rtrim($card_price, ".00")); to this in order to display it correctly
        $priceCheck = $card_price[0];

        if ($priceCheck == "$") {}
        else {
            $card_price = ("From $".$card_price);
        }

        // temp patch to allow us to access images until we rework how we identify and call them
        // $temp_image = explode('/', $card_image);
        // $card_image = ($temp_image[0] . "/image1.jpeg");

        // we match the caption from homepage here, but without price since it's a higher priority now that we have more space!
        $card_caption = ( 
            (($result["isLiveEvent"] == 'Y') ? "| Live Events " : "") .
            (($result["isLocal"] == 'Y') ? "| Local Hangout " : "") .
            (($result["isGoodValue"] == 'Y') ? "| Great Value " : "") .
            (($result["isOutdoorActive"] == 'Y') ? "| Outdoors " : "") .
            (($result["isRainy"] == 'Y') ? "| Any Weather " : "") .
            (($result["isFamily"] == 'Y') ? "| Family-Friendly " : "")
        );
        // ensures the caption doesn't start with a "|" character
        $card_caption = trim($card_caption, '|');

        $card_html = "<a class='search-card' id='cardA1' title='$card_name' href='activity.php?id=$card_id'>
                        <img class='search-image' src='img/images/$card_image' alt='$card_alt'>
                        <article class='search-card-content'>
                            <h4 style='font-size: 16px;'>$card_name | <i>$card_price</i></h4>
                            <p class='captions'>$card_caption</p>
                            <br>
                            <p>$description</p>
                        </article>
                    </a>";

        return $card_html;
    }

?>