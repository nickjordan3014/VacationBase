<?php
    require_once 'sql/database.php';

    session_start();

    // Pulls results strictly for the first 8 themeparks in the database
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";
    // $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    // Pulls results strictly for the first 8 restaurants in the database
    $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' LIMIT 8";
    // $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' LIMIT 8";

    // Pulls results strictly for the first 8 local events in the database
    $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";
    // $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y' LIMIT 8";

    $select_outdoors = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";

    $select_value = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y'";

    // $select_family = "SELECT * FROM orlando_florida WHERE isFamily = 'Y'";


    $results_one = $db->query($select_themePark);
    $results_two = $db->query($select_restaurant);
    $results_three = $db->query($select_local);
    $results_four = $db->query($select_outdoors);
    $results_five = $db->query($select_value);
    // $results_six = $db->query($select_family);
    // $results_seven = $db->query($select_outdoor);


    // houses all of the content we put on our index page! add/edit individual arrays here for each row
    $row_objects = array(
        // theme park row data
        array (
            "name" => "theme parks",
            "title" => "Orlando's Signature: Theme Parks",
            "results" => $db->query($select_themePark),
            "link" => "See All Theme Park Activities",
            "href" => "search.php?event='Theme Parks'"
        ),
        // restaurant row data
        array (
            "name" => "restaurants",
            "title" => "Hot Orlando Restaurants",
            "results" => $db->query($select_restaurant),
            "link" => "See All Food & Drink Activities",
            "href" => "search.php?event='restaurant"
        )
    );

    // when called dynamically builds the top half of each row's html
    function _build_row_start($name, $title, $link, $href) {
        $row_start_html = "<section class='card-row'>

        <h2 class='row-title'>$title</h2>
        <a class='row-link' href='$href'><p class='inline rightalign'>$link</p></a>
        
        <button class='caro-btn-left' id='autoLeft0'>
            <img src='img/icons-VB/left_arrow.png' alt='Arrow' class='caro-arrow'>
        </button>
        
        <section class='carousel' id='scroll0'>";
        
        return $row_start_html;
    }

    // when called dynamically builds the bottom half of each row's html
    function _build_row_end($name) {
        $row_end_html = "</section>

        <button class='caro-btn-right' id='autoRight0'>
            <img src='img/icons-VB/right_arrow.png' alt='Arrow' class='caro-arrow'>
        </button>

        </section>";

        return $row_end_html;
    }
    
    // when called fills and returns the html of a card with provided content
    function _build_card($result) {

        // getting basic info for the card
        $card_id = $result["id"];
        $card_name = $result["event_name"];
        $card_image = $result["img1"];
        $card_alt = $result["alt_text_img1"];
        $card_price = $result["price"];

        // removing decimals from price to free up space, or one $ from "$$$"s since we add one below
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
            (($result["isFamily"] == 'Y') ? " | Family-Friendly" : "")
        );

        $card_html = "<a class='card' id='cardA1' title='$card_name' href='activity.php?id=$card_id'>
        <img class='card-image' src='img/images/$card_image' alt='$card_alt'>
        <h4>$card_name</h4>
        <p class='captions'>$card_caption</p>
        </a>";

        return $card_html;
    }

?>