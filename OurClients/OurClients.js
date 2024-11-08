// responsive logoipsum slider

$('.sliderlogo').slick({
    arrows: false,
    dots: false,
    infinite: false,
    autoplay: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
        }
    },
    
 {
    breakpoint: 600,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
    }
 }   ]
})