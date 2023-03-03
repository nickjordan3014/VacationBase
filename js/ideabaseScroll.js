const data = {
    "ids" : [
        // {
        //     "scrollid": "scroll4"
        // },
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
    // document.getElementById("autoRight4").onclick = function() { //Forth Carousel moves right if clicked
    //     scrollRight(data.ids[4].scrollid);
    // }
    // document.getElementById("autoLeft4").onclick = function() { //Fourth Carousel moves right if clicked
    //     scrollLeft(data.ids[4].scrollid);
    // }

    document.getElementById("autoRight0").onclick = function() { //First Carousel moves right if clicked
        scrollRight(data.ids[0].scrollid);
    }
    document.getElementById("autoLeft0").onclick = function() { //First Carousel moves right if clicked
        scrollLeft(data.ids[0].scrollid);
    }

    document.getElementById("autoRight1").onclick = function() { //Second Carousel moves right if clicked
        scrollRight(data.ids[1].scrollid);
    }
    document.getElementById("autoLeft1").onclick = function() { //Second Carousel moves right if clicked
        scrollLeft(data.ids[1].scrollid);
    }

    document.getElementById("autoRight2").onclick = function() { //Third Carousel moves right if clicked
        scrollRight(data.ids[2].scrollid);
    }
    document.getElementById("autoLeft2").onclick = function() { //Third Carousel moves right if clicked
        scrollLeft(data.ids[2].scrollid);
    }

    document.getElementById("autoRight3").onclick = function() { //Forth Carousel moves right if clicked
        scrollRight(data.ids[3].scrollid);
    }
    document.getElementById("autoLeft3").onclick = function() { //Fourth Carousel moves right if clicked
        scrollLeft(data.ids[3].scrollid);
    }
}

window.addEventListener('load', init, false);