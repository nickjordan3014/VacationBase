<?php
    require_once 'sql/database.php';

    // initiates a session for the current user on their page (remains valid while the browser window is open)
    // populates session if user information is correct
    session_start();

    // if we already have a session with an active user, we want to redirect to the home page
    // doesnt display the sign up sheet if user is logged in
    authRedirect();

    // checking if the submit button has been pushed/they have submitted a form
    if(isset($_REQUEST['login_btn'])){
        $emailAddress = filter_var(strtolower($_REQUEST['emailAddress']), FILTER_SANITIZE_EMAIL);
        $pass = strip_tags($_REQUEST['pass']);

        // if the email is empty
        if(empty($emailAddress)){
            $errorMsg[0][] = "Enter an email address";
        }
        if(empty($pass)){
            $errorMsg[1][] = "Enter a password";
        }
        // if this executes, that means the error messages didnt show and the user has entered in an email and password
        // we need to check the database to confirm that the user entered information exists in the database
        else if ((!empty($emailAddress)) && (!empty($pass))) {
            // echo("in here");
            try {
                // locate the email in the database (LIMIT 1 because if one email is found that matches, thats the account we need)
                $select_statement = $db->prepare("SELECT * FROM accounts WHERE email = :emailAddress LIMIT 1");

                $select_statement->execute(
                    [
                        'emailAddress' => $emailAddress
                ]);
                // if there's an email match, we bring all of the data in for that user and make sure the password matches
                $row = $select_statement->fetch(PDO::FETCH_ASSOC);
                
                // if there was a row returned, then we can check the password (if not greater than 0, the user doesnt exist in the database)
                if($select_statement->rowCount() > 0){
                    // if this is true, the passwords match
                    if(password_verify($pass, $row['password'])){

                        // start our session to populate it with all our data
                        $_SESSION['user']['firstName'] = $row["first_name"];
                        $_SESSION['user']['lastName'] = $row["last_name"];
                        $_SESSION['user']['emailAddress'] = $row["email"];
                        $_SESSION['user']['id'] = $row["id"];
                        $SESSION['user']['profilePic'] = $row["profile_pic"];

                        // if the password verifies, we redirect the user to their page
                        header("location: index.php");

                    }
                    else{
                        $errorMsg[2][] = 'Wrong email or password';
                    }
                }
                else{
                    $errorMsg[2][] = 'Wrong email or password';
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>