$(document).ready(function() {
    var consentIsSet = "unknown";
    var cookieBanner = "#cookieBanner";
    var consentString = "cookieConsent=";

    // Sets a cookie granting/denying consent, and displays some text on console/banner
    function setCookie(consent) {
        $(cookieBanner).hide(); // Hide instead of fading: $(cookieBanner).fadeOut(5000);
        var d = new Date();
        var exdays = 30*12; // Expiration time (in days)
        d.setTime(d.getTime()+(exdays*24*60*60*1000));
        var expires = "expires="+d.toGMTString();
        document.cookie = consentString + consent + "; " + expires + ";path=/";
        consentIsSet = consent;
    }

    function grantConsent() {
        if (consentIsSet == "true")
            return; // Don't grant twice
        setCookie("true");
        doConsent();
    }

    // Run the consent code. We may be called either from grantConsent() or from the main routine
    function doConsent() {
        // Turn on analytics (and thus cookies!)
         analytics();
    }

    function analytics() {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-35860263-8', 'auto');
        ga('send', 'pageview');
    }

    /*
     * Main routine
     */
    // First, check if cookie is present
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var c = cookies[i].trim();
        if (c.indexOf(consentString) == 0) {
            consentIsSet = c.substring(consentString.length, c.length);
        }
    }

    var checkScrolling = function() {
        if($(this).scrollTop() > 200) {
            grantConsent();
            $(window).off("scroll",checkScrolling);
        }
    };

    if (consentIsSet == "unknown") {    
        $(cookieBanner).fadeIn();
        $("a:not(.noconsent)").click(grantConsent); //Consent is granted when user clicks on any link, but the privacy terms one
        $(window).scroll(checkScrolling); //Or by user scrolling down the web (navigating)
    } else if (consentIsSet == "true") {
        doConsent();
    }
});