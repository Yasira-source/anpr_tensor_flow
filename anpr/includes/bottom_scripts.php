<script>
jQuery(".wpcf7-submit").click(function(event) {
    jQuery(document).ajaxComplete(function() {
        var responseType = jQuery(".wpcf7-response-output").hasClass("wpcf7-validation-errors") ?
            "red" : "green";
        var responseHtml = "";

        // Iterate all error tips on elements and show that errors in the popup
        jQuery(".wpcf7-not-valid-tip").each(function(index) {
            jQuery(this).hide();
            responseHtml += "<li>*" + jQuery(this).html() + "</li>";
        });

        if (responseHtml.length == 0) {
            responseHtml = "<li>" + jQuery(".wpcf7-response-output").html() + "</li>";
        }

        jQuery.colorbox({
            html: '<div style="color:' + responseType +
                '; padding:30px; background:#fff;"><ol>' + responseHtml + '</ol></div>',
            onClosed: function() {
                if (responseType == "green") {
                    window.location = "index.html";
                }
            }
        });
        jQuery(".wpcf7-response-output").css("display", "none");
    });
});
</script>
<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "https://kanni.wpengine.com/wp-admin/admin-ajax.php";
</script>
<script type="text/html" id="wpb-modifications"></script>
<link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
    href="https://kanni.wpengine.com/wp-content/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css"
    type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Rajdhani:600%7CLato:400%7COpen+Sans:400%7CRoboto:500%2C400"
    rel="stylesheet" property="stylesheet" media="all" type="text/css">

<script type="text/javascript">
(function() {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})()
</script>
<script type="text/javascript">
if (typeof revslider_showDoubleJqueryError === "undefined") {
    function revslider_showDoubleJqueryError(sliderID) {
        var err = "<div class='rs_error_message_box'>";
        err += "<div class='rs_error_message_oops'>Oops...</div>";
        err += "<div class='rs_error_message_content'>";
        err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
        err +=
            "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
        err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
        err += "</div>";
        err += "</div>";
        var slider = document.getElementById(sliderID);
        slider.innerHTML = err;
        slider.style.display = "block";
    }
}
</script>

<link rel='stylesheet' id='vc_font_awesome_5_shims-css'
    href='https://kanni.wpengine.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/v4-shims.min.css?ver=6.5.0'
    type='text/css' media='all' />
