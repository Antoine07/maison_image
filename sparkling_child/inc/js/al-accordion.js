jQuery.noConflict();
(function ($) {

    $(function () {
        $(".accordion-toggle").on('click', function (e) {

            e.preventDefault();

            console.log($(this))

            $("html, body").animate({scrollTop: $(this).offset().top - 200}, "slow");

        })
    });

})(jQuery)
