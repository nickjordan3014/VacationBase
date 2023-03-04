<!-- PAGE TOP AD-->
<section class="main-content"><section class="inner-content">
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

<!-- HOMEPAGE HEADER -->
    
    <section class="logo-area">
        <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="logo">
        <form action="search.php" class="logo-area">     
                <label for="home_search" class="">Where to? Enter a City or Zip Code to see activities there: </label>
                <input type="text" name="home_search" class="searchbox">
                <button class="nobtndecor">
                    <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                </button>
        </form>
    </section>
    <hr class="hsline">



<!-- FIRST CARD ROW -->

    <section class="card-row">
        
        <h2 class="row-title">Orlando's Signature: Theme Parks</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Theme Park Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll0">
                <?php
                        $ctr = 1;
                        foreach($results_one AS $result){
                            // print("ctr:  ".$ctr);

                            if ($result['id'] != $ctr){
                                $ctr = $result['id'];
                                // print("ctr update:  ".$ctr);
                            }
                            
                            $id[$ctr] = $result["id"];
                            // print("id: ".$id[$ctr]);
                            $name[$ctr] = $result["event_name"];
                            $img1[$ctr] = $result["img1"];
                            $altText1[$ctr] = $result["alt_text_img1"];
                            $price[$ctr] = $result["price"];
                            $address[$ctr] = $result["address"];
                            $url[$ctr] = $result["url"];
                            $meta[$ctr] = $result["meta_description"];
                            $map[$ctr] = $result["map_img"];
                            $map_link[$ctr] = $result["map_link"];
                            $themePark = $result["isThemePark"];
                            $foodDrink = $result["isFoodDrink"];
                            $local = $result["isLocal"];
                            
                            // Session sends
                            $_SESSION['id_tp'.$ctr] = $id[$ctr];
                            $_SESSION['event_name_tp'.$ctr] = $name[$ctr];
                            $_SESSION['price_tp'.$ctr] = $price[$ctr];
                            $_SESSION['img1_tp'.$ctr] = $img1[$ctr];
                            $_SESSION['alt_text_img1_tp'.$ctr] = $altText1[$ctr];
                            $_SESSION['address_tp'.$ctr] = $address[$ctr];
                            $_SESSION['url_tp'.$ctr] = $url[$ctr];
                            $_SESSION['meta_description_tp'.$ctr] = $meta[$ctr];
                            $_SESSION['map_img_tp'.$ctr] = $map[$ctr];
                            $_SESSION['map_link_tp'.$ctr] = $map_link[$ctr];
                            

                            // if($themePark == 'Y'){
                            //     $themePark = 'ThemePark';
                            // }
                            // else if ($themePark == 'N'){
                            //     $themePark = 'Not Theme Park';
                            // }

                            $_SESSION['isThemePark'.$ctr] = $themePark;

                            $thmpk = $_SESSION['isThemePark'.$ctr];

                            // if($local == 'Y'){
                            //     $local = 'LocalEvent';
                            // }
                            // else if ($local == 'N'){
                            //     $local = 'Not Local Event';
                            // }
    
                            $_SESSION['isLocal'.$ctr] = $local;
    
                            $locpo = $_SESSION['isLocal'.$ctr];

                            // if($foodDrink == 'Y'){
                            //     $foodDrink = 'Restaurant';
                            // }
                            // else if ($foodDrink == 'N'){
                            //     $foodDrink = 'Not Food Drink';
                            // }
    
                            $_SESSION['isFoodDrink'.$ctr] = $foodDrink;
    
                            $fd = $_SESSION['isFoodDrink'.$ctr];


                            // <p>$thmpk</p>
                            // <p>$fd</p>
                            // <p>$locpo</p>

                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&event=$themePark&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>From $".$price[$ctr].(($result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result["isLocal"] == 'Y') ? " | Local Activity" : "").(($result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                            $ctr = $ctr+1;
                        }
                        print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight0">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <br>
    <br>
    <br>
    <br>

    <section class="card-row">
        
        <h2 class="row-title">Orlando's Signature: Restaurants</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Restaurant Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft1">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll1">
                <?php
                    // $ctr = 9;
                    foreach($results_two AS $result_two){
                        // print("ctr:  ".$ctr);

                        if ($result_two['id'] != $ctr){
                            $ctr = $result_two['id'];
                            // print("ctr update:  ".$ctr);
                        }

                        $id[$ctr] = $result_two["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_two["event_name"];
                        $img1[$ctr] = $result_two["img1"];
                        $altText1[$ctr] = $result_two["alt_text_img1"];
                        $price[$ctr] = $result_two["price"];
                        $address[$ctr] = $result_two["address"];
                        $url[$ctr] = $result_two["url"];
                        $meta[$ctr] = $result_two["meta_description"];
                        $map[$ctr] = $result_two["map_img"];
                        $map_link[$ctr] = $result_two["map_link"];
                        $foodDrink = $result_two["isFoodDrink"];
                        $themePark = $result_two["isThemePark"];
                        $local = $result_two["isLocal"];

                        // if($ctr != $id[$ctr]){
                        //     $ctr = $id[$ctr];
                        // }

                        // send data to session
                        $_SESSION['id_res'.$ctr] = $id[$ctr];
                        $_SESSION['event_name_res'.$ctr] = $name[$ctr];
                        $_SESSION['price_res'.$ctr] = $price[$ctr];
                        $_SESSION['img1_res'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1_res1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address_res'.$ctr] = $address[$ctr];
                        $_SESSION['url_res'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description_res'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img_res'.$ctr] = $map[$ctr];
                        $_SESSION['map_link_res'.$ctr] = $map_link[$ctr];
                        

                        // if($foodDrink == 'Y'){
                        //     $foodDrink = 'Restaurant';
                        // }
                        // else if ($foodDrink == 'N'){
                        //     $foodDrink = 'Not Food Drink';
                        // }

                        $_SESSION['isFoodDrink'.$ctr] = $foodDrink;

                        $fd = $_SESSION['isFoodDrink'.$ctr];

                        // if($themePark == 'Y'){
                        //     $themePark = 'ThemePark';
                        // }
                        // else if ($themePark == 'N'){
                        //     $themePark = 'Not Theme Park';
                        // }

                        $_SESSION['isThemePark'.$ctr] = $themePark;

                        $thmpk = $_SESSION['isThemePark'.$ctr];

                        // if($local == 'Y'){
                        //     $local = 'LocalEvent';
                        // }
                        // else if ($local == 'N'){
                        //     $local = 'Not Local Event';
                        // }

                        $_SESSION['isLocal'.$ctr] = $local;

                        $locpo = $_SESSION['isLocal'.$ctr];

                        // <p>$locpo</p>
                        // <p>$fd</p>
                        // <p>$thmpk</p>

                        print(
                            "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&event=$foodDrink&id=$id[$ctr]'>
                            <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                            <h4>$name[$ctr]</h4>
                            <p class='captions'>".$price[$ctr].(($result_two["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_two["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_two["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_two["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_two["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_two["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_two["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_two["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                            </a>&nbsp;"
                        );
                        $ctr = $ctr+1;
                    }
                    print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight1">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <br>
    <br>
    <br>
    <br>

<!-- SECOND CARD ROW -->

    <!--Blogs-->
    <section class="card-row">

        <h2 class="row-title">Blogs about Orlando</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Blogs</p></a>

        <button class="caro-btn-left" id="autoLeft2">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
            
            <!--Cards-->
            <section class="carousel" id="scroll2">
                <?php
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/oblogs/popularTP.jpg' class='card-image' alt='People riding an attraction'>
                        <h4>The Popular Theme Parks</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/oblogs/beaches.jpg' class='card-image' alt='Sun setting at Cocoa Beach'>
                        <h4>Best Beaches in the Area</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                    print(
                        "<a class= 'card' id='bC0' href='blog.php'>
                        <img src='img/images/magickingdom/magickingdom1.jpg' class='card-image' alt='Magic Kingdom Castle'>
                        <h4>Blog Title</h4>
                        </a>&nbsp;"
                    );
                ?>
            </section>

        <button class="caro-btn-right" id="autoRight2">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>
    
    <br>
    <br>
    <br>
    <br>

    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

    <br>
    <br>
    <br>
    <br>



    <!--local event-->
    <section class="card-row">

        <h2 class="row-title">Orlando's Signature: Local Event</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Local Events</p></a>

        <button class="caro-btn-left" id="autoLeft3">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
            
            
            <section class="carousel" id="scroll3">

                <?php
                    // $ctr = 17;
                    foreach($results_three AS $result_three){
                        // print("ctr:  ".$ctr);

                        if ($result_three['id'] != $ctr){
                            $ctr = $result_three['id'];
                            // print("ctr update:  ".$ctr);
                        }

                        $id[$ctr] = $result_three["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_three["event_name"];
                        $img1[$ctr] = $result_three["img1"];
                        $altText1[$ctr] = $result_three["alt_text_img1"];
                        $price[$ctr] = $result_three["price"];
                        $address[$ctr] = $result_three["address"];
                        $url[$ctr] = $result_three["url"];
                        $meta[$ctr] = $result_three["meta_description"];
                        $map[$ctr] = $result_three["map_img"];
                        $map_link[$ctr] = $result_three["map_link"];
                        $local = $result_three["isLocal"];
                        $themePark = $result_three["isThemePark"];
                        $foodDrink = $result_three["isFoodDrink"];

                        // send data to session
                        $_SESSION['id_loc'.$ctr] = $id[$ctr];
                        $_SESSION['event_name_loc'.$ctr] = $name[$ctr];
                        $_SESSION['price_loc'.$ctr] = $price[$ctr];
                        $_SESSION['img1_loc'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1_loc'.$ctr] = $altText1[$ctr];
                        $_SESSION['address_loc'.$ctr] = $address[$ctr];
                        $_SESSION['url_loc'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description_loc'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img_loc'.$ctr] = $map[$ctr];
                        $_SESSION['map_link_loc'.$ctr] = $map_link[$ctr];
                        
                        

                        // if($local == 'Y'){
                        //     $local = 'LocalEvent';
                        // }
                        // else if ($local == 'N'){
                        //     $local = 'Not Local Event';
                        // }

                        $_SESSION['isLocal'.$ctr] = $local;

                        $locpo = $_SESSION['isLocal'.$ctr];

                        // if($foodDrink == 'Y'){
                        //     $foodDrink = 'Restaurant';
                        // }
                        // else if ($foodDrink == 'N'){
                        //     $foodDrink = 'Not Food Drink';
                        // }

                        $_SESSION['isFoodDrink'.$ctr] = $foodDrink;

                        $fd = $_SESSION['isFoodDrink'.$ctr];

                        // if($themePark == 'Y'){
                        //     $themePark = 'ThemePark';
                        // }
                        // else if ($themePark == 'N'){
                        //     $themePark = 'Not Theme Park';
                        // }

                        $_SESSION['isThemePark'.$ctr] = $themePark;

                        $thmpk = $_SESSION['isThemePark'.$ctr];

                        // <p>$locpo</p>
                        // <p>$fd</p>
                        // <p>$thmpk</p>

                        print(
                            "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&event=$local&id=$id[$ctr]'>
                            <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                            <h4>$name[$ctr]</h4>
                            <p class='captions'>".$price[$ctr].(($result_three["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_three["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_three["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_three["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_three["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_three["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_three["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_three["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                            </a>&nbsp;"
                        );
                        $ctr = $ctr+1;
                    }
                    print("ctr: ".$ctr);
                ?>

            </section>

        <button class="caro-btn-right" id="autoRight3">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <br>
    <br>
    <br>
    <br>

<!-- FOURTH CARD ROW -->

    <!--Preplanned-->
    <section class="card-row">

        <h2 class="row-title">Preplanned Orlando Itineraries</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Preplanned Orlando Itineraries</p></a>

        <button class="caro-btn-left" id="autoLeft4">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>  

        <!--Cards-->
        <section class="carousel" id="scroll4">
        <?php
            print(
                "<a class= 'card' id='piC0' href='preplanned.php'>
                <img src='img/images/preplanned/threedayTP.jpg' class='card-image' alt=''>
                <h4>3 Day Theme Park Trip</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC1' href='preplanned.php'>
                <img src='img/images/preplanned/family.jpg' class='card-image' alt=''>
                <h4>Family Vacation</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC2' href='preplanned.php'>
                <img src='img/images/preplanned/21.jpg' class='card-image' alt=''>
                <h4>21+ Weekend of Fun</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC3' href='preplanned.php'>
                <img src='img/images/preplanned/budget.jpg' class='card-image' alt=''>
                <h4>On a Budget Getaway</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC4' href='preplanned.php'>
                <img src='img/images/preplanned/friends.jpg' class='card-image' alt=''>
                <h4>Friends Trip</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC5' href='preplanned.php'>
                <img src='img/images/preplanned/restaurant.jpg' class='card-image' alt=''>
                <h4>Restaurant Dine and Dash</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC6' href='preplanned.php'>
                <img src='img/images/preplanned/outside.jpg' class='card-image' alt=''>
                <h4>Outdoor Fun</h4>
                </a>&nbsp;"
            );
            print(
                "<a class= 'card' id='piC7' href='preplanned.php'>
                <img src='img/images/preplanned/local.jpg' class='card-image' alt=''>
                <h4>Living Like a Local</h4>
                </a>&nbsp;"
            );
        ?>
            
        </section>

        <button class="caro-btn-right" id="autoRight4">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
                
    </section>

    <br>
    <br>
    <br>
    <br>

    <!--Ad Space-->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

    <br>
    <br>
    <br>
    <br>

</section></section>