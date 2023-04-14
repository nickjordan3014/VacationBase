<?php 
if(isset($_GET['query'])){
    $see = $_GET['query']; 
}
?>

<section class="main-content">
    <!-- SEARCH PAGE HEADER -->
    <section class="search-content">
        <section class="logo-area">
            <form action="search.php" method="get" id="mainSearchForm" class="logo-item">     
                    <label for="search" class="logo-item">Show me... </label>
                    <input type="text" name="query" class="searchpagebox logo-item" value='<?php print($search_query)?>'>
                    <button class="nobtndecor" type="submit">
                        <img src="img/icons-VB/Search_Icon.png" alt="Search Icon" class="searchico">
                    </button>
            </form>
        </section>
        <button class="mobile-filter-button" id="filterBtn">Filters</button>
        <hr class="hsline">

        <!-- SEARCH RESULT CARDS -->
        <?php 
        $card_count = 0;
    
            // $query_results is an object that houses all our sql results, with each $search_result being a row therein
            if ($query_results) {
                foreach ($query_results AS $search_result){

                    // performs validation against filtering
                    $passed_filter = _run_filter_validation($search_result);
                    if ($passed_filter) {
                        // builds search card that matches query and filters
                        $this_card = _build_search_card($search_result, $card_count);
                        print("$this_card");
                        $card_count++;
                    }

                }
            }

            // message for if a search hasn't been performed
            else {
                print("<p style='text-align: center;'> You haven't searched anything yet. Please type a search above </p>");
            }
        ?>
    </section>

    <!-- FILTERING -->
    <section class="filter-content" id="filter-toggle">
        <form name="mainFilteringForm" method="get" class="filter-form">
            <input name="query" style="display: none;" value='<?php print($search_query)?>'>
            <section class="filter-segment">
                <h4>Days Open</h4>
                <hr class="tightline">
                <label for="daysOpen" class="inline">
                    Sun
                    <input type="checkbox" name="sun">
                </label>
                <label for="daysOpen" class="inline">
                    Mon
                    <input type="checkbox" name="mon">
                </label>
                <label for="daysOpen" class="inline">
                    Tue
                    <input type="checkbox" name="tue">
                </label>
                <label for="daysOpen" class="inline">
                    Wed
                    <input type="checkbox" name="wed">
                </label>
                <label for="daysOpen" class="inline">
                    Thur
                    <input type="checkbox" name="thur">
                </label>
                <label for="daysOpen" class="inline">
                    Fri
                    <input type="checkbox" name="fri">
                </label>
                <label for="daysOpen" class="inline">
                    Sat
                    <input type="checkbox" name="sat">
                </label>
            </section>

            <section class="filter-segment">
                <h4>Budget</h4>
                <hr class="tightline">
                <label for="budget" class="inline">Max per-person cost: </label>
                <input type="text" name="budget" placeholder="$" class="filter-text inline">
            </section>

            <section class="filter-segment">
                <h4>Age Requirement</h4>
                <hr class="tightline">
                <label for="all" class="inline">All<input type="radio" name="age"></label>
                <label for="13" class="inline">13+<input type="radio" name="age"></label>
                <label for="18" class="inline">18+<input type="radio" name="age"></label>
                <label for="21" class="inline">21+<input type="radio" name="age"></label>
            </section>

            <section class="filter-segment">
                <h4>Great For...</h4>
                <hr class="tightline">
                <label for="storm" class="filter-label"><input type="checkbox" name="weather" class="inline list"> Stormy Weather</label>
                <label for="fam" class="filter-label"><input type="checkbox" name="family" class="inline list"> Families</label>
                <label for="value" class="filter-label"><input type="checkbox" name="value" class="inline list"> Awesome Value</label>
                <label for="local" class="filter-label"><input type="checkbox" name="local" class="inline list"> Living like a Local</label>
            </section>
            <section>
                <button type="submit"> Filter Results </button>
            </section>
        </form>
    </section>
</section>