function init() { //intializes the function
    
    document.getElementById("autoScroll").addEventListener('click', function(){
        let carousel = document.getElementById('scroll');
        let carouselWidth = carousel.offsetWidth - (carousel.offsetWidth * .2);
        var carouselPosition = carousel.scrollLeft;

        carousel.scrollTo({ //moves the carousel left based on current position and screen size
            left: carouselPosition = carouselPosition + carouselWidth,
            behavior: 'smooth',
        });

    }, false);
}

window.addEventListener('load', init, false);