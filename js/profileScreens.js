function openItineraries(sectionIds) {
    //Removing invisible class from itineraries
    let itinOne = document.getElementById(sectionIds[0]);
    itinOne.classList.remove("invisible");

    let itinTwo = document.getElementById(sectionIds[1]);
    itinTwo.classList.remove("invisible");

    //Adding class to other sections
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.add("invisible");

    let abt = document.getElementById(sectionIds[3]);
    abt.classList.add("invisible");

    let rv = document.getElementById(sectionIds[4]);
    rv.classList.add("invisible");
}

function openAccount(sectionIds) {
    //Removing invisible class from account
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.remove("invisible");

    //Adding class to other sections
    let abt = document.getElementById(sectionIds[3]);
    abt.classList.add("invisible");

    let rv = document.getElementById(sectionIds[4]);
    rv.classList.add("invisible");

    let itinOne = document.getElementById(sectionIds[0]);
    itinOne.classList.add("invisible");

    let itinTwo = document.getElementById(sectionIds[1]);
    itinTwo.classList.add("invisible");
}

function openAbout(sectionIds) {
    //Removing invisible class from about
    let abt = document.getElementById(sectionIds[3]);
    abt.classList.remove("invisible");

    //Adding class to other sections
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.add("invisible");

    let rv = document.getElementById(sectionIds[4]);
    rv.classList.add("invisible");

    let itinOne = document.getElementById(sectionIds[0]);
    itinOne.classList.add("invisible");

    let itinTwo = document.getElementById(sectionIds[1]);
    itinTwo.classList.add("invisible");
}

function openReview(sectionIds) {
    //Removing invisible class from itineraries
    let rv = document.getElementById(sectionIds[4]);
    rv.classList.remove("invisible");

    //Adding class to other sections
    let acc = document.getElementById(sectionIds[2]);
    acc.classList.add("invisible");

    let abt = document.getElementById(sectionIds[3]);
    abt.classList.add("invisible");

    let itinOne = document.getElementById(sectionIds[0]);
    itinOne.classList.add("invisible");

    let itinTwo = document.getElementById(sectionIds[1]);
    itinTwo.classList.add("invisible");
}

function init() { //initiates function
    
    const sectionIds = [ //ids for each section
        "itinerary-right",
        "itinerary-left",
        "account-sec",
        "about-us-sec",
        "rate-review-sec"
    ];

    const linkIds = [
        "itineraries-link",
        "account-link",
        "about-link",
        "rate-link"
    ]

    document.getElementById(linkIds[0]).onclick = function() { //itineraries
        openItineraries(sectionIds);
    }
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