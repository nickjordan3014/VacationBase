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
        }
    ]
}

function scroll(id) { // function to move carousel over
        let carousel = document.getElementById(id);
        let carouselWidth = carousel.offsetWidth - (carousel.offsetWidth * .2);
        let carouselPosition = carousel.scrollLeft;

        carousel.scrollTo({ //moves the carousel left based on current position and screen size
            left: carouselPosition = carouselPosition + carouselWidth,
            behavior: 'smooth',
        });
}

function init() { //intializes the function
    document.getElementById("auto0").onclick = function() { //First Carousel moves if clicked
        scroll(data.ids[0].scrollid);
    }
    document.getElementById("auto1").onclick = function() { //First Carousel moves if clicked
        scroll(data.ids[1].scrollid);
    }
    document.getElementById("auto2").onclick = function() { //First Carousel moves if clicked
        scroll(data.ids[2].scrollid);
    }
    document.getElementById("auto3").onclick = function() { //First Carousel moves if clicked
        scroll(data.ids[3].scrollid);
    }
}

window.addEventListener('load', init, false);