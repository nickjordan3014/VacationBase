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