(function($){

    $(".accordion-toggle").on('click', function(e) {

        e.preventDefault();

        if(typeof $(".entry-content h3:first") !== 'undefined')
        {
            var pos = $(".entry-content h3:first").position();

            $("html, body").animate({ scrollTop: pos.top }, "slow");

        }

    })

})(jQuery)