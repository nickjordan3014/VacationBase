<section class="main-content"><section class="inner-content">
   
    <!-- PAGE TOP AD -->
    <article class="adleaderboard">
        <p>[ad here]</p>
    </article>
 
    <div class="margActivity">
        <?php
            $ctr = $_GET['count'];
            // $event = $_GET['event'];

            

            // print($ctr);



            // print("Theme Park: ".$_SESSION['isThemePark'.$ctr]);
            // print("Restaurant: ".$_SESSION['isFoodDrink'.$ctr]);
            // print("Local Events: ".$_SESSION['isLocal'.$ctr]);

            $id = $_SESSION['id'.$ctr];
            $name = $_SESSION['event_name'.$ctr];
            $blurb = $_SESSION['activity_blurb'.$ctr];
            $price = $_SESSION['price'.$ctr];
            $img1= $_SESSION['img1'.$ctr];
            $altText1 = $_SESSION['alt_text_img1'.$ctr];
            $address = $_SESSION['address'.$ctr];
            $url = $_SESSION['url'.$ctr];
            $meta = $_SESSION['meta_description'.$ctr];
            $map = $_SESSION['map_img'.$ctr];
            $map_link = $_SESSION['map_link'.$ctr];
            $themePark = $_SESSION['isThemePark'.$ctr];
            $foodDrink = $_SESSION['isFoodDrink'.$ctr];
            $local = $_SESSION['isLocal'.$ctr];
            
        ?>

        <!-- ARTICLE HEADER -->
        <section class="activity-title">
            <?php
                print("<h1>$name</h1>");
            ?>
        </section>

        <!-- IMAGE SECTION -->
        <section class="image-sec">
            <?php
                print("<img src='img/images/$img1' class='mapSize' alt='$altText1'>")
            ?>
        </section>

        <!-- PRICE AND BUTTON SECTION -->
        <section>
            <div class="price-click">
                <div class="priceOf">
                    <?php
                        // We only want this print statement to display if the event type is a theme park AND the price is over $0
                        if((intval($price) > 0) && ($themePark == 'Y')){
                            print("<p>Adult tickets start at <b>$$price</b> (ticket prices vary for children)<p>");
                        }
                        // else we want this to display if the event is a theme park and the price is not clear
                        else if (($price == '$' || $price == '$$' || $price == '$$$' || $price == '$$$$')){
                            print("<p>Starting price varies depending on purchase(s)</p>");
                        }
                    ?>
                </div>
                <div class="actButton">
                    <button class="addACTButton activityButton" onclick="location.href = 'itinerary.php';"><b>Add To Itinerary</b></button>
                </div>
            </div>
        </section>

        <br>
        <br>
        
        <!-- ACTIVITY BLURB -->
        <section>
                <p class="actInfoTwo">
                    <?php
                        // print("$meta<br><br>");

                        print("$blurb<br><br>");
                    ?>
                </p>
        </section>

        <!-- WEBSITE LINK -->
        <section>
            <p class="actInfoThree">
                <?php
                    print("<b>Their website:</b> <a href='$url' target='_blank' class='actWebLink'>$url</a>");
                ?>
            </p>
        </section>

        <!-- MAPPING SECTION -->
        <section>
            <?php
            // print("<div>
            //     <a href='$map_link' target='_blank'>
            //         <img src='img/images/mggooglemap.png' class='mapSize' alt='$name Map'>
            //     </a>
            // </div>");
            ?>
            <p class="actInfoThree">
                <?php
                    print("<b>Located At:</b> <a href='$address' target='_blank' class='actWebLink'>$address</a>");
                ?>
            </p>
        </section>
    </div>


    <br>
    <br>
    <br>
    <br>


    <!-- AD AGAIN -->
    <article class="adleaderboardTwo">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>


    <br>
    <br>
    <br>
    <br>


    <!-- SIMILAR ACTIVITES NEARBY -->
    <section>
        <p class="recCapt">
            Similar Activities Around Orlando 
        </p>
    </section>
    
    <section class="card-row">

        <button class="caro-btn-left" id="autoLeft0">
            <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="caro-arrow">
        </button>

        <!--Cards-->
        <section class="carousel" id="scroll0">
            
            <?php

                // $ctr = 1;
                $ctr2 = $ctr;

                // print("ctr: ".$ctr);
                // print("ctr2: ".$ctr2);
                
                
                if ($themePark == 'Y'){
                    $cardCount = 1;
                    // variable used to display different activities in the similar activities area
                    $ctr3 = $ctr;
                    
                    foreach($oth_resultsTP AS $other_result){
                        // print($ctr);
                        // echo("ctr: ".$ctr."ctr3: ".$ctr3." ");
                        // skips over the activity were already on
                        if ($ctr == $ctr3){
                            // echo("our counter is: ".$ctr." and our ctr3 is: ".$ctr3." ");
                            $ctr = $ctr+1;
                            // echo("ctr3 update: ".$ctr3);
                        }
                        $id = $_SESSION['id'.$ctr];
                        $name = $_SESSION['event_name'.$ctr];
                        $blurb = $_SESSION['activity_blurb'.$ctr];
                        $price = $_SESSION['pricep'.$ctr];
                        $img1 = $_SESSION['img1'.$ctr];
                        $altText1 = $_SESSION['alt_text_img1'.$ctr];
                        $address = $_SESSION['address'.$ctr];
                        $url = $_SESSION['url'.$ctr];
                        $meta = $_SESSION['meta_description'.$ctr];
                        $map = $_SESSION['map_img'.$ctr];
                        $map_link = $_SESSION['map_link'.$ctr];
                        $themePark = $_SESSION['isThemePark'.$ctr];
                        $foodDrink = $_SESSION['isFoodDrink'.$ctr];
                        $local = $_SESSION['isLocal'.$ctr];
                        
                        // print("id: ".$id);

                        // print("ctr: ".$ctr);

                        if ($id != $ctr){
                            $ctr = $id;
                            // print("ctr update:  ".$ctr);
                        }
                        
                        if ($cardCount <= 6){
                            print(
                                "<a class='card' id='cardA$ctr' title='$name' href='activity.php?count=$ctr&id=$id'>
                                <img class='card-image' src='img/images/$img1' alt='$altText1'>
                                <h4>$name</h4>
                                <p class='captions'>From $".$price.(($other_result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($other_result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($other_result["isLocal"] == 'Y') ? " | Local Activity" : "").(($other_result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($other_result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($other_result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($other_result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($other_result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                                </a>&nbsp;"
                            );
                        }
                        $ctr = $ctr+1;
                        $ctr3 = $ctr3+1;
                        $cardCount = $cardCount+1;
                    }
                    // $ctr3 = 0;
                    // print("ctr: ".$ctr);
                }

                if ($foodDrink == 'Y'){
                    $ctr3 = $ctr;

                    foreach($oth_resultsRes AS $other_result){
                        // skips over the activity were already on
                        if ($ctr == $ctr3){
                            $ctr = $ctr+1;
                        }
                        $id = $_SESSION['id'.$ctr];
                        $name = $_SESSION['event_name'.$ctr];
                        $blurb = $_SESSION['activity_blurb'.$ctr];
                        $price = $_SESSION['price'.$ctr];
                        $img1 = $_SESSION['img1'.$ctr];
                        $altText1 = $_SESSION['alt_text_img1'.$ctr];
                        $address = $_SESSION['address'.$ctr];
                        $url = $_SESSION['url'.$ctr];
                        $meta = $_SESSION['meta_description'.$ctr];
                        $map = $_SESSION['map_img'.$ctr];
                        $map_link = $_SESSION['map_link'.$ctr];
                        $themePark = $_SESSION['isThemePark'.$ctr];
                        $foodDrink = $_SESSION['isFoodDrink'.$ctr];
                        $local = $_SESSION['isLocal'.$ctr];
                        
                        // print("id: ".$id);

                        // print("ctr: ".$ctr);

                        if ($id != $ctr){
                            $ctr = $id;
                            // print("ctr update:  ".$ctr);
                        }

                        print(
                            "<a class='card' id='cardA$ctr' title='$name' href='activity.php?count=$ctr&id=$id'>
                            <img class='card-image' src='img/images/$img1' alt='$altText1'>
                            <h4>$name</h4>
                            <p class='captions'>From $".$price.(($other_result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($other_result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($other_result["isLocal"] == 'Y') ? " | Local Activity" : "").(($other_result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($other_result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($other_result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($other_result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($other_result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                            </a>&nbsp;"
                        );
                        $ctr = $ctr+1;
                        $ctr3 = $ctr3+1;
                    }
                    // print("ctr: ".$ctr);
                    // $ctr3 = 0;
                }

                if ($local == 'Y'){
                    $ctr3 = $ctr;

                    foreach($oth_resultsLoc AS $other_result){
                        // print($ctr);
                        // trying to skip the event of the current page we are on to reccommend other activities
                        if ($ctr == $ctr3){
                            $ctr = $ctr+1;
                        }

                        $id = $_SESSION['id'.$ctr];
                        $name = $_SESSION['event_name'.$ctr];
                        $blurb = $_SESSION['activity_blurb'.$ctr];
                        $price = $_SESSION['price'.$ctr];
                        $img1 = $_SESSION['img1'.$ctr];
                        $altText1 = $_SESSION['alt_text_img1'.$ctr];
                        $address = $_SESSION['address'.$ctr];
                        $url = $_SESSION['url'.$ctr];
                        $meta = $_SESSION['meta_description'.$ctr];
                        $map = $_SESSION['map_img'.$ctr];
                        $map_link = $_SESSION['map_link'.$ctr];
                        $themePark = $_SESSION['isThemePark'.$ctr];
                        $foodDrink = $_SESSION['isFoodDrink'.$ctr];
                        $local = $_SESSION['isLocal'.$ctr];
                    
                        // print("id: ".$id);

                        // print("ctr: ".$ctr);

                        if ($id != $ctr){
                            $ctr = $id;
                            // print("ctr update:  ".$ctr);
                        }

                        print(
                            "<a class='card' id='cardA$ctr' title='$name' href='activity.php?count=$ctr&id=$id'>
                            <img class='card-image' src='img/images/$img1' alt='$altText1'>
                            <h4>$name</h4>
                            <p class='captions'>From $".$price.(($other_result["isFamily"] == 'Y') ? " | Family-Friendly" : "").(($other_result["isRainy"] == 'Y') ? " | Rainy Evet" : "").(($other_result["isLocal"] == 'Y') ? " | Local Activity" : "").(($other_result["isGoodValue"] == 'Y') ? " | Good Value" : "").(($other_result["isFoodDrink"] == 'Y') ? " | Food & Drink" : "").(($other_result["isOutdoorActive"] == 'Y') ? " | Outdoor Activity" : "").(($other_result["isLiveEvent"] == 'Y') ? " | Live Event" : "").(($other_result["isArts"] == 'Y') ? " | Art, Museum, and Culture" : "")."</p>
                            </a>&nbsp;"
                        );
                        $ctr = $ctr+1;
                        $ctr3 = $ctr3+1;
                    }
                    // $ctr3 = 0;
                    // print("ctr: ".$ctr);
                }
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


    <!-- THIRD AD -->
    <article class="adleaderboardTwo">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>

</section></section>