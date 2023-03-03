<?php
    require_once 'sql/database.php';

    session_start();


    $searchTP = "SELECT * FROM orlando_florida WHERE isThemePark = 'Y'";

    $searchThemePark = $db->query($searchTP);
?>