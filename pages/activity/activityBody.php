<section class="main-content"><section class="inner-content">
 
    <br><br>

    <div class="margActivity">

        <!-- ARTICLE HEADER -->
        <section class="activity-title">
            <?php
                print("<h1>$name</h1>");
                // print("<p>debug! 1st row: '$first_suggestion', 2nd row: '$second_suggestion'</p>");
            ?>
        </section>

        <!-- IMAGE SECTION -->
        <section class="image-sec">
            <?php
                // temp patch to allow us to access images until we rework how we identify and call them
                // $temp_image = explode('/', $img1);
                // $card_image = ($temp_image[0] . "/image1.jpg");

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
                        // if the event type is not a theme park and the price is greater than 0
                        else if ((intval($price) > 0) && ($themePark != 'Y')){
                            print("<p>Prices start at <b>$$price</b><p>");
                        }
                        // else we want this to display if the event is a theme park and the price is not clear
                        else if (($price == '$' || $price == '$$' || $price == '$$$' || $price == '$$$$')){
                            print("<p>Starting price varies depending on purchase(s)</p>");
                        }
                    ?>
                </div>
                <!-- <div class="actButton">
                    <?php
                        if(isset($_SESSION['user'])){
                    ?>
                            <button type="submit" class="addACTButton activityButton" name="addtoitin_btn"><b>Add To Itinerary</b></button>
                    <?php
                        if (isset($_POST['addtoitin_btn'])){
                            // print("button clicked");
                        }
                    
                        }
                        else {
                    ?>
                            <button type="submit" class="addACTButton activityButton" name="addtoitin_btn" onclick="location.href = 'login.php';"><b>Add To Itinerary</b></button>
                    <?php    
                        }
                    ?>
                </div> -->
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


    <!-- SIMILAR ACTIVITES NEARBY -->
    <?php
        
        $row_count = 0;
        $card_count = 0;
        // takes $row_objects multidimensional array and builds rows and cards from its data, including query results
        foreach ($row_objects AS $row_object){ 

            // plugs in data for the row into html as needed to build a row's html dynamically up to its cards
            $row_start = _build_row_start($row_object["name"], $row_object["title"], $row_object["link"], $row_object["href"], $row_count);
            print("$row_start");

            foreach($row_object["results"] AS $result){
                // code for each card
                $this_card = _build_card($result, $card_count);
                print("$this_card");
                $card_count++;
            }

            // code to complete each row
            $row_end = _build_row_end($row_object["name"], $row_count);
            print("$row_end");
            $row_count++;
        }
    ?>

</section></section>