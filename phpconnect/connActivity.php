<?php
    require_once 'sql/database.php';

    session_start();

    // pulls the first 8 theme parks from the database
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    // pulls the first 7 theme parks from the databse (we want to reccommend activities opposite of the activity page we are currently on)
    $select_otherTP= "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 7";

    $results = $db->query($select_themePark);

    $other_results = $db->query($select_otherTP);
?>