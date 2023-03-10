$( function() {
    //Variables
    let $selection = $("#selection"); 
    let $dayAmount = $("ul", "#itinerary"); //Selects all day ids of length reasons
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

    draggables( $( "li", $selection) ); //Makes list items from the selection id draggable

    for (i = 0; i <  $dayAmount.length; i++) {
        draggables( $( "li", $dayAmount[i]) ); //iterates through day ids to make all list items from day sections draggable
    }

    //Droppable back into days   **Does not work yet
    droppables($selection, $dayArray[0]);
    droppables($selection, $dayArray[1]);
    droppables($selection, $dayArray[2]);
    droppables($selection, $dayArray[3]);
    droppables($selection, $dayArray[4]);
    droppables($selection, $dayArray[5]);
    droppables($selection, $dayArray[6]);
    
    //Drop in Selection   **Functional
    dayDroppables($dayArray[0], $selection);
    dayDroppables($dayArray[1], $selection);
    dayDroppables($dayArray[2], $selection);
    dayDroppables($dayArray[3], $selection);
    dayDroppables($dayArray[4], $selection);
    dayDroppables($dayArray[5], $selection);
    dayDroppables($dayArray[6], $selection);

})

function appendToDay ( $item, selection, element ) {
    $item.detach(selection); //removes item from selection
    $item.appendTo(element); //attaches item to the correct day
    $("span", $item).removeClass("card-it"); //takes away class for card in selection area
    $("span", $item).addClass("card-it-2"); //adds class for when card is in a day div
    //Going to add position script here later, so things dont jump around everywhere
    console.log("dropped item into day");
}


function dayDroppables(element, selection) { //Fully Functional
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

function appendToSelection( $item, selection ) { //Currently Not Working
    $item.detach("#itinerary");
    $item.appendTo(selection);
    $("a", $item).removeClass("card-it-2");
    $("a", $item).addClass("card-it");
    console.log("dropped item into selection")
}

function droppables(element, day) { //Currently not working
    element.droppable({
        accept: $("li", day),
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

function draggables(element) { //Controls the behavior of items when dragged around
    element.draggable({
        revert: "invalid",
        containment: "document",
        cursor: "move",
    });
}

function itineraryString() { //Function that makes itinerary into string to move into database
    let itin = document.getElementById("itinerary").innerHTML;
    alert(itin);
}