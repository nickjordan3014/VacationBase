<?php
  //  if(isset($_SESSION['user'])){

        
?>
<section class="main-content">
<!-- 
TODOS

 - Pass added activities into Half Content 1 Section as Draggables

 - Users will then be able to drag activities into half content 2 in the 5 Premade day containers

 - Save / Submit Button will save Itinerary into user itineraries where they can access on home page

 - May want to add a mobile view that says must use computer to access this feature or figure out how js touch events work
-->
<?php
    // print($_SESSION['user']['id']);
    // print("hello");
?>

<section class="half-content-1">
    <h2 class="itinerary-header">Selected Content</h2>
    <div class="container-itin">
        <p class="draggable" draggable="true">1</p>
        <p class="draggable" draggable="true">2</p>
    </div>
</section>
<section class="half-content-2">
    <h2 class="itinerary-header">Itinerary Builder</h2>
    <h3>Day 1</h3>
    <div class="container-itin">
        <p class="draggable" draggable="true">3</p>
        <p class="draggable" draggable="true">4</p>
    </div>
    <h3>Day 2</h3>
    <div class="container-itin">
        <p class="draggable" draggable="true">5</p>
        <p class="draggable" draggable="true">6</p>
    </div>
    <h3>Day 3</h3>
    <div class="container-itin">
        <p class="draggable" draggable="true">7</p>
        <p class="draggable" draggable="true">8</p>
    </div>
    <h3>Day 4</h3>
    <div class="container-itin">
        <p class="draggable" draggable="true">9</p>
        <p class="draggable" draggable="true">10</p>
    </div>
    <h3>Day 5</h3>
    <div class="container-itin">
        <p class="draggable" draggable="true">11</p>
        <p class="draggable" draggable="true">12</p>
    </div>
</section>

<?php
    // print("null stores: ".$null);
?>

</section>
<?php
   // } else{
        //header("location: login.php");
    //}
?>