<link rel='stylesheet' id='vc_font_awesome_5-css'
    href='https://kanni.wpengine.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/all.min.css?ver=6.5.0'
    type='text/css' media='all' />
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {
    "apiSettings": {
        "root": "https:\/\/kanni.wpengine.com\/wp-json\/contact-form-7\/v1",
        "namespace": "contact-form-7\/v1"
    },
    "cached": "1"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.2'
    id='contact-form-7-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js?ver=5.7.5'
    id='dt-sc-tabs-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js?ver=5.7.5'
    id='dt-sc-tiptip-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js?ver=5.7.5'
    id='dt-sc-inview-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js?ver=5.7.5'
    id='dt-sc-animatenum-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js?ver=5.7.5'
    id='dt-sc-donutchart-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/slick.min.js?ver=5.7.5'
    id='dt-sc-slick-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.toggle.click.js?ver=5.7.5'
    id='dt-sc-toggle-click-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/shortcodes.js?ver=5.7.5'
    id='dt-sc-script-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-core-features/custom-post-types/js/protfolio-custom.js?ver=5.7.5'
    id='dt-sc-portfolio-custom-script-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/designthemes-fb-pixel/script.js?ver=5.7.5'
    id='dt-fbpixel-script-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
    id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.8.1'
    id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_cf2178435b107dd6e53cad41772bed21",
    "fragment_name": "wc_fragments_cf2178435b107dd6e53cad41772bed21",
    "request_timeout": "5000"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.8.1'
    id='wc-cart-fragments-js'></script>
<script type='text/javascript'
    src='../www.google.com/recaptcha/api394a.js?render=6LeKW-8ZAAAAAFCLCnV0QoL6ZpqXJ3LQwXSA9X2r&amp;ver=3.0'
    id='google-recaptcha-js'></script>
<script type='text/javascript' id='wpcf7-recaptcha-js-extra'>
/* <![CDATA[ */
var wpcf7_recaptcha = {
    "sitekey": "6LeKW-8ZAAAAAFCLCnV0QoL6ZpqXJ3LQwXSA9X2r",
    "actions": {
        "homepage": "homepage",
        "contactform": "contactform"
    }
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/contact-form-7/modules/recaptcha/script.js?ver=5.3.2'
    id='wpcf7-recaptcha-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.ui.totop.min.js?ver=5.7.5'
    id='jquery-ui-totop-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.easing.js?ver=5.7.5'
    id='jquery-easing-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.caroufredsel.js?ver=5.7.5'
    id='jquery-caroufredsel-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.debouncedresize.js?ver=5.7.5'
    id='jquery-debouncedresize-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.prettyphoto.js?ver=5.7.5'
    id='jquery-prettyphoto-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.touchswipe.js?ver=5.7.5'
    id='jquery-touchswipe-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.parallax.js?ver=5.7.5'
    id='jquery-parallax-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.downcount.js?ver=5.7.5'
    id='jquery-downcount-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.nicescroll.js?ver=5.7.5'
    id='jquery-nicescroll-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.bxslider.js?ver=5.7.5'
    id='jquery-bxslider-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.fitvids.js?ver=5.7.5'
    id='jquery-fitvids-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.sticky.js?ver=5.7.5'
    id='jquery-sticky-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.simple-sidebar.js?ver=5.7.5'
    id='jquery-simple-sidebar-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.classie.js?ver=5.7.5'
    id='jquery-classie-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.placeholder.js?ver=5.7.5'
    id='jquery-placeholder-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.visualNav.min.js?ver=5.7.5'
    id='jquery-visualnav-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/ResizeSensor.min.js?ver=5.7.5'
    id='resizesensor-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/theia-sticky-sidebar.min.js?ver=5.7.5'
    id='theia-sticky-sidebar-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/jquery.mCustomScrollbar.concat.min.js?ver=5.7.5'
    id='jquery-mcustomscrollbar-concat-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/isotope.pkgd.min.js?ver=5.7.5'
    id='isotope-pkgd-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/cookieconsent.js?ver=5.7.5'
    id='kanni-cookie-js-js'></script>
<script type='text/javascript' id='kanni-cookie-js-js-after'>
function dt_privacy_cookie_setter(cookie_name) {

    var toggle = jQuery('.' + cookie_name);
    toggle.each(function() {
        if (document.cookie.match(cookie_name)) this.checked = false;
    });

    jQuery('.' + 'dt-switch-' + cookie_name).each(function() {
        this.className += ' active ';
    });

    toggle.on('click', function() {
        if (this.checked) {
            document.cookie = cookie_name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        } else {
            var theDate = new Date();
            var oneYearLater = new Date(theDate.getTime() + 31536000000);
            document.cookie = cookie_name + '=true; Path=/; Expires=' + oneYearLater.toGMTString() + ';';
        }
    });
};
dt_privacy_cookie_setter('dtPrivacyGoogleTrackingDisabled');
dt_privacy_cookie_setter('dtPrivacyGoogleWebfontsDisabled');
dt_privacy_cookie_setter('dtPrivacyGoogleMapsDisabled');
dt_privacy_cookie_setter('dtPrivacyVideoEmbedsDisabled');
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/magnific/jquery.magnific-popup.min.js?ver=5.7.5'
    id='kanni-popup-js-js'></script>
<script type='text/javascript' id='kanni-jqcustom-js-extra'>
/* <![CDATA[ */
var dttheme_urls = {
    "theme_base_url": "https:\/\/kanni.wpengine.com\/wp-content\/themes\/kanni",
    "framework_base_url": "https:\/\/kanni.wpengine.com\/wp-content\/themes\/kanni\/framework\/",
    "ajaxurl": "https:\/\/kanni.wpengine.com\/wp-admin\/admin-ajax.php",
    "url": "https:\/\/kanni.wpengine.com",
    "isRTL": "",
    "loadingbar": "disable",
    "advOptions": "Show Advanced Options",
    "wpnonce": "ca01737dfe"
};
/* ]]> */
</script>
<script type='text/javascript' src='https://kanni.wpengine.com/wp-content/themes/kanni/framework/js/custom.js?ver=5.7.5'
    id='kanni-jqcustom-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/contact-form-7-popup-response//colorbox/jquery.colorbox-min.js?ver=5.7.5'
    id='popupScript-js'></script>
<script type='text/javascript' src='https://kanni.wpengine.com/wp-includes/js/wp-embed.min.js?ver=5.7.5'
    id='wp-embed-js'></script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.5.0'
    id='wpb_composer_front_js-js'></script>
<script type='text/javascript' id='sb_instagram_scripts-js-extra'>
/* <![CDATA[ */
var sb_instagram_js_options = {
    "font_method": "svg",
    "resized_url": "https:\/\/kanni.wpengine.com\/wp-content\/uploads\/sb-instagram-feed-images\/",
    "placeholder": "https:\/\/kanni.wpengine.com\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://kanni.wpengine.com/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=2.6.2'
    id='sb_instagram_scripts-js'></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-X'></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-XXXXX-X', {
    'anonymize_ip': true
});
</script>