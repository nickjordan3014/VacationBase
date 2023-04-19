<?php
    require_once 'sql/database.php';

    session_start();

    // SQL referenced to build our rows, selecting categorical activities from our database
    // THESE SQL QUERIES ARE SPECIFICALLY FOR THE HOME PAGE BECAUSE THEY RETURN EVENTS SO THAT THERE ARE NO REPEATS AND SO ITS RANDOMIZED
    // THESE QUERIES ARE NOT REGULAR; THEY ARE CONFIGURED TO REDUCE REPETITIVE EVENTS
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' ORDER BY RAND () LIMIT 8";
    $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' AND isThemePark = 'N' ORDER BY RAND () LIMIT 8";
    $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y' AND isFoodDrink = 'N' ORDER BY RAND () LIMIT 8";
    $select_outdoors = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y' AND id > 32 ORDER BY RAND () LIMIT 8";
    $select_value = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y' AND isOutdoorActive = 'N' AND id > 16 ORDER BY RAND () LIMIT 8";

    // THESE WILL BE THE REGULAR QUERIES THAT CAN BE PASSED TO SEARCH PAGE
    // $select_themePark_reg = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' ORDER BY RAND () LIMIT 8";
    // $select_restaurant_reg = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' ORDER BY RAND () LIMIT 8";
    // $select_local_reg = "SELECT * FROM orlando_florida WHERE isLocal = 'Y' ORDER BY RAND () LIMIT 8";
    // $select_outdoors_reg = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y' ORDER BY RAND () LIMIT 8";
    // $select_value_reg = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y' ORDER BY RAND () LIMIT 8";
    
    // houses all of the content we put on our index page! build/customize rows here:
    $row_objects = array(
        // "theme parks" row data
        array (
            "name" => "Theme Parks",
            "title" => "Orlando's Signature: Theme Parks",
            "results" => $db->query($select_themePark),
            "link" => "See All Theme Park Activities",
            "href" => "search.php?query=Theme Parks"
        ),
        // "restaurants" row data
        array (
            "name" => "Restaurants",
            "title" => "Hot Orlando Restaurants",
            "results" => $db->query($select_restaurant),
            "link" => "See All Food & Drink Activities",
            "href" => "search.php?query=Restaurants"
        ),
        // "local" row data
        array (
            "name" => "Local",
            "title" => "Go Where The Locals Go",
            "results" => $db->query($select_local),
            "link" => "See All Local Hangout Activities",
            "href" => "search.php?query=Local Events"
        ),
        // "outdoors" row data
        array (
            "name" => "Outdoors",
            "title" => "Get Outside In The Sunshine State!",
            "results" => $db->query($select_outdoors),
            "link" => "See All Outdoor Activities",
            "href" => "search.php?query=Outdoor Events"
        ),
        // "value" row data
        array (
            "name" => "Good Value",
            "title" => "Orlando's Cheap Thrills",
            "results" => $db->query($select_value),
            "link" => "See All High-Value Activities",
            "href" => "search.php?query=Good"
        )
    );

    // when called dynamically builds the top half of each row's html
    function _build_row_start($name, $title, $link, $href, $row_count) {
        $row_start_html = "<section class='card-row'>

            <h2 class='row-title'>$title</h2>
            <a class='row-link' href='$href'><p class='inline rightalign row-link-item'>$link</p></a>
            
            <button class='caro-btn-left invis' id='autoLeft$row_count'>
                <img src='img/icons-VB/left_arrow.png' alt='Arrow' class='caro-arrow'>
            </button>
            
            <section class='carousel' id='scroll$row_count'>";
        
        return $row_start_html;
    }

    // when called dynamically builds the bottom half of each row's html
    function _build_row_end($name, $row_count) {
        $row_end_html = "</section>

            <button class='caro-btn-right' id='autoRight$row_count'>
                <img src='img/icons-VB/right_arrow.png' alt='Arrow' class='caro-arrow'>
            </button>

            </section>";

        return $row_end_html;
    }
    
    // when called fills and returns the html of a card with provided content
    function _build_card($result, $card_count) {

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

?>