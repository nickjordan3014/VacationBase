<!-- This file will connect to the database server 'events' -->
<?php
    // print_r($_SERVER);

    if ($_SERVER['SERVER_NAME'] == 'students.gaim.ucf.edu'){
        $servername = "localhost";
        $username = "my958474";
        $password = "Myakkco1$@";
        $database = "my958474";
    }
    else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "events";
    }

    try{
        // this library makes security issues go away so that people cannot hijack, code attack or delete our DB
        // this manages our connection
        $db = new PDO("mysql:host={$servername};dbname={$database}",$username, $password);
        // writing sql statements to pull, fetch, and insert data
        // setting up attributes to help us troubleshoot exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOEXCEPTION $e){
        echo $e->getMessage();
    }

    // if a user is already logged in, instead of taking the user to the log in/sign up forms, it will redirect them home
    function authRedirect(){
         // if the session variable is set and we have a user parameter
        if(isset($_SESSION['user'])){
            // redirect to this location
            header("location: index.php");
        }
    }
    