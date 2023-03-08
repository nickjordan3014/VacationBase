$( function() {
    //Variables
    let $selection = $("#selection");
    let $dayAmount = $("ul", "#itinerary");
    const $dayArray = [
        $day0 = $("#day_0"),
        $day1 = $("#day_1"),
        $day2 = $("#day_2"),
        $day3 = $("#day_3"),
        $day4 = $("#day_4"),
        $day5 = $("#day_5"),
        $day6 = $("#day_6"),
    ]
    

    //Draggable functions

    draggables( $( "li", $selection) );

    for (i = 0; i <  $dayAmount.length; i++) {
        draggables( $( "li", $dayAmount[i]) );
    }

    //Droppable Functions
    droppables($selection, $dayArray)
    
    dayDroppables($dayArray[0], $selection, $dayAmount);
    dayDroppables($dayArray[1], $selection);
    dayDroppables($dayArray[2], $selection);
    dayDroppables($dayArray[3], $selection);
    dayDroppables($dayArray[4], $selection);
    dayDroppables($dayArray[5], $selection);
    dayDroppables($dayArray[6], $selection);

})

function appendToDay ( $item, selection, element ) {
    $item.detach(selection);
    $item.appendTo(element);
    $("a", $item).removeClass("card-it");
    $("a", $item).addClass("card-it-2");
    console.log("dropped item into day");
}


function dayDroppables(element, selection) {
    element.droppable({
        accept: $("li", selection),
        drop: function( event, ui ) {
            appendToDay( ui.draggable, selection, element )
            element.removeClass("highlight-box")
        }, 
        out: function (event, ui) {
            element.removeClass("highlight-box")
        },
        over: function (event, ui) {
            element.addClass("highlight-box");
        }
    })
}

function appendToSelection( $item, selection ) {
    $item.detach("#itinerary");
    $item.appendTo(selection);
    $("a", $item).removeClass("card-it-2");
    $("a", $item).addClass("card-it");
    console.log("dropped item into day");
    console.log("dropped item into selection")
}

function droppables(element, days) {
    element.droppable({
        accept: $("li", "#itinerary"),
        drop: function( event, ui ) {
            appendToSelection( ui.draggable, element )
            element.removeClass("highlight-box")
        }, 
        out: function (event, ui) {
            element.removeClass("highlight-box")
            console.log("out of the drop zone")
        },
        over: function (event, ui) {
            element.addClass("highlight-box");
            console.log("over of the drop zone")
        }
    })
}

function draggables(element) {
    element.draggable({
        revert: "invalid",
        containment: "document",
        cursor: "move",
    });
}