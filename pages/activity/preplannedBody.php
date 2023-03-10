<section class="main-content"><section class="inner-content">
    <!-- PAGE TOP AD -->
    <article class="adleaderboard">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>
 
    <div class="margActivity">
        <?php
            $count = $_GET['preplanned'];
            if (intval($count) == 1){
        ?>
            <!-- ARTICLE HEADER -->
            <section class="activity-title">
                <h1>3 Days of Thrills: Theme Parks in Orlando</h1>
            </section>

            <!-- IMAGE SECTION -->
            <section class="image-sec">
                <img src="img/images/preplanned/threedayTP.jpg" class="mapSize" alt="Universl Studios globe with people walking around">   
            </section>

            <!-- PRICE AND BUTTON SECTION -->
            <section>
                <div class="price-click">
                    
                    <div class="priceOf">
                        <p>Preplanned Adult Ticket Package start at <b>$317.99</b><p>
                    </div>
                    <div class="actButton"> 
                        <button class="addACTButton activityButton" onclick="location.href = 'itinerary.php';"><b>Add Preplanned Itinerary</b></button>
                    </div>
                </div>
            </section>

            <br>
            <br>
            
            <!-- ACTIVITY BLURB -->
            <section>
                    <p class="actInfoTwo">
                        Orlando, Florida is the theme park capital of the world and is home to some of the most popular attractions in the world, including Magic Kingdom, Universal Studios, and SeaWorld. These three parks offer something for everyone, from heart-pumping thrill rides to enchanting shows and animal encounters.
                        <br>
                        <br>
                        In this itinerary, you'll be exploring what each park has to offer. Get ready to be transported into a world of magic, excitement, and adventure!
                        <br>
                        <br>
                        <h2>Day 1: Magic Kingdom Park at Walt Disney World Resort</h2>
                        <ul>
                            <br><li><b>Morning:</b> Start the day by visiting Magic Kingdom Park, one of the four theme parks at Walt Disney World Resort. Arrive early to take advantage of the shorter lines and get a chance to see the iconic Cinderella's Castle. This castle is the centerpiece of the park and is an impressive sight to see. While you're in the area, be sure to grab a photo in front of the castle, as it is one of the most iconic and recognizable images of Disney World.</li>
                            <br><li><b>Afternoon:</b> Have lunch at one of the many restaurants in the park, like Tony's Town Square Restaurant or The Crystal Palace. These restaurants offer a variety of menu options, from classic American fare to international cuisine, so you're sure to find something that you'll enjoy. After lunch, spend the afternoon exploring Fantasyland and Tomorrowland, two of the park's themed lands. Ride some of the classic attractions like "It's a Small World" and "Space Mountain." These attractions offer a great opportunity to relax and enjoy some of the classic Disney experiences that have been popular for decades.</li>
                            <br><li><b>Evening:</b> End the day by watching the nightly fireworks show over Cinderella's Castle. This is one of the highlights of any trip to Disney World, and the show is truly breathtaking. The display features a mix of music, lights, and pyrotechnics, and it's a great way to cap off your first day at the park. After the show, visit some of the shops on Main Street USA to pick up souvenirs or relax with a treat from one of the park's ice cream shops. The shops on Main Street USA are designed to look like a traditional small-town main street, and they offer a great opportunity to do some shopping or grab a snack.</li>
                        </ul>
                        <br>
                        <br>
                        <h2>Day 2: Universal Studios Florida</h2>
                        <ul>
                            <br><li><b>Morning:</b> Start the day by visiting Universal Studios Florida, one of the two theme parks at Universal Orlando Resort. Arrive early to take advantage of the shorter lines and see some of the park's biggest attractions, like "The Wizarding World of Harry Potter" and "The Simpsons Ride." The Wizarding World of Harry Potter is a must-visit for fans of the series, and it offers a chance to explore the world of Harry Potter in a fully immersive and interactive environment. The Simpsons Ride is a classic simulation ride that takes you on a wild and wacky adventure through the world of The Simpsons.</li>
                            <br><li><b>Afternoon:</b> Have lunch at one of the park's restaurants, like Finnegan's Bar & Grill or Louie's Italian Restaurant. These restaurants offer a variety of menu options, from classic American fare to international cuisine, so you're sure to find something that you'll enjoy. After lunch, continue exploring the park and experiencing some of the other attractions, like "Revenge of the Mummy" and "Shrek 4-D." Revenge of the Mummy is a thrilling roller coaster that takes you through the world of ancient Egypt, while Shrek 4-D is a 4D simulation ride that takes you on an adventure with the lovable green ogre</li>
                            <br><li><b>Evening:</b> End the day by attending Universal's Cinematic Spectacular show, a nighttime display of lights, music, and special effects that celebrates some of the biggest movies and franchises from Universal Studios. This show features a mix of projections, lasers, and pyrotechnics, and it's a great way to cap off your day at the park. The show takes place in the park's central lagoon, and it offers a great opportunity to sit back, relax, and enjoy the sights and sounds of Universal Studios.</li>
                        </ul>
                        <br>
                        <br>
                        <h2>Day 3: SeaWorld Orlando</h2>
                        <ul>
                            <br><li><b>Morning:</b> Start the day by visiting SeaWorld Orlando, one of the premier marine life theme parks in the world. Arrive early to take advantage of the shorter lines and see some of the park's biggest attractions, like "Manta" and "Kraken Unleashed." Manta is a roller coaster that takes you on a thrilling journey through the world of manta rays, while Kraken Unleashed is a virtual reality roller coaster that takes you on an epic undersea adventure.</li>
                            <br><li><b>Afternoon:</b> Have lunch at one of the park's restaurants, like Sharks Underwater Grill or The Flamecraft Bar. These restaurants offer a variety of menu options, from classic American fare to international cuisine, so you're sure to find something that you'll enjoy. After lunch, spend the afternoon exploring the park's many animal exhibits, like the penguin exhibit or the sea lion exhibit. These exhibits offer a great opportunity to learn about and interact with some of the amazing creatures that call the ocean their home.</li>
                            <br><li><b>Evening:</b> End the day by attending the park's nightly "Shamu's Celebration: Light Up The Night" show. This show is a high-energy display of lights, music, and acrobatics that celebrates the magnificent killer whales that call SeaWorld home. The show features a talented cast of trainers and performers, as well as the park's signature killer whale, Shamu. The show is a great way to cap off your day at SeaWorld and is sure to be a highlight of your trip to Orlando.</li>
                        </ul>
                        <br>
                        <br>
                    </p>
                    <br>
                    <br>
                    <p class="actInfoTwo">
                        This preplanned itinerary offers a comprehensive and exciting exploration of some of the best theme parks in Orlando, it is a great opportunity to create lasting memories. Look no further and add this preplanned itinerary to your itineraries!
                    </p>
                    <br>
            </section>

        <?php
            }
        ?>

        <?php
            if (intval($count) == 2){
        ?>
             <!-- ARTICLE HEADER -->
             <section class="activity-title">
                <h1>Explore 4 Days of Orlando's Cultural Gems</h1>
            </section>

            <!-- IMAGE SECTION -->
            <section class="image-sec">
                <img src="img/images/preplanned/museum.jpg" class="mapSize" alt="People viewing art at a museum">   
            </section>

            <!-- PRICE AND BUTTON SECTION -->
            <section>
                <div class="price-click">
                    
                    <div class="priceOf">
                        <p>Preplanned Adult Ticket Package start at <b>$</b><p>
                    </div>
                    <div class="actButton"> 
                        <button class="addACTButton activityButton" onclick="location.href = 'itinerary.php';"><b>Add Preplanned Itinerary</b></button>
                    </div>
                </div>
            </section>

            
            <br>
            <br>
            <!-- ACTIVITY BLURB -->
            <section>
                <p class="actInfoTwo">
                    Welcome to Orlando, the city of magic, adventure, and culture! This itinerary is tailored for travelers who want 
                    to explore the artistic and cultural side of Orlando. From world-renowned museums and galleries to quirky and 
                    entertaining exhibits, Orlando has something for everyone. Over the course of four days, you'll explore the city's 
                    rich cultural offerings, visit stunning gardens, take in a performance or two, and learn about the fascinating world 
                    of space exploration. And of course, you'll also have time to enjoy the local food scene and unique attractions 
                    that make Orlando one of the most exciting destinations in the world. Let's dive in and discover all that Orlando 
                    has to offer!
                    <br>
                    <br>
                    <h2>Day 1:</h2>
                    <ul>
                        <br><li>
                            <b>Morning:</b> Start your day with a visit to the Orlando Science Center, where you can explore the many interactive 
                            exhibits and learn about science, technology, engineering, and math (STEM) subjects. Be sure to check the schedule 
                            for any special exhibits or events that may be happening during your visit.
                        </li>
                        <br><li>
                            <b>Afternoon:</b> Drive about an hour east to the Kennedy Space Center Visitor Complex, where you can learn about NASA's 
                            space program and see historic rockets and spacecraft up close. Spend the afternoon exploring the exhibits and attending 
                            any shows or presentations that interest you.
                        </li>
                        <br><li>
                            <b>Evening:</b> Head back to Orlando and take a stroll around Lake Eola Park, where you can enjoy the beautiful views of the city 
                            skyline, rent a swan-shaped paddleboat, or grab a bite to eat at one of the nearby restaurants.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 2:</h2>
                    <ul>
                        <br><li>
                            <b>Morning:</b> Visit the Museum of Illusions Orlando, where you can experience mind-bending optical illusions and interactive 
                            exhibits that challenge your senses. Plan to spend about an hour and a half here.
                        </li>
                        <br><li>
                            <b>Afternoon:</b> Explore the Orlando Museum of Art, which features a diverse collection of contemporary and traditional 
                            art from around the world. Be sure to check the schedule for any special exhibitions or events that may be happening 
                            during your visit.
                        </li>
                        <br><li>
                            <b>Evening:</b> Attend a performance at the Dr. Phillips Center for the Performing Arts, which hosts a wide variety of 
                            shows and events throughout the year, including theater, dance, music, and comedy.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 3:</h2>
                    <ul>
                        <br><li>
                            <b>Morning:</b> Head to Ripley's Believe It or Not!, a quirky and entertaining museum that features bizarre artifacts and 
                            oddities from around the world. Plan to spend about two hours here.
                        </li>
                        <br><li>
                            <b>Afternoon:</b> Visit the Madame Tussauds Wax Museum, where you can see lifelike wax figures of celebrities and historical 
                            figures from the past and present. Be sure to bring your camera for some fun photo opportunities.
                        </li>
                        <br><li>
                            <b>Evening:</b> Take a stroll around the Disney Springs shopping and entertainment complex, which offers a wide variety 
                            of shops, restaurants, and entertainment options, including live music and street performers.  
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 4:</h2>
                    <ul>
                        <br><li>
                            <b>Morning:</b> Spend some time exploring the scenic Harry P. Leu Gardens, which offers beautiful gardens and a historic 
                            home to explore. Be sure to check the schedule for any guided tours or special events that may be happening during your visit.
                        </li>
                        <br><li>
                            <b>Afternoon:</b> Head to the Charles Hosmer Morse Museum of American Art, which is home to the world's largest collection 
                            of Tiffany glass, as well as other American art and decorative arts. Plan to spend about two hours here.
                        </li>
                        <br><li>
                            <b>Evening:</b> Take a walk around Winter Park's Park Avenue, which offers a charming shopping and dining district with plenty 
                            of boutiques, galleries, and restaurants to explore.
                        </li>
                    </ul>
                    <br>
                    <br>
                </p>
                <br>
                <br>
                <!-- <p class="actInfoTwo">
                </p> -->
                <br>
            </section>
        <?php
            }
        ?>

        <?php
            if (intval($count) == 3){
        ?>
            <!-- ARTICLE HEADER -->
            <section class="activity-title">
                <h1>A Week of Live Entertainment and Dining</h1>
            </section>

            <!-- IMAGE SECTION -->
            <section class="image-sec">
                <img src="img/images/preplanned/nightlife.jpg" class="mapSize" alt="People having fun at a party">   
            </section>

            <!-- PRICE AND BUTTON SECTION -->
            <section>
                <div class="price-click">
                    
                    <div class="priceOf">
                        <p>Preplanned Adult Ticket Package start at <b>$</b><p>
                    </div>
                    <div class="actButton"> 
                        <button class="addACTButton activityButton" onclick="location.href = 'itinerary.php';"><b>Add Preplanned Itinerary</b></button>
                    </div>
                </div>
            </section>

            <br>
            <br>

            <!-- ACTIVITY BLURB -->
            <section>
                <p class="actInfoTwo">
                    Welcome to Orlando, a city that comes to life after the sun goes down! This itinerary is for those looking to 
                    experience the vibrant nightlife scene that Orlando has to offer. From comedy shows to live music venues, and 
                    exciting sporting events, this itinerary has something for everyone. Along with the entertainment, we've included 
                    some of Orlando's best restaurants and local attractions that you won't want to miss. So grab your friends and get 
                    ready for a fun-filled week of evening and nighttime activities in Orlando!
                    <br>
                    <br>
                    <h2>Day 1:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> For your first night in Orlando, head to Sleuths Mystery Dinner Show for a thrilling evening of 
                            murder mystery and interactive entertainment. Enjoy a delicious dinner while you try to solve the crime!
                        </li>
                        <br><li><b>Night:</b> After the show, head to The Social for some live music and dancing. This popular venue hosts a 
                            variety of bands and performers, and the atmosphere is always lively.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 2:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> Before the show, explore the nearby Park Avenue area in Winter Park. This charming street is 
                            lined with boutique shops, cafes, and restaurants.
                        </li>
                        <br><li><b>Night:</b> Laugh the night away at Orlando Improv, a comedy club featuring both up-and-coming comedians and 
                            well-known acts. Grab dinner at one of the nearby restaurants before the show.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 3:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> Catch a game with the Orlando Magic at the Amway Center. This NBA team offers an exciting evening 
                            of basketball and entertainment.
                        </li>
                        <br><li><b>Night:</b> After the game, head to the House of Blues for some live music and a late-night meal. This iconic venue 
                            features a variety of performers and a menu of Southern-inspired cuisine.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 4:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> Enjoy dinner at one of the trendy restaurants in the Mills 50 District, such as the popular Pig Floyd's 
                            Urban Barbakoa. Then, catch a show at The Plaza Live, a historic theater that hosts a variety of concerts and performances.
                        </li>
                        <br><li><b>Night:</b> After the show, head to Ivanhoe Village for a nightcap at The Hammered Lamb, a laid-back bar with outdoor 
                            seating and a relaxed atmosphere.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 5:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> Before the show, explore the nearby Universal CityWalk, an entertainment complex with a variety of 
                            restaurants, shops, and attractions.
                        </li>
                        <br><li><b>Night:</b> Enjoy a delicious dinner at Emeril's Orlando, a restaurant owned by celebrity chef Emeril Lagasse. 
                            Then, catch a show at the Hard Rock Live, a concert venue that's hosted some of the biggest names in music.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 6:</h2>
                    <br>
                    <ul>
                        <br><li><b>Evening:</b> For your last night in Orlando, head to the bustling International Drive area. Enjoy dinner at 
                            one of the many restaurants in the area, then catch a show at one of the many entertainment venues, such as 
                            Pirate's Dinner Adventure.
                        </li>
                        <br><li><b>Night:</b> After the show, head to Pointe Orlando for a nightcap at Blue Martini, a popular lounge with a 
                            variety of live music and a chic atmosphere.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <br>
                </p>
                <br>
                <br>
                <br>
                <!-- <p class="actInfoTwo">
                </p> -->
                <br>
            </section>

        <?php
            }
        ?>

        <?php
            if (intval($count) == 4){
        ?>
            <section class="activity-title">
                <h1>3 Days of Outdoor Adventures in Orlando</h1>
            </section>

            <!-- IMAGE SECTION -->
            <section class="image-sec">
                <img src="img/images/preplanned/outside.jpg" class="mapSize" alt="A picture of trees and grass in the sunset">   
            </section>

            <!-- PRICE AND BUTTON SECTION -->
            <section>
                <div class="price-click">
                    
                    <div class="priceOf">
                        <p>Preplanned Adult Ticket Package start at <b>$</b><p>
                    </div>
                    <div class="actButton"> 
                        <button class="addACTButton activityButton" onclick="location.href = 'itinerary.php';"><b>Add Preplanned Itinerary</b></button>
                    </div>
                </div>
            </section>

            <br>
            <br>

            <!-- ACTIVITY BLURB -->
            <section>
                <p class="actInfoTwo">
                    If you're looking for an outdoor adventure in Orlando, Florida, you're in luck! With so many amazing options to choose from, 
                    it can be hard to decide which activities to include in your itinerary. Here's an itinerary that includes some of the best 
                    outdoor activities Orlando has to offer:
                    <br>
                    <br>
                    <h2>Day 1:</h2>
                    <br>
                    <ul>
                        <li>
                            <b>Morning: </b>Start your day at Wekiwa Springs State Park, located just 30 minutes north of Orlando. The park is 
                            home to a crystal-clear natural spring and offers a range of outdoor activities. Begin your morning with a leisurely 
                            hike along one of the park's many trails, or rent a kayak or canoe and explore the Wekiva River. Keep an eye out for 
                            the park's abundant wildlife, including deer, alligators, and a variety of birds.
                        </li><br>
                        <li>
                            <b>Afternoon: </b>After a morning of adventure, head to Lake Eola in downtown Orlando for a relaxing afternoon. Take a 
                            stroll around the lake's perimeter and enjoy the beautiful views of downtown Orlando. The lake is surrounded by a mile-long 
                            paved path that's perfect for jogging or walking, and there are several spots where you can sit and enjoy a picnic lunch. If 
                            you're feeling more adventurous, rent a swan-shaped paddle boat and explore the lake's waters. Alternatively, if you're a 
                            foodie, explore the nearby restaurants that offer outdoor seating and views of the lake.
                        </li><br>
                        <li>
                            <b>Evening: </b>As the sun sets, head back to the park for a magical experience. Wekiwa Springs State Park is known for its 
                            bioluminescent kayaking tours, which offer a unique and enchanting way to explore the park after dark. Bioluminescence is a 
                            natural phenomenon caused by the presence of microscopic organisms in the water that emit a blue-green glow when agitated. 
                            The effect is truly mesmerizing, and paddling through the glowing water at night is a once-in-a-lifetime experience. Book 
                            your tour in advance to secure your spot and make sure to bring a camera to capture the magic.
                        </li><br>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 2:</h2>
                    <br>
                    <ul>
                        <li>
                            <b>Morning: </b>Start your day at the Central Florida Zoo & Botanical Gardens in Sanford, which is home to over 350 animals, 
                            including giraffes, rhinos, and cheetahs. Begin by exploring the zoo's many exhibits and habitats, which range from the African 
                            savanna to the South American rainforest. Don't miss the chance to feed the giraffes or ride the train through the zoo. If you're 
                            interested in plants, make sure to check out the zoo's botanical gardens, which feature a variety of exotic and native plants.
                        </li><br>
                        <li>
                            <b>Afternoon: </b>After spending the morning at the zoo, head to downtown Sanford to explore the city's charming historic district. 
                            The district features a variety of boutiques, antique shops, and restaurants housed in beautifully restored brick buildings. Take a 
                            stroll down the district's main thoroughfare, First Street, and stop into the local shops to browse for souvenirs. Make sure to stop 
                            by the famous Hollerbach's Willow Tree Cafe for authentic German cuisine and live music.
                        </li><br>
                        <li>
                            <b>Evening: </b>Wrap up your day in Sanford by taking a sunset cruise on Lake Monroe. The lake is one of the largest in Central Florida
                            and offers stunning views of the surrounding landscape. Book a tour in advance to secure your spot and make sure to bring a camera to 
                            capture the beautiful sunset. Some tours offer snacks or drinks, making for a romantic and relaxing end to your day.
                        </li><br>
                    </ul>
                    <br>
                    <br>
                    <h2>Day 3:</h2>
                    <br>
                    <ul>
                        <li>
                            <b>Morning: </b>Start your day with a drive to Clearwater Beach, located on the west coast of Florida. The drive from Orlando takes 
                            about 2 hours, but the stunning white sand beaches and turquoise waters are well worth it. Once you arrive, head to the beach and 
                            spend the morning lounging in the sun, swimming in the clear waters, and collecting shells.
                        </li><br>
                        <li>
                            <b>Afternoon: </b>After a morning at the beach, head to the Clearwater Marine Aquarium, a marine life rescue center that is home to 
                            dolphins, sea turtles, otters, and more. The aquarium is dedicated to the rescue, rehabilitation, and release of marine animals, 
                            and offers a variety of educational exhibits and programs. Don't miss the chance to see Winter, the famous dolphin with a prosthetic 
                            tail, who starred in the movie "Dolphin Tale." You can also take a behind-the-scenes tour to learn more about the aquarium's mission 
                            and animal care.
                        </li><br>
                        <li>
                            <b>Evening: </b>Wrap up your day with a sunset dolphin watching tour. Many companies offer boat tours that take you out into the Gulf of Mexico 
                            to watch wild dolphins play in their natural habitat. The tours typically last 1-2 hours and offer stunning views of the sunset over the water. 
                            Some tours even include snacks or drinks, making for a romantic and memorable evening. After the tour, head back to the beach to enjoy a seaside 
                            dinner at one of Clearwater's many waterfront restaurants.
                        </li><br>
                    </ul>
                    <br>
                    <br>
                </p>
                <br>
                <br>
                <p class="actInfoTwo">
                    This itinerary features some of the many outdoor activities Orlando has to offer. With so many options to choose from, you're sure to find something 
                    that will make your trip unforgettable!
                </p>
                <br>
            </section>

        <?php
            }
        ?>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- THIRD AD -->
    <article class="adleaderboardTwo">
        <p>[ad here]</p> <!-- where does it go?! figure out later -->
    </article>

</section></section>