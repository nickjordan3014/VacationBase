

<section class="main-content"><section class="login-content">
    <div class="form-border">    
        <h2 class="head-text">Welcome</h2>
        <p class="head-desc">Sign in to unlock the best of Vacation Base</p>
        <div class="form-items">
            <form action="login.php" method="POST" class="login-form" autocomplete="off">
                <?php
                    if(isset($errorMsg[2])){
                        foreach($errorMsg[2] as $accError){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:14px;'>".$accError."</errdiv>");
                        }
                    }
                ?>
                <br>
                <br>
                <!-- <dt><label for="email">Email Address</label></dt> -->
                <dd class="form-labels"><input type="text" class="box-size-long" name="emailAddress" value="<?php print $emailAddress;?>" placeholder="Email"></dd>
                <?php
                    if(isset($errorMsg[0])){
                        foreach($errorMsg[0] as $emailError){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailError."</errdiv>");
                        }
                    }
                ?>
                <br>
                <!-- <dt><label for="password">Password</label></dt> -->
                <br>
                <dd class="form-labels"><input type="password" class="box-size-long" name="pass" id="password" placeholder="Password"></dd>
                <?php
                    if(isset($errorMsg[1])){
                        foreach($errorMsg[1] as $passErrors){
                            print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$passErrors."</errdiv>");
                        }
                    }
                ?>
                <br>
                <div style="display:flex;flex-direction:row;align-items:center;">
                    <input type="checkbox" id="showPassword"/>
                    <label for="showPassword">&nbsp;&nbsp;Show password</label>
                </div>
                <br>
                <button type="submit" class="buttons" name="login_btn">Sign In</button>
            </form>
        </div>
        <br>
        <p class="no-pass"><a href="forgotpw.php" class="forgotpw">Forgot Password?</a></p>
        <p class="no-pass">Don't have an account? <a href="signup.php" class="registerhere">Register Here</a></p>
        <!-- <p class="or">or</p>
        <button class="buttons">Sign in with Google</button>
        <button class="buttons">Sign in with Facebook</button> -->
        <br>
        <br>
        <p class="caption">By proceeding, you agree to our Terms of Use and confirm you have read our Privacy and Cookie Statement. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
    </div>
</section></section>
<script src="js/showPassword.js"></script>
</body></html>