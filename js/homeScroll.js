const data = {
    "ids" : [
        {
            "scrollid": "scroll0" 
        },
        {
            "scrollid": "scroll1"
        },
        {
            "scrollid": "scroll2"
        },
        {
            "scrollid": "scroll3"
        },
        {
            "scrollid": "scroll4"
        }
    ]
}

function scrollRight(id) { // function to move carousel over to the right
        let carousel = document.getElementById(id);
        let carouselWidth = carousel.offsetWidth - (carousel.offsetWidth * .001);
        let carouselPosition = carousel.scrollLeft;

        carousel.scrollTo({ //moves the carousel left based on current position and screen size
            left: carouselPosition = carouselPosition + carouselWidth,
            behavior: 'smooth',
        });
}

function scrollLeft(id) { // function to move carousel over to the right
    let carousel = document.getElementById(id);
    let carouselWidth = carousel.offsetWidth - (carousel.offsetWidth * .001);
    let carouselPosition = carousel.scrollLeft;

    carousel.scrollTo({ //moves the carousel left based on current position and screen size
        left: carouselPosition = carouselPosition - carouselWidth,
        behavior: 'smooth',
    });
}

function init() { //intializes the function

    document.getElementById("autoRight0").onclick = function() { //First Carousel moves right if clicked
        scrollRight(data.ids[0].scrollid);
        // makes invisible / revisible
        document.getElementById("autoRight0").className = "caro-btn-right invis";
        document.getElementById("autoLeft0").className = "caro-btn-left";
    }
    document.getElementById("autoLeft0").onclick = function() { //First Carousel moves left if clicked
        scrollLeft(data.ids[0].scrollid);
        // makes revisible / inrevisible
        document.getElementById("autoRight0").className = "caro-btn-right";
        document.getElementById("autoLeft0").className = "caro-btn-left invis";
    }

    document.getElementById("autoRight1").onclick = function() { //Second Carousel moves right if clicked
        scrollRight(data.ids[1].scrollid);
        // makes invisible / revisible
        document.getElementById("autoRight1").className = "caro-btn-right invis";
        document.getElementById("autoLeft1").className = "caro-btn-left";
    }
    document.getElementById("autoLeft1").onclick = function() { //Second Carousel moves left if clicked
        scrollLeft(data.ids[1].scrollid);
        // makes revisible / inrevisible
        document.getElementById("autoRight1").className = "caro-btn-right";
        document.getElementById("autoLeft1").className = "caro-btn-left invis";
    }

    document.getElementById("autoRight2").onclick = function() { //Third Carousel moves right if clicked
        scrollRight(data.ids[2].scrollid);
        // makes invisible / revisible
        document.getElementById("autoRight2").className = "caro-btn-right invis";
        document.getElementById("autoLeft2").className = "caro-btn-left";
    }
    document.getElementById("autoLeft2").onclick = function() { //Second Carousel moves left if clicked
        scrollLeft(data.ids[2].scrollid);
        // makes revisible / inrevisible
        document.getElementById("autoRight2").className = "caro-btn-right";
        document.getElementById("autoLeft2").className = "caro-btn-left invis";
    }

    document.getElementById("autoRight3").onclick = function() { //Forth Carousel moves right if clicked
        scrollRight(data.ids[3].scrollid);
        // makes invisible / revisible
        document.getElementById("autoRight3").className = "caro-btn-right invis";
        document.getElementById("autoLeft3").className = "caro-btn-left";
    }
    document.getElementById("autoLeft3").onclick = function() { //Second Carousel moves left if clicked
        scrollLeft(data.ids[3].scrollid);
        // makes revisible / inrevisible
        document.getElementById("autoRight3").className = "caro-btn-right";
        document.getElementById("autoLeft3").className = "caro-btn-left invis";
    }
    document.getElementById("autoRight4").onclick = function() { //Forth Carousel moves right if clicked
        scrollRight(data.ids[4].scrollid);
        // makes invisible / revisible
        document.getElementById("autoRight4").className = "caro-btn-right invis";
        document.getElementById("autoLeft4").className = "caro-btn-left";
    }
    document.getElementById("autoLeft4").onclick = function() { //Second Carousel moves left if clicked
        scrollLeft(data.ids[4].scrollid);
        // makes revisible / inrevisible
        document.getElementById("autoRight4").className = "caro-btn-right";
        document.getElementById("autoLeft4").className = "caro-btn-left invis";
    }
}

window.addEventListener('load', init, false);