<!-- This file will connect to the database server 'events' -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "events";

    // Global connection
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        // Is $connection null?
        // If so, connect to the database server.
        // If not, do nothing (because the connection already exists).
        if($connection == null) {
            // Connect to server
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    // building a function that is supposed to collect all the event names from the database that are listed themePark = Y and return those
    function theme_parks(){
        // Use global $connection locally.
        global $connection;
        
         // Is $connection null?
         // If so, do nothing (because a connection has not been made yet).
        if($connection != null) {

            $query = "SELECT `event_name` FROM `orlando_florida` WHERE `isThemePark`= "Y"; ";
            $results = mysqli_query($connection, $query);

            // For every row, generate a new HTML row.
            while($row = mysqli_fetch_assoc($results)) {
                echo(<>"<p>" . $row["event_name"] . "</p>");
            }
        }
    }

    function close() {
        // Use the global $connection
        global $connection;

        // Unlike connect(), we test for a value *not* equal to null.
        if($connection != null) {
            // Close the connection
            mysqli_close($connection);
        }
    }
?>