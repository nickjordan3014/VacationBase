<?php
    require_once 'sql/database.php';

    // initiates a session for the current user on their page (remains valid while the browser window is open)
    // populates session if user information is correct
    session_start();

    // if we already have a session with an active user, we want to redirect to the home page
    // doesnt display the sign up sheet if user is logged in
    authRedirect();

    // checking if the submit button has been pushed/they have submitted a form
    if(isset($_REQUEST['fp_btn'])){
        $emailAddress = filter_var(strtolower($_REQUEST['emailAddress']), FILTER_SANITIZE_EMAIL);
        
        // if the email is empty
        if(empty($emailAddress)){
            $errorMsg[0][] = "Enter an email address";
        }
    }
?>