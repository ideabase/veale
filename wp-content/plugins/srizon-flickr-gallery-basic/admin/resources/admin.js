jQuery(document).ready(function () {
    if (jQuery('#srzfbappid').length) {
        jQuery.ajaxSetup({cache: true});
        jQuery.getScript('//connect.facebook.net/en_US/sdk.js', function () {
            FB.init({
                appId: jQuery('#srzfbappid').val(),
                version: 'v2.5'
            });

            jQuery('#srzFBloginbutton').click(srzFacebookLogin);
            if (jQuery('#srzfbaccesstoken').val().length) {
                jQuery('#srzFBloginbutton').html('Renew Token');
            }
            else {
                jQuery('#srzFBloginbutton').html('Login and Get Token');
            }

            function srzFacebookLogin() {
                FB.login(function () {
                    FB.getLoginStatus(function (response) {
                        if (response.status === 'connected') {
                            jQuery('#srzfbaccesstoken').val(response.authResponse.accessToken);
                            jQuery('#srzFBloginbutton').fadeOut();
                        }
                    });
                }, {scope: 'user_photos, user_videos, user_events'});
            }

        });
    }
    jQuery('h3.hndle2, div.handlediv').click(function () {
        jQuery(this).parent().toggleClass('closed');
    });
    jQuery('.srz-cond').srz_conditionize();
    jQuery('#api_key').on('input', (function () {
        jQuery('.auth-cell').html('Values Changed. Save First, then authenticate!');
    }));
    jQuery('#api_secret').on('input', (function () {
        jQuery('.auth-cell').html('Values Changed. Save First, then authenticate!');
    }));

    jQuery('.album-remember').click(function (e) {
        var $this = jQuery(this);
        var id = $this.data('albumid');
        $this.addClass('button disabled').removeClass('button-primary').unbind('click').html('Saving...');
        jQuery.ajax({
            url: 'admin-ajax.php',
            type: 'POST',
            data: "action=srz_flickr_save_album_list&albumid=" + id,
            success: function (html) {
                if (html == 'saved') $this.html('Added to list');
                else $this.html('Saving Failed!');
            }
        }).fail(function () {
            alert('Something went wrong!');
        });
    });

    jQuery('.album-remove').click(function (e) {
        var $this = jQuery(this);
        var id = $this.data('albumid');
        $this.addClass('button disabled').removeClass('button-primary').unbind('click').html('Removing...');
        jQuery.ajax({
            url: 'admin-ajax.php',
            type: 'POST',
            data: "action=srz_flickr_remove_album_list&albumid=" + id,
            success: function (html) {
                if (html == 'removed') {
                    $this.html('Removed from list');
                    $this.parent().parent().fadeOut('slow');
                }
                else $this.html('Removal Failed!');
            }
        }).fail(function () {
            alert('Something went wrong!');
        });
    });

    jQuery('.gallery-remember').click(function (e) {
        var $this = jQuery(this);
        var id = $this.data('galleryid');
        $this.addClass('button disabled').removeClass('button-primary').unbind('click').html('Saving...');
        jQuery.ajax({
            url: 'admin-ajax.php',
            type: 'POST',
            data: "action=srz_flickr_save_gallery_list&galleryid=" + id,
            success: function (html) {
                if (html == 'saved') $this.html('Added to list');
                else $this.html('Saving Failed!');
            }
        }).fail(function () {
            alert('Something went wrong!');
        });
    });

    jQuery('.gallery-remove').click(function (e) {
        var $this = jQuery(this);
        var id = $this.data('galleryid');
        $this.addClass('button disabled').removeClass('button-primary').unbind('click').html('Removing...');
        jQuery.ajax({
            url: 'admin-ajax.php',
            type: 'POST',
            data: "action=srz_flickr_remove_gallery_list&galleryid=" + id,
            success: function (html) {
                if (html == 'removed') {
                    $this.html('Removed from list');
                    $this.parent().parent().fadeOut('slow');
                }
                else $this.html('Removal Failed!');
            }
        }).fail(function () {
            alert('Something went wrong!');
        });
    });
});

(function ($) {
    $.fn.srz_conditionize = function (options) {

        var settings = $.extend({
            hideJS: true
        }, options);

        $.fn.showOrHide = function (listenTo, listenFor, $section) {
            var listenForArray = listenFor.toString().split(',');
            for (var i = 0; i < listenForArray.length; i++) {
                listenForArray[i] = listenForArray[i].trim();
            }
            if ($(listenTo).is(':hidden')) {
                $section.slideUp(50, triggernext);
            }
            else if ($(listenTo).is('select, input[type=text]') && listenForArray.indexOf($(listenTo).val()) != -1) {
                $section.slideDown(50, triggernext);
            }
            else if (listenForArray.indexOf($(listenTo + ":checked").val()) != -1) {
                $section.slideDown(50, triggernext);
            }
            else {
                $section.slideUp(50, triggernext);
            }

            function triggernext() {
                if ($section.data('cond-option')) {
                    $section.find('input').trigger('change');
                }
            }

        };

        return this.each(function () {
            var listenTo = "[class=" + $(this).data('cond-option') + "]";
            var listenFor = $(this).data('cond-value');
            var $section = $(this);


            //Set up event listener
            $(listenTo).on('change', function () {
                $.fn.showOrHide(listenTo, listenFor, $section);
            });
            //If setting was chosen, hide everything first...
            if (settings.hideJS) {
                $(this).hide();
            }
            //Show based on current value on page load
            $.fn.showOrHide(listenTo, listenFor, $section);
        });
    }
}(jQuery));