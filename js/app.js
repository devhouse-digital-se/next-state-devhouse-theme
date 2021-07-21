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

function toggleTeamInfo(button, event) {
    event.preventDefault();
    
    let memberId = jQuery(button).attr('data-team-member');
    jQuery('.team-grid .team-member__information[data-team-member="' + memberId + '"]').toggleClass('open');
    
}