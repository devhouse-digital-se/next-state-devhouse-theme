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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
      ],
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
        console.log("poop");
    }
    
    // toggle active class on button
    jQuery(button).toggleClass('active');

    // toggle the text sections
    jQuery(button).prev().prev().slideToggle(400);
    jQuery(button).prev().slideToggle(400);
    
}