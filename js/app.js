jQuery( document ).ready(function($) {
    
    // On load, apply header background if scroll position is not at top of page.
    headerBackground($);
    
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
                slidesToScroll: 1
              }
            },
        ],
    });
    
    // Event listener for team category filtering
    $('.team-grid__filter-item').on('click', function() {
        filterTeamCategory(this, $);
    });
    
    
    // Smooth scroll #links
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 100 // offset
        }, 0);
    });
    
    // stickyHeader
    //new Mhead( "#masthead", {
    //   pin: 100
    //});

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
        
        // apply or remove header background layer
        headerBackground($);
        
    });
    
});

// Toggle team member information
function toggleTeamInfo(button, event) {
    event.preventDefault();
    
    let currentItem = jQuery(button);
    
    // add temporary class to selected item
    jQuery(currentItem).addClass('temp');
    
    jQuery('.team-grid article .team-member__information__wrapper a').each(function() {
        
        // if selected item, display extended bio info
        if ( jQuery(this).hasClass('temp') ) {
            
            jQuery(this).prev().prev().slideToggle(400);
            jQuery(this).prev().slideToggle(400);
            jQuery(this).toggleClass('active');
            switchTeamButtonText(currentItem);
            
        // and reset the other items    
        } else {
            
            jQuery(this).prev().prev().slideUp(400);
            jQuery(this).prev().slideDown(400);
            jQuery(this).removeClass('active');
            switchTeamButtonText(this);
            
        }

    });
    
    // remove temporary class to selected item
    jQuery(currentItem).removeClass('temp');
    
}

// Swap button text for team member dropdown trigger
function switchTeamButtonText(teammemberButton) {
    
    var newText;
    
    if ( jQuery(teammemberButton).hasClass('active') ) {
        newText = jQuery(teammemberButton).attr('data-opened');
    } else {
        newText = jQuery(teammemberButton).attr('data-closed');
    }
    
    jQuery(teammemberButton).find('p').html(newText);
    
}

// Apply background class to header 
function headerBackground($) {
    var scroll = $(window).scrollTop();
    
    if (scroll >= 1) {
        $("#masthead").addClass("faded-header");
    }
    else {
        $("#masthead").removeClass("faded-header");
    }
}

// Team category filtering
function filterTeamCategory(selectedCategory, $) {
    
    let selectedCat = $(selectedCategory).attr('data-value');
    
    // Check only the selected button
    $('.team-grid__filter-item').each(function() {
        let buttonCat = $(this).attr('data-value');
        
        if (buttonCat == selectedCat) {
            $(this).addClass('checked');
        } else {
            $(this).removeClass('checked');
        }
        
    });
    
    // Filter the categories based on selection
    $('.team-grid').each(function() {
        let sectionCat = $(this).attr('data-value');
        
        if (sectionCat == selectedCat) {
            $(this).show();
        } else {
            $(this).hide();
        }
        
        // All reset
        if (selectedCat == 'all') {
            $(this).show();
        }
        
    });

}