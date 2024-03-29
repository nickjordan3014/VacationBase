<?php
    require_once 'sql/database.php';

    session_start();
    
    // grabs the proper row from the database where the id matches the url's id
    $activity_id = $_GET['id'];
    $select_activity = "SELECT * FROM orlando_florida WHERE id = '$activity_id' LIMIT 1";
    $this_activity = $db->query($select_activity);
    $this_activity = $this_activity->fetch();

    // populates variables with data pulled from query
    $id = $this_activity['id'];
    $name = $this_activity['event_name'];
    $blurb = $this_activity['activity_blurb'];
    $price = $this_activity['price'];
    $img1= $this_activity['img1'];
    $altText1 = $this_activity['alt_text_img1'];
    $address = $this_activity['address'];
    $url = $this_activity['url'];
    $meta = $this_activity['meta_description'];
    $map = $this_activity['map_img'];
    $map_link = $this_activity['map_link'];
    $themePark = $this_activity['isThemePark'];
    $foodDrink = $this_activity['isFoodDrink'];
    $arts = $this_activity['isArts'];
    $local = $this_activity['isLocal'];
    $live = $this_activity['isLiveEvent'];
    $value = $this_activity['isGoodValue'];
    $outdoor = $this_activity['isOutdoorActive'];
    $rainy = $this_activity['isRainy'];

    // finds a major query category that $this_activity is to suggest more of them 
    // failsafe
    if ($themePark == "Y"){
        $first_suggestion = "isThemePark";
        $search_word = "Theme Parks";
    }
    else if ($foodDrink == "Y"){
        $first_suggestion = "isFoodDrink";
        $search_word = "Restaurants";
    }
    else if ($arts == "Y"){
        $first_suggestion = "isArts";
        $search_word = "Arts Culture and Museums";
    }
    else if ($outdoor == "Y"){
        $first_suggestion = "isOutdoorActive";
        $search_word = "Outdoor Events";
    }
    else if ($local == "Y"){
        $first_suggestion = "isLocal";
        $search_word = "Local Events";
    }
    else if ($live == "Y"){
        $first_suggestion = "isLiveEvent";
        $search_word = "Live Events";
    }
    else if ($rainy == "Y"){
        $first_suggestion = "isRainy";
        $search_word = "Rainy Day Events";
    }
    else if ($value == "Y"){
        print("cheap");
        $first_suggestion = "isGoodValue";
        $search_word = "Good Value";
    }

    // SQL customized to select things that $this_activity also is
    $select_a = "SELECT * FROM orlando_florida WHERE $first_suggestion = 'Y' AND id <> $activity_id LIMIT 8";

    // houses all of the dynamic content we put in our activity page rows:
    $row_objects = array(
        // "$first_suggestion"'s row data
        array (
            "name" => $first_suggestion,
            "title" => "Just Like $name",
            "results" => $db->query($select_a),
            "link" => "See More Activities Like These",
            "href" => "search.php?query=$search_word"
        )
    );

    // carousel html builder functions stolen from connindex.php
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
        $the_id = $_GET['id'];

        // getting basic info for the card
        $card_id = $result["id"];
        $card_name = $result["event_name"];
        $card_image = $result["img1"];
        $card_alt = $result["alt_text_img1"];
        $card_price = $result["price"];

        // if($the_id == $card_id){
        //     $card_id = $card_id + 1;
        // }

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
        // print("id: " + $card_id);

        $card_html = "<a class='card' id='cardA1' title='$card_name' href='activity.php?id=$card_id'>
            <img class='card-image' src='img/images/$card_image' alt='$card_alt'>
            <h4>$card_name</h4>
            <p class='captions'>$card_caption</p>
            </a>";

        return $card_html;
    }

?>