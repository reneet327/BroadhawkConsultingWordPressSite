jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery(document).on( 'click', '.bizpoint-intro-notice .notice-dismiss', function() {
        jQuery.ajax({
            url: ajaxurl,
            data: {
                action: 'bizpoint-intro-dismissed'
            }
        });
    });

});
