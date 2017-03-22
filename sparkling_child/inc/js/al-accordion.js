jQuery.noConflict();
(function ($) {

    $(function () {
        $(".accordion-toggle").on('click', function (e) {

            e.preventDefault();

            $(this).find('.panel-body');

            console.log($(this).prev('.panel'))

            $("html, body").animate({scrollTop: $(this).offset().top - 200}, "slow");

        })
    });

})(jQuery)
