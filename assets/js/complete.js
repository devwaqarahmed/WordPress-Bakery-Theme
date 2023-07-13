jQuery(document).ready(function() {
	jQuery(".header-search-toggle").click(function() {
	   jQuery(".header-search-form").toggle();
	   jQuery(".header-search-form .search-field").focus();
	 });
});

jQuery(document).ready(function( jQuery ) {
        jQuery('.skt-builder-column-numbers').counterUp({
            delay: 100,
            time: 2000
        });
});

function getMobileOperatingSystem() {
    var e = navigator.userAgent || navigator.vendor || window.opera;
    return e.match(/iPad/i) || e.match(/iPhone/i) || e.match(/iPod/i) ? "iOS" : void 0
}
jQuery(window).ready(function() {
    function e() {
        return "ontouchstart" in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0
    }
    e() && jQuery("body").addClass("touchon"), jQuery(window).width() > 1023 && (jQuery("#topmenu ul > li").not("#topmenu ul > li.mega-menu-item").hoverIntent(function() {
        jQuery(this).find(".sub-menu, ul.children").not(".sub-menu .sub-menu, ul.children ul.children").removeClass("").addClass("menushow")
    }, function() {
        jQuery(this).find(".sub-menu, ul.children").not(".sub-menu .sub-menu, ul.children ul.children").addClass("").delay(0).queue(function(e) {
            jQuery(this).removeClass("menushow"), e()
        })
    }), jQuery("#topmenu ul li ul li").not("#topmenu ul li.mega-menu-item ul.mega-sub-menu li").hoverIntent(function() {
        jQuery(this).find(".sub-menu, ul.children").removeClass("").addClass("menushow")
    }, function() {
        jQuery(this).find(".sub-menu, ul.children").addClass("").delay(0).queue(function(e) {
            jQuery(this).removeClass("menushow"), e()
        })
    }), jQuery("#topmenu ul li").not("#topmenu ul li.mega-menu-item, #topmenu ul li ul li").hover(function() {
        jQuery(this).addClass("menu_hover")
    }, function() {
        jQuery(this).removeClass("menu_hover")
    }), jQuery("#topmenu li").has("ul").addClass("zn_parent_menu"), jQuery(".zn_parent_menu > a").append('<span class="menu_arrow"><i class="fa-angle-down"></i></span>')), jQuery(".midrow_blocks_wrap").each(function(e, t) {
        jQuery(this).waitForImages(function() {
            jQuery(this).find(".midrow_block").matchHeight({
                property: "min-height"
            })
        })
    }), jQuery(".lay1").each(function(e, t) {
        for (var r = jQuery(this).find(".hentry"), i = 0; i < r.length; i += 3) r.slice(i, i + 3).wrapAll("<div class='ast_row'></div>");
        if (jQuery(window).width() < 1200) {
            var a = jQuery(this).find(".hentry").width();
            jQuery(this).find(".post_image").css({
                maxHeight: 66 * a / 100
            })
        }
    }), jQuery(".lay1 .postitle a:empty").closest("h2").addClass("no_title"), jQuery(".no_title").css({
        padding: "0"
    }), jQuery(".lay1 h2.postitle a").each(function() {
        jQuery(this).height() > 80 && jQuery(this).parent().parent().parent().addClass("lowreadmo")
    }), jQuery(".lts_layout1 .listing-item h2").each(function() {
        jQuery(this).outerHeight() > 76 && jQuery(this).parent().addClass("lowreadmo")
    }), jQuery(window).bind("scroll", function() {
        jQuery(this).scrollTop() > 800 ? jQuery(".to_top").fadeIn("slow") : jQuery(".to_top").fadeOut("fast")
    }), jQuery(".to_top").click(function() {
        return jQuery("html, body").animate({
            scrollTop: 0
        }, "slow"), !1
    }), jQuery(window).width() > 480 && (jQuery(".home #zn_nivo, .home #accordion").waitForImages(function() {
        var e = jQuery(".home #zn_nivo, .home #accordion").height();
        jQuery(".home #zn_nivo, .home #accordion").waypoint(function() {
            jQuery(".is-sticky .header").addClass("headcolor")
        }, {
            offset: "-" + e / 2 + "px"
        }), jQuery(".home #zn_nivo, .home #accordion").waypoint(function() {
            jQuery(".is-sticky .header").removeClass("headcolor")
        }, {
            offset: "-90px"
        })
    }), jQuery(".block_type2 .midrow_blocks .midrow_block").css({
        opacity: "0"
    }), jQuery(".block_type1 .midrow_blocks").waypoint(function() {
        jQuery(this).addClass("animated bounceIn")
    }, {
        offset: "90%"
    }), jQuery(".block_type2 .midrow_blocks .midrow_block").waypoint(function() {
        jQuery(this).addClass("animated fadeInUp")
    }, {
        offset: "90%"
    }), jQuery(".welcmblock .text_block_wrap").css({
        opacity: "0"
    }), jQuery(".welcmblock .text_block_wrap").waypoint(function() {
        jQuery(this).addClass("animated fadeIn")
    }, {
        offset: "90%"
    }), jQuery(".home .postsblck .center").css({
        opacity: "0"
    }), jQuery(".home .postsblck .center").waypoint(function() {
        jQuery(this).addClass("animated fadeInUp")
    }, {
        offset: "85%"
    }));
    var t = jQuery(".ast-next > a").attr("href");
    jQuery(".right_arro").attr("href", t);
    var t = jQuery(".ast-prev > a").attr("href");
    jQuery(".left_arro").attr("href", t), jQuery("#sidebar .widget_pages ul li a, #sidebar .widget_meta ul li a, #sidebar .widget_nav_menu ul li a, #sidebar .widget_categories ul li a, #sidebar .widget_recent_entries ul li a, #sidebar .widget_recent_comments ul li, #sidebar .widget_archive ul li, #sidebar .widget_rss ul li").prepend('<i class="fa-double-angle-right"></i> '), jQuery("#sidebar .fa-double-angle-right").css({
        opacity: "0.5"
    });
    var r = jQuery("#simple-menu").html();
    jQuery("#simple-menu").sidr({
        name: "sidr-main",
        source: "#topmenu",
        side: "right"
    }), jQuery(".sidr").prepend("<div class='pad_menutitle'>" + r + "<span><i class='fa-times'></i></span></div>"), jQuery(".pad_menutitle span").click(function() {
        jQuery.sidr("close", "sidr-main")
    }), jQuery(window).width() < 1023 && 0 == jQuery("#topmenu:has(ul)").length && jQuery("#simple-menu").addClass("hide_mob_menu"), jQuery(window).width() < 480 && jQuery(".nivo-control").text(""), jQuery(function() {
        var e = 0,
            t = jQuery(".slider-wrapper .sldimg"),
            r = 100 / t.length,
            i = jQuery("#astbar");
        $progrssn = jQuery(".progrssn"), t.load(function() {
            e += r, $progrssn.css({
                bottom: e + "%"
            });
            var t = parseFloat(e).toFixed(0);
            i.text(t + "%")
        })
    }), jQuery(".slider-wrapper").waitForImages(function() {
        jQuery("#zn_nivo, .nivo-controlNav, #slide_acord, .nivoinner").css({
            display: "block"
        }), jQuery(".pbar_wrap").fadeOut()
    }), jQuery("#slidera").has("#stat_img").addClass("selected_stat"), jQuery("#slidera").has(".slide_wrap").addClass("selected_slide"), jQuery(window).width() < 1025 && jQuery(".dlthref").removeAttr("href"), jQuery("#sidebar .widget .widgettitle, .related_h3, h3#comments, #reply-title").after("<span class='widget_border' />"), jQuery(".comm_wrap").insertAfter(".comment-form-comment"), jQuery(".comm_wrap input").placeholder(), jQuery("body").has(".error_msg").addClass("error404"), jQuery(".nav-box.ast-prev, .nav-box.ast-next").not(":has(img)").addClass("navbox-noimg"); jQuery(".lay1.optimposts, .lay4.optimposts").each(function(e, t) {
        jQuery(this).waitForImages(function() {
            jQuery(this).find(".type-product").matchHeight({
                property: "min-height"
            })
        })
    }), jQuery(".lay1.optimposts .type-product").each(function(e, t) {
        jQuery(window).width() >= 960 && jQuery(this).find(".button.add_to_cart_button").prependTo(jQuery(this).find(".imgwrap")), jQuery(this).find("span.price").prependTo(jQuery(this).find(".post_image "))
    })
}), jQuery(window).on("load scroll", function() {
    var e = jQuery(this).scrollTop(),
        t = jQuery(".header").height() + jQuery(".admin-bar #wpadminbar").height() + jQuery("#customizer_topbar").height();
    e ? (jQuery("body:not(.has_trans_header) .stat_bg img").css({
        top: "0px"
    }), jQuery("body:not(.has_trans_header) .stat_bg").css({
        "background-position-y": "0px"
    })) : (jQuery("body:not(.has_trans_header) .stat_bg img").css({
        top: t + "px"
    }), jQuery("body:not(.has_trans_header) .stat_bg").css({
        "background-position-y": t + "px"
    }))
});
var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
"iOS" == getMobileOperatingSystem() ? jQuery("body").addClass("is-ios") : jQuery("body").addClass("not-ios"), 1 == isSafari && jQuery("body").addClass("is_safari"), jQuery(document).ready(function() {
    jQuery(".cols2").each(function(e) {
        (e + 1) % 2 == 0 && jQuery(this).after('<div class="clear"></div>')
    }), jQuery(".cols3").each(function(e) {
        (e + 1) % 3 == 0 && jQuery(this).after('<div class="clear"></div>')
    }), jQuery(".cols4").each(function(e) {
        (e + 1) % 4 == 0 && jQuery(this).after('<div class="clear"></div>')
    }), jQuery(".tstcols2").each(function(e) {
        (e + 1) % 2 == 0 && jQuery(this).after('<div class="clear"></div>')
    }), jQuery(".tstcols3").each(function(e) {
        (e + 1) % 3 == 0 && jQuery(this).after('<div class="clear"></div>')
    }), jQuery(".tstcols4").each(function(e) {
        (e + 1) % 4 == 0 && jQuery(this).after('<div class="clear"></div>')
    })
}), jQuery(document).ready(function() {jQuery(".clientbox").wrapAll('<div class="clientarea" />'),jQuery(".blocksbox").wrapAll('<div class="servicerow" />'),jQuery(".thumb").wrapAll('<div class="servicerow" />'),jQuery(".perfectbox").wrapAll('<div class="perfrow" />')
}), jQuery(document).ready(function() {
    jQuery('.bxslider').show().bxSlider({
        slideWidth: 360,
        minSlides: 3,
        maxSlides: 3,
		moveSlides: 1,
        slideMargin: 28,
		speed: 2000,
        controls: !1,
    })
}), jQuery(document).ready(function() {
    jQuery(".galcarosel").bxSlider({
        slideWidth: 275,
        minSlides: 2,
        maxSlides: 4,
        slideMargin: 20,
        pager: !1
    }), jQuery(".skillbar").each(function() {
        jQuery(this).find(".skillbar-bar").animate({
            width: jQuery(this).attr("data-percent")
        }, 6e3)
    })
});

// poster frame click event
jQuery(document).on("click", ".js-videoPoster", function(ev) {
  ev.preventDefault();
  var jQueryposter = jQuery(this);
  var jQuerywrapper = jQueryposter.closest(".js-videoWrapper");
  videoPlay(jQuerywrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay(jQuerywrapper) {
  var jQueryiframe = jQuerywrapper.find(".js-videoIframe");
  var src = jQueryiframe.data("src");
  // hide poster
  jQuerywrapper.addClass("videoWrapperActive");
  // add iframe src in, starting the video
  jQueryiframe.attr("src", src);
}

jQuery(document).ready(function() {
        jQuery('.skt-builder-home-section1-block .skt-builder-block-title h2, .skt-builder-home-section2-block .skt-builder-block-title h2, .skt-builder-home-section5-block .skt-builder-block-title h2, .skt-builder-home-section6-block .skt-builder-block-title h2, .skt-builder-home-section7-block .skt-builder-block-title h2, .skt-builder-home-section8-block .skt-builder-block-title h2').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;
            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together
            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});	