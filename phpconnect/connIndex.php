<?php
    require_once 'sql/database.php';

    session_start();

    // Pulls results strictly for the first 8 themeparks in the database
    $select_themePark = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y' LIMIT 8";

    $results = $db->query($select_themePark);
    
?>