
var revapi;
jQuery(document).ready(function () {
    revapi = jQuery('.tp-banner').revolution(
            {
                forceFullWidth: "on",
                fullWidth: "on",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_over: 3000,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 40,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                    ,
                    tabs: {
                        style: "erinyen",
                        enable: true,
                        width: 250,
                        height: 100,
                        min_width: 250,
                        wrapper_padding: 0,
                        wrapper_color: "transparent",
                        wrapper_opacity: "0",
                        tmp: '<div class="tp-tab-title">{{title}}</div><div class="tp-tab-desc">{{description}}</div>',
                        visibleAmount: 3,
                        hide_onmobile: true,
                        hide_under: 778,
                        hide_onleave: false,
                        hide_delay: 200,
                        direction: "vertical",
                        span: false,
                        position: "inner",
                        space: 10,
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [700, 650, 580, 480],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "on",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
});