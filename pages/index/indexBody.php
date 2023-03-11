<!-- PAGE TOP AD-->
<section class="main-content"><section class="inner-content">
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>

<!-- HOMEPAGE HEADER -->
    <?php
        $_SESSION['myLook'] = "Theme Park";
    ?>
    
    <section class="logo-area">
        <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="logo">
        <form action="search.php" class="logo-area">     
                <label for="home_search" class="logo-item">Ah, <i>Orlando</i>! Looking for anything in particular? </label>
                <input type="text" name="home_search" value="Theme Park" class="searchbox logo-item">
                <button class="nobtndecor logo-item">
                    <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                </button>
        </form>
    </section>
    <hr class="hsline">

    <?php
        $ctr = 1;
    ?>



<!-- FIRST CARD ROW -->

    <section class="card-row">
        
        <h2 class="row-title">Orlando's Signature: Theme Parks</h2>
        <a class="row-link" href="search.php?event='Theme Parks'"><p class="inline rightalign">See All Theme Park Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll0">
                <?php
                    // keeps count of how many cards are on the homescreen; if the count is greater than 8, we do not need to display that card
                    $cardCount = 1;

                    foreach($results_one AS $result){
                        // print("ctr:  ".$ctr);

                        if ($result['id'] != $ctr){
                            $ctr = $result['id'];
                            // print("ctr update:  ".$ctr);
                        }
                        
                        $id[$ctr] = $result["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result["event_name"];
                        $blurb[$ctr] = $result["activity_blurb"];
                        $img1[$ctr] = $result["img1"];
                        $altText1[$ctr] = $result["alt_text_img1"];
                        $price[$ctr] = $result["price"];
                        $address[$ctr] = $result["address"];
                        $url[$ctr] = $result["url"];
                        $meta[$ctr] = $result["meta_description"];
                        $map[$ctr] = $result["map_img"];
                        $map_link[$ctr] = $result["map_link"];
                        $themePark[$ctr] = $result["isThemePark"];
                        $foodDrink[$ctr] = $result["isFoodDrink"];
                        $local[$ctr] = $result["isLocal"];
                        $outdoor[$ctr] = $result["isOutdoorActive"];
                        $good[$ctr] = $result["isGoodVal"];
                        
                        // Session sends
                        $_SESSION['id'.$ctr] = $id[$ctr];
                        $_SESSION['event_name'.$ctr] = $name[$ctr];
                        $_SESSION['activity_blurb'.$ctr] = $blurb[$ctr];
                        $_SESSION['price'.$ctr] = $price[$ctr];
                        $_SESSION['img1'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address'.$ctr] = $address[$ctr];
                        $_SESSION['url'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img'.$ctr] = $map[$ctr];
                        $_SESSION['map_link'.$ctr] = $map_link[$ctr];
                        $_SESSION['isThemePark'.$ctr] = $themePark[$ctr];
                        $_SESSION['isFOodDrink'.$ctr] = $foodDrink[$ctr];
                        $_SESSION['isLocal'.$ctr] = $local[$ctr];
                        $_SESSION['isOutdoorActive'.$ctr] = $themePark[$ctr];
                        $_SESSION['isGoodVal'.$ctr] = $foodDrink[$ctr];


                        if($cardCount <= 8){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>From $".$price[$ctr].(($result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result["isLocal"] == 'Y') ? " | Local Activity" : "").(($result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $cardCount = $cardCount+1;
                    }
                    // print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight0">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>



    <section class="card-row">
        
        <h2 class="row-title">Hot Orlando Restaurants</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Restaurant Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft1">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll1">
                <?php

                    // keeps count of how many cards are on the homescreen; if the count is greater than 8, we do not need to display that card
                    $cardCount = 1;

                    foreach($results_two AS $result_two){

                        if ($result_two['id'] != $ctr){
                            $ctr = $result_two['id'];
                        }

                        $id[$ctr] = $result_two["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_two["event_name"];
                        $blurb[$ctr] = $result_two["activity_blurb"];
                        $img1[$ctr] = $result_two["img1"];
                        $altText1[$ctr] = $result_two["alt_text_img1"];
                        $price[$ctr] = $result_two["price"];
                        $address[$ctr] = $result_two["address"];
                        $url[$ctr] = $result_two["url"];
                        $meta[$ctr] = $result_two["meta_description"];
                        $map[$ctr] = $result_two["map_img"];
                        $map_link[$ctr] = $result_two["map_link"];
                        $themePark[$ctr] = $result_two["isThemePark"];
                        $foodDrink[$ctr] = $result_two["isFoodDrink"];
                        $local[$ctr] = $result_two["isLocal"];

                        // send data to session
                        $_SESSION['id'.$ctr] = $id[$ctr];
                        $_SESSION['event_name'.$ctr] = $name[$ctr];
                        $_SESSION['activity_blurb'.$ctr] = $blurb[$ctr];
                        $_SESSION['price'.$ctr] = $price[$ctr];
                        $_SESSION['img1'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address'.$ctr] = $address[$ctr];
                        $_SESSION['url_res'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img'.$ctr] = $map[$ctr];
                        $_SESSION['map_link'.$ctr] = $map_link[$ctr];
                        $_SESSION['isThemePark'.$ctr] = $themePark[$ctr];
                        $_SESSION['isFOodDrink'.$ctr] = $foodDrink[$ctr];
                        $_SESSION['isLocal'.$ctr] = $local[$ctr];

                        if($cardCount <= 8){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>".$price[$ctr].(($result_two["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_two["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_two["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_two["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_two["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_two["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_two["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_two["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $cardCount = $cardCount+1;
                    }
                    // print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight1">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>

    <!--local event-->
    <section class="card-row">

        <h2 class="row-title">Catch Some Local Events</h2>
        <a href="search.php" class="row-link"><p class="inline rightalign">See All Orlando Local Events</p></a>

        <button class="caro-btn-left" id="autoLeft2">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>
            
            
            <section class="carousel" id="scroll2">

                <?php
                    // keeps count of how many cards are on the homescreen; if the count is greater than 8, we do not need to display that card
                    $cardCount = 1;

                    foreach($results_three AS $result_three){
                        // print("ctr:  ".$ctr);

                        if ($result_three['id'] != $ctr){
                            $ctr = $result_three['id'];
                            // print("ctr update:  ".$ctr);
                        }

                        $id[$ctr] = $result_three["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_three["event_name"];
                        $blurb[$ctr] = $result_three["activity_blurb"];
                        $img1[$ctr] = $result_three["img1"];
                        $altText1[$ctr] = $result_three["alt_text_img1"];
                        $price[$ctr] = $result_three["price"];
                        $address[$ctr] = $result_three["address"];
                        $url[$ctr] = $result_three["url"];
                        $meta[$ctr] = $result_three["meta_description"];
                        $map[$ctr] = $result_three["map_img"];
                        $map_link[$ctr] = $result_three["map_link"];
                        $themePark[$ctr] = $result_three["isThemePark"];
                        $foodDrink[$ctr] = $result_three["isFoodDrink"];
                        $local[$ctr] = $result_three["isLocal"];

                        // send data to session
                        $_SESSION['id'.$ctr] = $id[$ctr];
                        $_SESSION['event_name'.$ctr] = $name[$ctr];
                        $_SESSION['activity_blurb'.$ctr] = $blurb[$ctr];
                        $_SESSION['price'.$ctr] = $price[$ctr];
                        $_SESSION['img1'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address'.$ctr] = $address[$ctr];
                        $_SESSION['url'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img'.$ctr] = $map[$ctr];
                        $_SESSION['map_link'.$ctr] = $map_link[$ctr];
                        $_SESSION['isThemePark'.$ctr] = $themePark[$ctr];
                        $_SESSION['isFOodDrink'.$ctr] = $foodDrink[$ctr];
                        $_SESSION['isLocal'.$ctr] = $local[$ctr];
                        
                        
                        if($cardCount <= 8){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>".$price[$ctr].(($result_three["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_three["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_three["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_three["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_three["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_three["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_three["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_three["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $cardCount = $cardCount+1;
                    }
                    // print("ctr: ".$ctr);
                ?>

            </section>

        <button class="caro-btn-right" id="autoRight2">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>


    <!-- outdoors card row -->
    <section class="card-row">
        
        <h2 class="row-title">Get Outside & Active!</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Outdoor Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft3">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll3">
                <?php

                    // keeps count of how many cards are on the homescreen; if the count is greater than 8, we do not need to display that card
                    $cardCount = 1;

                    foreach($results_four AS $result_four){
                        // print("ctr:  ".$ctr);

                        if ($result_four['id'] != $ctr){
                            $ctr = $result_four['id'];
                            // print("ctr update:  ".$ctr);
                        }

                        $id[$ctr] = $result_four["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_four["event_name"];
                        $blurb[$ctr] = $result_four["activity_blurb"];
                        $img1[$ctr] = $result_four["img1"];
                        $altText1[$ctr] = $result_four["alt_text_img1"];
                        $price[$ctr] = $result_four["price"];
                        $address[$ctr] = $result_four["address"];
                        $url[$ctr] = $result_four["url"];
                        $meta[$ctr] = $result_four["meta_description"];
                        $map[$ctr] = $result_four["map_img"];
                        $map_link[$ctr] = $result_four["map_link"];
                        $themePark[$ctr] = $result_four["isThemePark"];
                        $foodDrink[$ctr] = $result_four["isFoodDrink"];
                        $local[$ctr] = $result_four["isLocal"];

                        // if($ctr != $id[$ctr]){
                        //     $ctr = $id[$ctr];
                        // }

                        // send data to session
                        $_SESSION['id'.$ctr] = $id[$ctr];
                        $_SESSION['event_name'.$ctr] = $name[$ctr];
                        $_SESSION['activity_blurb'.$ctr] = $blurb[$ctr];
                        $_SESSION['price'.$ctr] = $price[$ctr];
                        $_SESSION['img1'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address'.$ctr] = $address[$ctr];
                        $_SESSION['url_res'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img'.$ctr] = $map[$ctr];
                        $_SESSION['map_link'.$ctr] = $map_link[$ctr];
                        $_SESSION['isThemePark'.$ctr] = $themePark[$ctr];
                        $_SESSION['isFOodDrink'.$ctr] = $foodDrink[$ctr];
                        $_SESSION['isLocal'.$ctr] = $local[$ctr];
                        
                        
                        if($cardCount <= 8){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>".$price[$ctr].(($result_four["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_four["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_four["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_four["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_four["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_four["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_four["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_four["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $cardCount = $cardCount+1;
                    }
                    // print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight3">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>



        <!-- value card row -->
        <section class="card-row">
        
        <h2 class="row-title">Orlando's Cheap Thrills</h2>
        <a class="row-link" href="search.php"><p class="inline rightalign">See All Good Value Activities</p></a>
        
        <button class="caro-btn-left" id="autoLeft4">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

            <!--Cards-->
            <section class="carousel" id="scroll4">
                <?php

                    // keeps count of how many cards are on the homescreen; if the count is greater than 8, we do not need to display that card
                    $cardCount = 1;

                    foreach($results_five AS $result_five){
                        // print("ctr:  ".$ctr);

                        if ($result_five['id'] != $ctr){
                            $ctr = $result_five['id'];
                            // print("ctr update:  ".$ctr);
                        }

                        $id[$ctr] = $result_five["id"];
                        // print("id: ".$id[$ctr]);
                        $name[$ctr] = $result_five["event_name"];
                        $blurb[$ctr] = $result_five["activity_blurb"];
                        $img1[$ctr] = $result_five["img1"];
                        $altText1[$ctr] = $result_five["alt_text_img1"];
                        $price[$ctr] = $result_five["price"];
                        $address[$ctr] = $result_five["address"];
                        $url[$ctr] = $result_five["url"];
                        $meta[$ctr] = $result_five["meta_description"];
                        $map[$ctr] = $result_five["map_img"];
                        $map_link[$ctr] = $result_five["map_link"];
                        $themePark[$ctr] = $result_five["isThemePark"];
                        $foodDrink[$ctr] = $result_five["isFoodDrink"];
                        $local[$ctr] = $result_five["isLocal"];

                        // if($ctr != $id[$ctr]){
                        //     $ctr = $id[$ctr];
                        // }

                        // send data to session
                        $_SESSION['id'.$ctr] = $id[$ctr];
                        $_SESSION['event_name'.$ctr] = $name[$ctr];
                        $_SESSION['activity_blurb'.$ctr] = $blurb[$ctr];
                        $_SESSION['price'.$ctr] = $price[$ctr];
                        $_SESSION['img1'.$ctr] = $img1[$ctr];
                        $_SESSION['alt_text_img1'.$ctr] = $altText1[$ctr];
                        $_SESSION['address'.$ctr] = $address[$ctr];
                        $_SESSION['url_res'.$ctr] = $url[$ctr];
                        $_SESSION['meta_description'.$ctr] = $meta[$ctr];
                        $_SESSION['map_img'.$ctr] = $map[$ctr];
                        $_SESSION['map_link'.$ctr] = $map_link[$ctr];
                        $_SESSION['isThemePark'.$ctr] = $themePark[$ctr];
                        $_SESSION['isFOodDrink'.$ctr] = $foodDrink[$ctr];
                        $_SESSION['isLocal'.$ctr] = $local[$ctr];
                        
                        
                        if($cardCount <= 8){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name[$ctr]' href='activity.php?count=$ctr&id=$id[$ctr]'>
                                <img class='card-image' src='img/images/$img1[$ctr]' alt='$altText1[$ctr]'>
                                <h4>$name[$ctr]</h4>
                                <p class='captions'>".$price[$ctr].(($result_five["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($result_five["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($result_five["isLocal"] == 'Y') ? " | Local Activity" : "").(($result_five["isGoodValue"] == 'Y') ? " | Good Value" : "").(($result_five["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($result_five["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($result_five["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($result_five["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $cardCount = $cardCount+1;
                    }
                    // print("ctr: ".$ctr);
                    ?>
            </section>

        <button class="caro-btn-right" id="autoRight4">
            <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

    </section>


</section></section>