<?php
    require_once 'sql/database.php';

    session_start();

    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    $results = $db->query($select_themePark);
    
    // echo($select_events);
    // print_r($select_events);
?>