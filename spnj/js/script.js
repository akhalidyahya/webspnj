jQuery(document).ready(function () {

    //animasi scroll
    $(".scroll").click(function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000 /*untuk berapa detik*/);
    });

    jQuery(".title-section-holder").stick_in_parent({offset_top: 64}).on("sticky_kit:stick", function (e) {
        jQuery('.navigation-wrapper, .navigation-wrapper .sub-navigation').css('backgroundColor', jQuery(this).css("backgroundColor"));
        jQuery('.navigation-wrapper a, .mob-navigation').css('color', jQuery(this).find('.section-number span').css("color"));
    });

    jQuery(".title-section-holder").stick_in_parent({offset_top: 64}).on("sticky_kit:unbottom", function (e) {
        jQuery('.navigation-wrapper, .navigation-wrapper .sub-navigation').css('backgroundColor', jQuery(this).css("backgroundColor"));
        jQuery('.navigation-wrapper a, .mob-navigation').css('color', jQuery(this).find('.section-number span').css("color"));
    });


    //Placeholder show/hide
    jQuery('input, textarea').focus(function () {
        jQuery(this).data('placeholder', jQuery(this).attr('placeholder'));
        jQuery(this).attr('placeholder', '');
    });
    jQuery('input, textarea').blur(function () {
        jQuery(this).attr('placeholder', jQuery(this).data('placeholder'));
    });


    //galeri
    var grid = jQuery('.grid').imagesLoaded(function () {
        grid.isotope({
            itemSelector: '.grid-item',
            masonry: {
                columnWidth: '.grid-sizer'
            }
        }
        );
        //Fix for galeri item text
        jQuery('.galeri-text-holder').each(function () {
            jQuery(this).find('.galeri-text-wrapper').css('margin-top', (jQuery(this).height() - jQuery(this).find('.galeri-text-wrapper').height()) / 2 - 70);
        });

        //Fix for galeri hover text fade in/out
        jQuery('.grid-item a').hover(function () {
            jQuery(this).find('.galeri-text-holder').fadeIn('fast');
        }, function () {
            jQuery(this).find('.galeri-text-holder').fadeOut('fast');
        });
    });

});


