
<section class="main-content"><section class="login-content">
    <div class="form-border">
            <h2 class="head-text">Forgot Password</h2>
            <p class="head-desc">Enter your email below - we'll send you a link to reset it!</p>
            <div class="form-items">
                <form action="forgotpw.php" method="POST" class="login-form" autocomplete="off">
                    <!-- <dt><label for="email">Email Address</label></dt> -->
                    <br>
                    <br>
                    <dd class="form-labels"><input type="text" class="box-size-long" placeholder="Email"></dd>
                    <?php
                        if(isset($errorMsg[0])){
                            foreach($errorMsg[0] as $emailError){
                                print("<errdiv style='font-family:source-serif-pro,serif;color:#f01e2c;font-size:12px;'>".$emailError."</errdiv>");
                            }
                        }
                    ?>
                    <br>
                    <br>
                    <button type="submit" class="buttons" name="fp_btn">Send Link</button>
                </form>
            </div>
            <br>
            <p class="no-account">Already a member? <a href="login.php" class="loginhere">Sign In</a></p>
            <br>
            <br>
            <p class="caption">By proceeding, you agree to our Terms of Use and confirm you have read our Privacy and Cookie Statement. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
    </div>
</section></section>
</body></html>