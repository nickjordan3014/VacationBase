<?php
    require_once 'sql/database.php';

    // initiates a session for the current user on their page (remains valid while the browser window is open)
    session_start();

    // doesnt display the sign up sheet if user is logged in
    authRedirect();
    
    // checking if the submit button has been pushed/they have submitted a form
    if(isset($_REQUEST['signup_btn'])){
        
        // filtering/sanitizing the variables prior to storage to make sure these variables are simply
        // what the data is asking for and not any code injections or attacks
        $firstName = htmlspecialchars(ucwords($_REQUEST['firstName']));
        $lastName = htmlspecialchars(ucwords($_REQUEST['lastName']));
        $emailAddress = filter_var(strtolower($_REQUEST['emailAddress']), FILTER_SANITIZE_EMAIL);
        $pass = strip_tags($_REQUEST['pass']);
        $newpass = strip_tags($_REQUEST['newpass']);


        // regExpr name
        $regName = "/^[a-z ,.'-]+$/i";

        // regExpr password (mininmum is 8 maximum is 60)
        $regPassword = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,60}$/";
        

        // if the name area variable is empty, we need to throw an error
        if(empty(trim($firstName))){
            if(empty(trim($lastName))){
                $errorMsg[0][] = 'Enter a first and last name';
            }
            
            else {
                $errorMsg[1][] = 'Enter a first name';
            }
        }
        // else if first name is not empty but last name is
        else if (!empty(trim($firstName)) && empty(trim($lastName))) {
            if(empty(trim($lastName))){
                $errorMsg[2][] = 'Enter a last name';
            }
        }
        // else if a user enters in something on the first and last name but its not a valid name
        else if (!(preg_match($regName, $firstName)) && !(preg_match($regName, $lastName))) {
            $errorMsg[8][] = "Enter a valid name";
        }

        // if the email is empty
        if(empty(trim($emailAddress))){
            $errorMsg[3][] = "Enter an email address";
        }

        // // if the password is empty
        if(empty(trim($pass))){
            $errorMsg[4][] = "Enter a password";
        }
        // regExpr password
        else if(!(preg_match($regPassword, $pass))){
            echo(preg_match($regPassword, $pass));
            echo("password is: ".$pass);
            $errorMsg[11][] = "Enter a valid password that contains:<br> <li>At least 8 characters</li> <li>At least one uppercase and lowercase letter (a-z, A-Z)</li> <li>At least one number (0-9)</li><li>At least one special character</li>";
        }

        // // if the password is shorter than 8 characters
        if(strlen($pass) < 8){
            $errorMsg[5][] = "Password must be 8 or more characters";
        }

        // if nothing was entered in confirm input
        if(empty(trim($newpass))){
            $errorMsg[6][] = "Confirm your password";
        }

        // if passwords dont match
        if($pass != $newpass){
            $errorMsg[7][] = "Those passwords didnt match. Try again";
        }

        // REG EXPRESSION

       

        // regExpr email
        if((!empty(trim($emailAddress))) && !(filter_var($emailAddress, FILTER_VALIDATE_EMAIL))){
            $errorMsg[10][] = "Enter a valid email";
        }

        

        // if we are not producing any error messages (meaning the form submitted all valid information)
        if(empty($errorMsg)){
            try{
                // fix the vunerability problem with SQL
                // if we already have an email in the database that belongs to the one the user entered in their form
                $select_statement = $db->prepare("SELECT first_name, last_name, email FROM accounts WHERE email = :emailAddress");
                $select_statement->execute(['emailAddress' => $emailAddress]);
                $row = $select_statement->fetch(PDO::FETCH_ASSOC);

                if(isset($row['email']) == $emailAddress){
                    $errorMsg[3][] = "A user with this email already exists.";
                }
                // if the email doesnt exist
                else{
                    // we are going to hash the password that the user enters
                    $hash_password = password_hash($pass, PASSWORD_DEFAULT);

                    // formats the timestamp of the user so on the database it saves the date the user created their account
                    // gives us the exact current time
                    $created = new DateTime();
                    // formats the timestamp for MYSQL format (year-month-da-day hour-minutes-seconds)
                    $created = $created->format('Y-m-d H:i:s');

                    // insert data into databse
                    $insert_statement = $db->prepare("INSERT INTO accounts (first_name, last_name, email, password, timeCreated) VALUES (:firstName,:lastName,:emailAddress,:pass,:created)");
                
                    if(
                        $insert_statement->execute(
                            [
                                ':firstName' => $firstName,
                                ':lastName' => $lastName,
                                ':emailAddress' => $emailAddress,
                                ':pass' => $hash_password,
                                ':created' => $created
                            ]
                        )
                    ){
                        // IN THE FUTURE before executing the header redirect to the index page, it should have the user go to their email and verify that its them that created the account
                        // header("location: index.php?msg=" .urlencode('Click the verification email'));
                        header("location: index.php");
                    }
                }
            }
            catch(PDOException $e){
                // if our database call doesnt happen, we'll capture it in this local variable and display the error with our query
                $pdoError = $e->getMessage();
            }
        }

    }

?>