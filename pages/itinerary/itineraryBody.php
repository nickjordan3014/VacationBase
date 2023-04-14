<?php
  //  if(isset($_SESSION['user'])){

        
?>
<section class="main-content">
    <section class="inner-content">
        <h1 class="itinerary-header">Itinerary Builder</h1>
        <p class="itinerary-header">This feature is not available to use on touch screen devices. Please use a device with a mouse to proceed.</p>
    </section>
<?php
    // print($_SESSION['user']['id']);
    // print("hello");
?>

<section class="half-content-1">
    <h2 class="itinerary-header">Orlando Florida Activities</h2>
    <div class="container-itin">
        
        <?php
            // here we build our activity names with our sql return
            foreach ($all_names AS $this_name){
                print('<p class="draggable" draggable="true"> ' . $this_name['event_name'] . ' </p>');
            }
        ?>

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
