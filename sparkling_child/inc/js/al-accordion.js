jQuery.noConflict();
(function ($) {

    $(function () {
        $(".accordion-toggle").on('click', function (event) {

            var elem = $(this).offset()

            event.stopPropagation();

            $("html, body").animate({scrollTop: elem.top}, "slow");

        })
    });

})(jQuery)
