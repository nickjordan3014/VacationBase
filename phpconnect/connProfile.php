<?php
    require_once 'sql/database.php';
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['save_changes'])){

            $user_id = $_SESSION['user']['id'];

            $first_name = $_SESSION['user']['firstName'];
            $last_name = $_SESSION['user']['lastName'];

            // if a user tries to submit empty inputs
            if (empty($first_name) || empty($last_name)){
                echo("This cannot be saved because you left some inputs blank");
            }
            else {

                $query = "UPDATE accounts SET first_name = :first_name, last_name = :last_name WHERE id = :user_id";
                $query_run = $db->prepare($query);

                $query_run->bindParam(':first_name', $first_name, PDO::PARAM_STR);
                $query_run->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            }
        }
    }
?>