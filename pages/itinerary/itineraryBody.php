<?php
  //  if(isset($_SESSION['user'])){

        
?>
<section class="main-content">

<?php
    // print($_SESSION['user']['id']);
    // print("hello");
?>

<section class="half-content-1">
    <h2 class="itinerary-header">Selected Content</h2>
    <div class="container-itin">
        <p class="draggable" draggable="true">
            1
        </p>
        <p class="draggable" draggable="true">
            1
        </p>
    </div>
</section>

<section class="half-content-2">

    <h2 class="itinerary-header">Itinerary Builder</h2>
    <div id="saveToPDF">
        <h3>Day 1</h3>
        <div class="container-itin">
            
        </div>
        <h3>Day 2</h3>
        <div class="container-itin">
            
        </div>
        <h3>Day 3</h3>
        <div class="container-itin">
            
        </div>
        <h3>Day 4</h3>
        <div class="container-itin">
           
        </div>
        <h3>Day 5</h3>
        <div class="container-itin">
            
        </div>
    </div> 
    <button id="saveAsPDF" class="save-itinerary">Save Itinerary as PDF</button>
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
