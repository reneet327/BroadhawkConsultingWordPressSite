jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery('body').removeClass('bp-loading-now');

    jQuery('#primary-menu').slicknav({
        appendTo: '.site-branding',
        label: '',
        allowParentLinks: true
    });

    jQuery('body').on('click', '.bp-trigger-search-box', function() {
        jQuery('.bp-nav-search-box').toggleClass('bp-op-0');
    });

    jQuery(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        rtl:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:1,
                nav:false
            },
            768:{
                items:2,
                nav:false,
            }
        }
    });

});
