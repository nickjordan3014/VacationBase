<?php
    require_once 'sql/database.php';

    session_start();

    // Pulls results strictly for the first 8 themeparks in the database
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    // Pulls results strictly for the first 8 restaurants in the database
    $select_restaurant = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y' LIMIT 8";

    // Pulls results strictly for the first 8 local events in the database
    $select_local = "SELECT * FROM orlando_florida WHERE isLocal = 'Y' LIMIT 8";

    $results_one = $db->query($select_themePark);
    $results_two = $db->query($select_restaurant);
    $results_three = $db->query($select_local);
    
?>