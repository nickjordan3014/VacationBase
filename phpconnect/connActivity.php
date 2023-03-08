<?php
    require_once 'sql/database.php';

    session_start();
    

    // pulls the first 7 theme parks from the databse (we want to reccommend activities opposite of the activity page we are currently on)
    // $select_otherTP= "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";
    $select_otherTP= "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";

    $oth_resultsTP = $db->query($select_otherTP);


    // pulls the first 7 restaurants from the databse (we want to reccommend activities opposite of the activity page we are currently on)
    // $select_otherRes= "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y'";
    $select_otherRes= "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y'";

    $oth_resultsRes = $db->query($select_otherRes);


    // pulls the first 7 local events from the databse (we want to reccommend activities opposite of the activity page we are currently on)
    // $select_otherLoc= "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";
    $select_otherLoc= "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";

    $oth_resultsLoc = $db->query($select_otherLoc);


    $select_otherOut= "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";

    $oth_resultsOut = $db->query($select_otherOut);

?>