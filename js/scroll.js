const data = {
    "ids" : [
        {
            "scrollid" : "scroll0" 
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
}

window.addEventListener('load', init, false);