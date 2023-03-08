<?php
    require_once 'sql/database.php';

    session_start();


    $searchTP = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";

    $searchThemePark = $db->query($searchTP);


    $searchRes = "SELECT * FROM orlando_florida WHERE isFoodDrink = 'Y'";

    $searchRestaurant = $db->query($searchRes);


    $searchRain = "SELECT * FROM orlando_florida WHERE isRainy = 'Y'";

    $searchRainy = $db->query($searchRain);


    $searchFF = "SELECT * FROM orlando_florida WHERE isFamily = 'Y'";

    $searchFamily = $db->query($searchFF);


    $searchLoc = "SELECT * FROM orlando_florida WHERE isLocal = 'Y'";

    $searchLocal = $db->query($searchLoc);


    $searchGood = "SELECT * FROM orlando_florida WHERE isGoodValue = 'Y'";

    $searchGoodVal = $db->query($searchGood);


    $searchOut = "SELECT * FROM orlando_florida WHERE isOutdoorActive = 'Y'";

    $searchOudoor = $db->query($searchOut);


    $searchLive = "SELECT * FROM orlando_florida WHERE isLiveEvent = 'Y'";

    $searchLiveEvent = $db->query($searchLive);



    $searchArt = "SELECT * FROM orlando_florida WHERE isArts = 'Y'";

    $searchArts = $db->query($searchArt);

    $searchAll = "SELECT * FROM orlando_florida";

    $allResults = $db->query($searchAll);
?>