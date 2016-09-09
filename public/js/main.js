$(function() {
    "use strict";

    $('#main-carousel').carousel({
        interval: 3500
    });

    $('.navigator > li > .nav-link.services, .navigator > li > ul.sub-menu')
        .on('mouseenter', function() {
            $(this).parent().find('.sub-menu').show();
        })
        .on('mouseleave', function(e) {
            $(this).parent().find('.sub-menu').hide();
        });

    $('.tabbable > .tab-content, .tabbable > .tab-content > .tab-pane, .tabbable > .tab-content > .tab-pane > .content-box').css('min-height', $('.tabbable > .nav').outerHeight() + 50);

    $('#service-request').ajaxForm({
        type: 'post'
        , clearForm: true
        , resetForm: true
        , success: function() {
            swal("Felicitari!", "Cererea a fost trimisa. In cel mai scurt timp veti fii contactat de firma noastra", "success")
        }
        , beforeSubmit: function () {
            var _this = $('#service-request');
            _this.validate();

            if (!_this.valid()) {
                return false;
            }
        }
    })
});