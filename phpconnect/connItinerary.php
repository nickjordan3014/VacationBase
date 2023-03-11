<?php
    require_once 'sql/database.php';

    session_start();

    // checks if the user clicks the submit button
    if(isset($_POST['saveitin_btn'])){
        $id = $_SESSION['user']['id'];
        print($id);
        // $account_info = "SELECT saved_itin FROM accounts WHERE id = '".$id."'";
        $work = "Does this work?";

        $pdoQuery = "UPDATE accounts SET saved_itin=:work WHERE id=:id ";
        $pdoQuery_run = $db->prepare($pdoQuery);
        $pdoQuery_execute = $pdoQuery_run->execute(array("saved_itin"=>$work));

        if($pdoQuery_execute){
            echo'<script>alert("Update Complete")</script>';
        }
        else {
            echo'<script>alert("Update NOT Complete")</script>';
        }
    }
?>