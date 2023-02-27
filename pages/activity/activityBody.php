<section class="main-content"><section class="inner-content">
    <!-- PAGE TOP AD -->
    <article class="adleaderboard">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>
 
    <div class="margActivity">
        <!-- ARTICLE HEADER -->
        <section class="activity-title">
            <?php
                $ctr = $_GET['count'];

                // Session variables
                $id = $_SESSION['id'][$ctr];
                $name = $_SESSION['event_name'][$ctr];
                $price = $_SESSION['price'][$ctr];
                $img1 = $_SESSION['img1'][$ctr];
                $altText1 = $_SESSION['alt_text_img1'][$ctr];
                $address = $_SESSION['address'][$ctr];
                $url = $_SESSION['url'][$ctr];
                $meta = $_SESSION['meta_description'][$ctr];
                $map = $_SESSION['map_img'];
                $map_link = $_SESSION['map_link'];


                echo("<h1>$name</h1>");
            ?>
        </section>

        <!-- IMAGE SECTION -->
        <section class="image-sec">
            <?php
                echo("<img src='img/images/$img1' class='mapSize' alt='$altText1'>")
            ?>
        </section>

        <!-- PRICE AND BUTTON SECTION -->
        <section>
            <div class="price-click">
                <div class="priceOf">
                    <?php
                         echo("<p>Adult tickets start at <b>$$price</b><p>");
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
                            echo("$meta<br><br>");

                            if ($ctr == 0){
                        ?>
                        
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Main Street USA</a> is the first land visitors encounter as they enter the park, and it is designed to resemble a typical small American town from the turn of the 20th century.
                            Visitors can explore this land and take in the sights and sounds of a bygone era, including the iconic Cinderella Castle, which serves as the centerpiece of the park. 
                            <br>
                            <br>
                                        
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Adventureland </a>is the next land visitors encounter, and it is designed to transport them to exotic lands such as the Caribbean, Africa, and Asia. Visitors can explore this land and experience attractions such as Pirates of the Caribbean, a classic boat ride through a pirate-filled Caribbean Island, and the Jungle Cruise, a boat ride through the Amazon rainforest. <br><br>
                            
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Frontierland</a> is a western-themed land that transports visitors to the American Old West. Attractions here include Big Thunder Mountain Railroad, a roller coaster that takes visitors on a wild ride through a western mining town, as well as Frontierland Riverboat Landing, a riverboat ride on the Liberty Belle that offers views of Frontierland and surrounding lands. <br><br>
                            
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Liberty Square</a> is a colonial-themed land that recreates the atmosphere of colonial America and celebrates the birth of the United States. Visitors can explore this land and take in attractions such as the Hall of Presidents, an audio-animatronic show that features all of the U.S. presidents, and the Haunted Mansion, a spooky tour through a haunted house.<br><br>
                            
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Fantasyland</a> is the largest of the seven lands, and it is designed to transport visitors to the world of classic Disney fairytales. Attractions here include It's a Small World, a boat ride through a world filled with singing animatronics, and Peter Pan's Flight, a ride that takes visitors on a magical flight over London.<br><br>
                            
                            <a href="#" style="color: black;font-weight:bold;text-decoration:none">Tomorrowland</a> is a futuristic-themed land that takes visitors to a world of innovation and technology. Attractions here include Space Mountain, a roller coaster that takes visitors on a high-speed journey through outer space, and Buzz Lightyear's Space Ranger Spin, an interactive ride where visitors help Buzz Lightyear save the universe.<br><br>
                            
                            Finally,<a href="#" style="color: black;font-weight:bold;text-decoration:none"> Mickey's Toontown Fair</a> is a cartoon-themed land that takes visitors to the world of classic Disney cartoon characters. Visitors can explore this land and take in attractions such as Mickey's Country House, a tour through Mickey Mouse's home, and Minnie's House, a tour through Minnie Mouse's home.<br><br>
                            In addition to the seven themed lands, the Magic Kingdom is home to many parades, shows, and other live performances. The nightly fireworks show, "Happily Ever After," is a highlight of any visit to the park, and it is a stunning display of pyrotechnics that is set against the backdrop of Cinderella Castle.<br><br>
                            Disney's Magic Kingdom is a magical and enchanting theme park that is sure to captivate visitors of all ages. Whether you're a fan of classic Disney fairytales, futuristic technology, or anything in between, there's something for everyone at this iconic park.<br><br>

                        <?php
                            }
                            else if ($ctr == 1){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 2){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 3){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 4){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 5){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 6){
                                echo("Insert content about $name here!<br><br>");
                            }
                            else if ($ctr == 7){
                                echo("Insert content about $name here!<br><br>");
                            }
                        ?>
                </p>
        </section>

        <!-- WEBSITE LINK -->
        <section>
            <p class="actInfoThree">
                <?php
                    echo("<b>Their website:</b> <a href='$url' target='_blank' class='actWebLink'>$url</a>");
                ?>
            </p>
        </section>

        <!-- MAPPING SECTION -->
        <section>
            <?php
            echo("<div>
                <a href='$map_link[$ctr]' target='_blank'>
                    <img src='img/images/mggooglemap.png' class='mapSize' alt='$name Map'>
                </a>
            </div>");
            ?>
            <p class="actInfoThree">
                <?php
                    echo("<b>Located At:</b> <a href='$address' target='_blank' class='actWebLink'>$address</a>");
                ?>
            </p>
        </section>
    </div>
    <br>
    <br>
    <!-- AD AGAIN -->
    <article class="adleaderboardTwo">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>

    <!-- <div class="margActivity"> -->
    <!-- OTHER ACTIVITIES -->
    <!-- <div class="margActivity"> -->
        <!-- SIMILAR ACTIVITES NEARBY -->
        <section>
            <p class="recCapt">
                Similar Activities Around Orlando 
            </p>
        </section>
        

        
        <section class="card-row carouselInline">
            <button class="nobtndecor" id="autoLeft0">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="carouselArrow"> <!--Using add icon as a placeholder for css purposes-->
            </button>
            <!--Cards-->
            <section class="carousel" id="scroll0">
                <div class="card" id="tpC0"> <!--Naming Convention for cards tpC0 = theme park card 0-->
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 1</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC1">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 2</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC2">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 3</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC3">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 4</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC4">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 5</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC5">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 6</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC6">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 7</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>

                <div class="card" id="tpC7">
                    <a class= "actPage" href="activity.php">
                        <div class="clickCard">
                            <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                            <p>Magic Kingdom 8</p> <!--Will worry about text styling later-->
                        </div>
                    </a>
                </div>
            </section>
            <button class="nobtndecor" id="autoRight0">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="carouselArrow"> <!--Using add icon as a placeholder for css purposes-->
            </button>
        </section>


        <!-- RECOMMENDED BLOGS AND ARTICLES -->
        <section>
            <p class="recCapt">
                Orlando Blogs and Articles
            </p>
        </section>



        <section class="card-row carouselInline">
            <button class="nobtndecor" id="autoLeft1">
                <img src="img/icons-VB/left_arrow.png" alt="Arrow" class="carouselArrow"> <!--Using add icon as a placeholder for css purposes-->
            </button>
            <!--Cards-->
            <section class="carousel" id="scroll1">
                <div class="card" id="bC0"> <!--Naming Convention for cards bC0 = blog card 0-->
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 1</p> <!--Will worry about text styling later-->
                </div>
                <div class="card" id="bC1">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 2</p>
                </div>
                <div class="card" id="bC2">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 3</p>
                </div>
                <div class="card" id="bC3">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 4</p>
                </div>
                <div class="card" id="bC4">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 5</p>
                </div>
                <div class="card" id="bC5">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 6</p>
                </div>
                <div class="card" id="bC6">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 7</p>
                </div>
                <div class="card" id="bC7">
                    <img src="img/images/magickingdom.jpeg" class="image" alt="Magic Kingdom Castle">
                    <p>Magic Kingdom 8</p>
                </div>
            </section>
            <button class="nobtndecor" id="autoRight1">
                <img src="img/icons-VB/right_arrow.png" alt="Arrow" class="carouselArrow"> <!--Using add icon as a placeholder for css purposes-->
            </button>
        </section>
    <!-- </div> -->

    

    <!-- THIRD AD -->
    <article class="adleaderboardTwo">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>

</section></section>