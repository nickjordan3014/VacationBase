<section class="main-content">
<section class="inner-content">

<!-- HOMEPAGE HEADER -->
    <section class="logo-area">
        <img src="img/icons-VB/VacationBase_Logo.png" alt="Vacation Base Logo" class="logo">
        <form action="search.php" class="logo-area" method="get">     
                <label for="home_search" class="logo-item">Ah, <i>Orlando</i>! Looking for anything in particular? </label>
                <input type="text" name="query" id="query" value="Theme Parks" class="searchbox logo-item">
                <button class="nobtndecor logo-item">
                    <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                </button>
        </form>
    </section>
    <hr class="hsline">

<!-- HOMEPAGE CONTENT -->
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

</section>
</section>