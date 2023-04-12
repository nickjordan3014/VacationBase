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

        // removes spaces, any "s" characters at the end, and makes it lower case
        $search_query = str_replace(' ', '', $search_query);
        $search_query = rtrim($search_query, 's');
        $search_query = strtolower($search_query);
        // now, a user can search "theme park", "Themepark", "THEme Parks", or "themeparks" and they will all work!

        // pleeeaaase eventually make this a pseudo-object like the $row_objects array in connIndex
        // that way we can iterate thru more efficiently and return as soon as we get a result

        // houses our arrays to check, we cannot have duplicate array items as searching will just go with first match!
        $array_themepark = array("park", "waterpark", "themepark", "rollercoaster", "amusementpark", "carnival", "fair", "attraction", "adventure", "show");
        $array_restaurant = array("restaurant", "eat", "eating", "eatery", "food", "drink", "lunch", "dinner", "breakfast", "cafe", "dish", "dishes", "hungry", "thirsty", "meal", "cook", "snack", "beverage", "cater", "munch", "feed");
        $array_rainy = array("badweather", "weather", "storm", "rain", "weatherday", "inside", "jacket", "thunder", "wind");
        $array_family = array("child", "children", "kid", "teen", "teenager", "family", "friend", "familie", "friend");
        $array_local = array("around", "area", "community", "local", "normal", "nearby", "corner", "familiar", "familiarity", "UCF", "universityofcentralflorida", "college", "football", "native");
        $array_value = array("cheap", "poor", "dollar", "coin", "price", "cost", "afford", "affordable", "bargain", "special", "reasonable", "budget", "reduce", "money", "broke", "finance");
        $array_outdoors = array("outdoor", "outside", "animal", "zoo", "explore", "exploring", "land", "sky", "wind", "exercise", "garden", "air", "green", "recreation", "fresh");
        $array_live = array("music", "show", "concert", "festival", "social", "musical", "play", "opera", "comedy", "standup", "band", "venue", "film", "live", "screen");
        $array_arts = array("museum", "culture", "show", "paint", "mural", "artist", "create", "craft", "brush", "design", "history", "draw", "photo", "color", "sketch", "exhibit", "easel", "sculpt", "media", "animation", "studio", "display", "heritage", "renaissance", "statue", "mythology");

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
        $priceCheck = $card_price[0];
        if ($priceCheck == "$") {}
        else {
            $card_price = ("From $" . rtrim($card_price, ".00"));
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