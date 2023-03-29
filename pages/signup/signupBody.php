

<section class="main-content"><section class="login-content">
    <div class="form-border">
        <h2 class="head-text">Welcome</h2>
        <p class="head-desc">Sign in to unlock the best of Vacation Base</p>
        <div class="form-items">
            <form action="signup.php" method="POST" class="login-form" autocomplete="off">
                <!-- <dt><label for="name">Full Name</label></dt> -->
                <dd class="form-labels">
                    <span style="float:left;">
                        <br>
                        <input type="text" name="firstName" class="box-size-short box-pad" value="<?php print $firstName;?>" placeholder="First name">
                        <?php
                            if(isset($errorMsg[0])){
                                foreach($errorMsg[0] as $firstNameErrors){
                                    print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$firstNameErrors."</errdiv>");
                                }
                            }
                            else if(isset($errorMsg[1])){
                                foreach($errorMsg[1] as $firstNameErrors){
                                    print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$firstNameErrors."</errdiv>");
                                }
                            }
                            // TEST FOR REG EXPRESSION FOR FIRST NAME HERE (name should only contain letters and apostraphes)
                            else if(isset($errorMsg[8])){
                                foreach($errorMsg[8] as $firstNameErrors){
                                    print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$firstNameErrors."</errdiv>");
                                }
                            }
                        ?>
                    </span>
                    <span style="float: left;">
                        <br>
                        <input type="text" name="lastName" class="box-size-short" value="<?php print $lastName;?>" placeholder="Last name">
                        <?php
                            if(isset($errorMsg[2])){
                                foreach($errorMsg[2] as $lastNameErrors){
                                    print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$lastNameErrors."</errdiv>");
                                }
                            }
                            // TEST FOR REG EXPRESSION FOR LAST NAME HERE (name should only contain letters and apostraphes)
                            else if($errorMsg[9]){
                                foreach($errorMsg[9] as $lastNameErrors){
                                    print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$lastNameErrors."</errdiv>");
                                }
                            }
                        ?>
                    </span>
                    <br>
                    <br>
                </dd>
                <br>
                <br>
                <!-- <dt><label for="email">Email Address</label></dt> -->
                <dd class="form-labels"><input type="text" name="emailAddress" class="box-size-long" value="<?php print $emailAddress;?>" placeholder="Email"></dd>
                <?php
                    if(isset($errorMsg[3])){
                        foreach($errorMsg[3] as $emailErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailErrors."</errdiv>");
                        }
                    }
                    // TEST FOR REG EXPRESSION FOR EMAIL HERE (email should contain no spaces, an @ and an ending with a valid email with a .org or .com)
                    else if ($errorMsg[10]){
                        foreach($errorMsg[10] as $emailErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailErrors."</errdiv>");
                        }
                    }
                ?>
                <br>
                <br>
                <!-- <dt><label for="password">Password</label></dt> -->
                <dd class="form-labels"><input type="password" name="pass" class="box-size-long" placeholder="Password"></dd>
                <?php
                    if(isset($errorMsg[4])){
                        foreach($errorMsg[4] as $passErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$passErrors."</errdiv>");
                        }
                    }
                    else if(isset($errorMsg[5])){
                        foreach($errorMsg[5] as $passErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$passErrors."</errdiv>");
                        }
                    }
                    // TEST FOR REG EXPRESSION FOR PASSWORD HERE (password must be at least 8 chars long and include at least one capital letter, at least one lowercase letter and at least one symbol(!,@,#,$,%,^,&,*,(,),...))
                    else if (isset($errorMsg[11])){
                        foreach($errorMsg[11] as $passErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$passErrors."</errdiv>");
                        }
                    }
                ?>
                <br>
                <br>
                <!-- <dt><label for="password">Confirm</label></dt> -->
                <dd class="form-labels"><input type="password" name="newpass" class="box-size-long" placeholder="Confirm Password"></dd>
                <?php
                    if(isset($errorMsg[6])){
                        foreach($errorMsg[6] as $emailErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailErrors."</errdiv>");
                        }
                    }
                    else if(isset($errorMsg[7])){
                        foreach($errorMsg[7] as $emailErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailErrors."</errdiv>");
                        }
                    }
                ?>
                <br>
                <br>
                <button type="submit" id="submit" name="signup_btn" class="buttons">Join</button>
            </form>
        </div>
        <br>
        <p class="no-account">Already a member? <a href="login.php" class="registerhere">Sign In</a></p>
        <br>
        <br>
        <p class="caption">By proceeding, you agree to our Terms of Use and confirm you have read our Privacy and Cookie Statement. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. </p>
    </div>
</section></section>
</body></html>