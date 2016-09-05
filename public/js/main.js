$(function() {
    "use strict";

    $('#main-carousel').carousel({
        interval: 150000
    });

    $('.navigator > li > .nav-link.services, .navigator > li > ul.sub-menu')
        .on('mouseenter', function() {
            $(this).parent().find('.sub-menu').show();
        })
        .on('mouseleave', function(e) {
            $(this).parent().find('.sub-menu').hide();
        });

    $('.tabbable > .tab-content, .tabbable > .tab-content > .tab-pane, .tabbable > .tab-content > .tab-pane > .content-box').css('min-height', $('.tabbable > .nav').outerHeight() + 50);

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

// Resize stuff...
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
});