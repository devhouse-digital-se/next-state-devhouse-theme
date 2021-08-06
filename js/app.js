jQuery( document ).ready(function($) {
    
    // Slick - our partners
    $('.slick.partners').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
        ],
    });
    
    // Smooth scroll #links
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 100 // offset
        }, 0);
    });
    
    // stickyHeader
    new Mhead( "#masthead", {
        pin: 100
    });
    console.log(123);
    
    // fade hero contents on scroll
    var heroContent = $('.page-hero .home-hero__content'),
    limit = 400;  /* scrolltop value when opacity should be 0 */
    
    var homeHeroContent = $('.home-hero .home-hero__content'),
    limit = 400;  /* scrolltop value when opacity should be 0 */

    $(window).on('scroll', function() {
       var st = $(this).scrollTop();
    
        /* avoid unnecessary call to jQuery function */
        if (st <= limit) {
            heroContent.css({ 'opacity' : (1 - st/limit) });
            homeHeroContent.css({ 'opacity' : (1 - st/limit) });
        }
    });
    
});

// Toggle team member information
function toggleTeamInfo(button, event) {
    event.preventDefault();
    
    // reset other opened item
    let activeItem = jQuery('.team-member__information__wrapper .active');
    
    if (activeItem.length != 0 && jQuery(activeItem).attr('data-team-member') != jQuery(button).attr('data-team-member')) {
        jQuery(activeItem).toggleClass('active');
        jQuery(activeItem).prev().prev().slideToggle(400);
        jQuery(activeItem).prev().slideToggle(400);
    }
    
    // toggle active class on button
    jQuery(button).toggleClass('active');

    // toggle the text sections
    jQuery(button).prev().prev().slideToggle(400);
    jQuery(button).prev().slideToggle(400);
    
}