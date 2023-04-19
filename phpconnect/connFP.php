<?php
    require 'sql/database.php';

    // initiates a session for the current user on their page (remains valid while the browser window is open)
    // populates session if user information is correct
    session_start();

    // if we already have a session with an active user, we want to redirect to the home page
    // doesnt display the sign up sheet if user is logged in
    authRedirect();

    // checking if the submit button has been pushed/they have submitted a form
    // if(isset($_POST['fp_btn'])){
    //     $emailAddress = filter_var(strtolower($_REQUEST['emailAddress']), FILTER_SANITIZE_EMAIL);
        
    //     // if the email is empty
    //     if(empty($emailAddress)){
    //         $errorMsg[0][] = "Enter an email address";
    //     }
    //     else {
    //         $selector = bin2hex(random_bytes(8));
    //         $token = random_bytes(32);

    //         $url = "http://localhost/VacationBase/forgotpw/create-new-password.php?selector=" . $selector > "&validator=" . bin2hex($token);

    //         // expiry date for token (1 hour ahead from now)
    //         $expires = date("U") + 1800;


    //         require 'sql/database.php';

    //         // initiates a session for the current user on their page (remains valid while the browser window is open)
    //         // populates session if user information is correct
    //         session_start();

    //         $userEmail = $_POST["email"];

    //         // preventing multiple tokens where users try to click reset password more than once
    //         $sql = "DELETE FROM password_reset WHERE pw_reset_email=?";
            
    //         // idk how to do this part with pdo
    //         // $statement = 


    //         $sql = "INSERT INTO password_reset (pw_reset_email, pw_reset_selector, pw_reset_token, pw_reset_expires) VALUES (?, ?, ?, ?);";
            
    //         // hash the token 
    //         $hashed_token = password_hash($token, PASSWORD_DEFAULT);
        
    //     }

    // }
    // else {
    //     header("Location: index.php");
    // }
?>