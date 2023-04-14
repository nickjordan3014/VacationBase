//function openItineraries(sectionIds) {
//   //Removing invis class from itineraries
//   let itinOne = document.getElementById(sectionIds[0]);
//   itinOne.classList.remove("invis");
//
//   let itinTwo = document.getElementById(sectionIds[1]);
//   itinTwo.classList.remove("invis");
//
//   //Adding class to other sections
//   let acc = document.getElementById(sectionIds[2]);
//   acc.classList.add("invis");
//
//   let abt = document.getElementById(sectionIds[3]);
//   abt.classList.add("invis");
//
//   let rv = document.getElementById(sectionIds[4]);
//   rv.classList.add("invis");
//

function openAccount(sectionIds) {
    //Removing invis class from account
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.remove("invis");

    //Adding class to other sections
    let abt = document.getElementById(sectionIds[3]);
    abt.classList.add("invis");

    let rv = document.getElementById(sectionIds[4]);
    rv.classList.add("invis");

    //let itinOne = document.getElementById(sectionIds[0]);
    //itinOne.classList.add("invis");
//
    //let itinTwo = document.getElementById(sectionIds[1]);
    //itinTwo.classList.add("invis");
}

function openAbout(sectionIds) {
    //Removing invis class from about
    let abt = document.getElementById(sectionIds[3]);
    abt.classList.remove("invis");

    //Adding class to other sections
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.add("invis");

    let rv = document.getElementById(sectionIds[4]);
    rv.classList.add("invis");

    //let itinOne = document.getElementById(sectionIds[0]);
    //itinOne.classList.add("invis");
//
    //let itinTwo = document.getElementById(sectionIds[1]);
    //itinTwo.classList.add("invis");
}

function openReview(sectionIds) {
    //Removing invis class from itineraries
    let rv = document.getElementById(sectionIds[4]);
    rv.classList.remove("invis");

    //Adding class to other sections
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.add("invis");

    let abt = document.getElementById(sectionIds[3]);
    abt.classList.add("invis");

    //let itinOne = document.getElementById(sectionIds[0]);
    //itinOne.classList.add("invis");
//
    //let itinTwo = document.getElementById(sectionIds[1]);
    //itinTwo.classList.add("invis");
}

function init() { //initiates function
    
    const sectionIds = [ //ids for each section
        "itinerary-right",
        "itinerary-left",
        "account",
        "about",
        "rate-review-sec"
    ];

    const linkIds = [
        "itineraries-link",
        "account-link",
        "about-link",
        "rate-link"
    ]

    //document.getElementById(linkIds[0]).onclick = function() { //itineraries
    //    openItineraries(sectionIds);
    //}
    document.getElementById(linkIds[1]).onclick = function() { //account
        openAccount(sectionIds);
    }
    document.getElementById(linkIds[2]).onclick = function() { //about
        openAbout(sectionIds);
    }
    document.getElementById(linkIds[3]).onclick = function() { //review
        openReview(sectionIds);
    }
    
}

window.addEventListener("load", init, false);