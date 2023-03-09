<?php
    require_once 'sql/database.php';

    session_start();

    // Pulls results strictly for the first 8 themeparks in the database
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";
    // $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    // Pulls results strictly for the first 8 restaurants in the database
    $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y'";
    // $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' LIMIT 8";


    $select_family = "SELECT * FROM orlando_florida WHERE isFamily = 'Y'";

    // Pulls results strictly for the first 8 local events in the database
    $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";
    // $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y' LIMIT 8";

    $select_outdoors = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";

    $select_value = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y'";

    $select_outdoor = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";


    $results_one = $db->query($select_themePark);
    $results_two = $db->query($select_restaurant);
    $results_three = $db->query($select_local);
    $results_four = $db->query($select_outdoors);
    $results_five = $db->query($select_value);
    // $results_six = $db->query($select_family);
    // $results_seven = $db->query($select_outdoor);
?>