jQuery(window).load(function () {

    //Show-Hide Mobile Menu
    jQuery('.mob-navigation').on("click", showHideMobMenu);
    if (jQuery("body").width() <= 925)
    {
        jQuery('.main-navigation a').on("click", hideMobMenuItemClick);
    }

    //Set each image slider
    jQuery(".image-slider").each(function () {
        var id = jQuery(this).attr('id');
        var auto_value = window[id + '_auto'];
        if (auto_value == 'false')
        {
            auto_value = false;
        } else {
            auto_value = true;
        }

        var hover_pause = window[id + '_hover'];
        if (hover_pause == 'true')
        {
            hover_pause = 'resume';
        } else {
            hover_pause = false;
        }

        var speed_value = window[id + '_speed'];
        jQuery('#' + id).carouFredSel({
            responsive: true,
            width: 'variable',
            auto: {
                play: auto_value,
                pauseOnHover: hover_pause
            },
            next: '#' + id + '_next',
            scroll: {
                fx: 'crossfade',
                duration: parseFloat(speed_value)
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            items: {
                visible: 1,
                height: 'variable'
            }
        });
    });
    jQuery('.image-slider-wrapper').each(function () {
        var slider_width = jQuery(this).width();
        var pagination_width = jQuery(this).find('.carousel_pagination').width();
        jQuery(this).find('.carousel_pagination').css("margin-left", (slider_width - pagination_width) / 2);
    });


    //Set each quotes slider
    jQuery(".quotes").each(function () {
        var id = jQuery(this).attr('id');
        var auto_value = window[id + '_auto'];
        if (auto_value == 'false')
        {
            auto_value = false;
        } else {
            auto_value = true;
        }

        var hover_pause = window[id + '_hover'];
        if (hover_pause == 'true')
        {
            hover_pause = 'resume';
        } else {
            hover_pause = false;
        }

        var speed_value = window[id + '_speed'];
        jQuery('#' + id).carouFredSel({
            responsive: true,
            width: 'variable',
            auto: {
                play: auto_value,
                pauseOnHover: hover_pause
            },
            next: '#' + id + '_next',
            scroll: {
                fx: 'crossfade',
                duration: parseFloat(speed_value)
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            items: {
                height: 'variable'
            }
        });
    });

    jQuery('.carousel_pagination').each(function () {
        var pagination_width = jQuery(this).width();
        var windw_width = jQuery('.quotes-slider-holder').width();
        jQuery(this).css("margin-left", (windw_width - pagination_width) / 2);
    });

    //Set each FW image slider
    jQuery(".fw-image-slider").each(function () {
        var id = jQuery(this).attr('id');

        var auto_value = window[id + '_auto'];
        if (auto_value == 'false')
        {
            auto_value = false;
        } else {
            auto_value = true;
        }

        var hover_pause = window[id + '_hover'];
        if (hover_pause == 'true')
        {
            hover_pause = 'resume';
        } else {
            hover_pause = false;
        }

        var speed_value = window[id + '_speed'];
        var start_value = window[id + '_start'];
        var width_value = window[id + '_width'];
        var num_value = window[id + '_num'];

        jQuery('#' + id).carouFredSel({
            responsive: true,
            width: '100%',
            auto: {
                play: auto_value,
                pauseOnHover: hover_pause
            },
            pagination: '#' + id + '_fw_image_slide_pager',
            next: '#' + id + '_fw_next',
            scroll: {
                duration: parseFloat(speed_value)
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            items: {
                width: parseFloat(width_value),
                height: 'auto', //	optionally resize item-height
                visible: {
                    min: 1,
                    max: parseFloat(num_value)
                },
                start: parseFloat(start_value)
            }
        });
    });


    //PrettyPhoto initial
    jQuery('a[data-rel]').each(function () {
        jQuery(this).attr('rel', jQuery(this).data('rel'));
    });
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast', /* fast/slow/normal */
        slideshow: false, /* false OR interval time in ms */
        autoplay_slideshow: false, /* true/false */
        opacity: 0.80, /* Value between 0 and 1 */
        show_title: true, /* true/false */
        allow_resize: true, /* Resize the photos bigger than viewport. true/false */
        default_width: 500,
        default_height: 344,
        counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
        theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
        hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
        wmode: 'opaque', /* Set the flash wmode attribute */
        autoplay: true, /* Automatically start videos: True/False */
        modal: false, /* If set to true, only the close button will close the window */
        overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
        keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
        deeplinking: false,
        social_tools: false,
        iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
    });

    var $videoDefaultWidth = Math.ceil(jQuery('body').width() * 0.7);
    var $videoDefaultHeight = Math.ceil($videoDefaultWidth * 0.5625);

    jQuery("a[rel^='prettyPhoto']").each(function () {

        var str = jQuery(this).attr('href');
        if ((str.indexOf("youtube") >= 0 || (str.indexOf("vimeo")) >= 0))
        {
            jQuery(this).attr("href", str + "&width=" + $videoDefaultWidth + "&height=" + $videoDefaultHeight);
        }
    });

    //Set menu
    jQuery('.main-navigation').smartmenus({
        subMenusSubOffsetX: 1,
        subMenusSubOffsetY: -8,
        markCurrentItem: true
    });
    var $mainMenu = jQuery('.main-navigation').on('click', 'span.sub-arrow', function (e) {
        var obj = $mainMenu.data('smartmenus');
        if (obj.isCollapsible()) {
            var $item = jQuery(this).parent(),
                    $sub = $item.parent().dataSM('sub');
            $sub.dataSM('arrowClicked', true);
        }
    }).bind({
        'beforeshow.smapi': function (e, menu) {
            var obj = $mainMenu.data('smartmenus');
            if (obj.isCollapsible()) {
                var $menu = jQuery(menu);
                if (!$menu.dataSM('arrowClicked')) {
                    return false;
                }
                $menu.removeDataSM('arrowClicked');
            }
        }
    });


    jQuery('.title-section-holder').trigger("sticky_kit:recalc");

    jQuery('.loader').fadeOut('fast');
});


jQuery(window).resize(function () {

    //Show-Hide Mobile Menu        
    if (jQuery("body").width() <= 925)
    {
        jQuery('.main-navigation a').on("click", hideMobMenuItemClick);
    }

    var $videoDefaultWidth = Math.ceil(jQuery('body').width() * 0.7);
    var $videoDefaultHeight = Math.ceil($videoDefaultWidth * 0.5625);
    jQuery("a[rel^='prettyPhoto']").each(function () {

        var str = jQuery(this).attr('href');
        str = str.split('&width');
        if ((str[0].indexOf("youtube") >= 0 || (str[0].indexOf("vimeo")) >= 0))
        {
            jQuery(this).attr("href", str[0] + "&width=" + $videoDefaultWidth + "&height=" + $videoDefaultHeight);
        }
    });
    jQuery('.image-slider-wrapper').each(function () {
        var slider_width = jQuery(this).width();
        var pagination_width = jQuery(this).find('.carousel_pagination').width();
        jQuery(this).find('.carousel_pagination').css("margin-left", (slider_width - pagination_width) / 2);
    });


    //Fix for galeri item text
    jQuery('.galeri-text-holder').each(function () {
        jQuery(this).find('.galeri-text-wrapper').css('margin-top', (jQuery(this).height() - jQuery(this).find('.galeri-text-wrapper').height()) / 2 - 70);
    });
});
//------------------------------------------------------------------------
//Helper Methods -->
//------------------------------------------------------------------------


var showHideMobMenu = function (e) {
    jQuery('.main-navigation').slideToggle();
};

var hideMobMenuItemClick = function (e) {
    if (jQuery('.mob-navigation').is(':visible'))
    {
        jQuery('.main-navigation').slideUp();
    }
};

function is_touch_device() {
    return !!('ontouchstart' in window);
};
