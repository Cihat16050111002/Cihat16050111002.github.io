(function($) {
    "use strict";

    $(window).on('load', function() {
        /* WOW Scroll Spy
     ========================================================*/
        var wow = new WOW({
            //disabled for mobile
            mobile: false
        });
        wow.init();

        /* ==========================================================================
       countdown timer
       ========================================================================== */
        $('#clock').countdown('2021/06/15',function(event){
            var $this=jQuery(this).html(event.strftime(''
                +'<div class="time-entry days"><span>%D</span> Days</div> '
                +'<div class="time-entry hours"><span>%H</span> Hours</div> '
                +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
                +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
        });
    })
    // datepicker jquery ui widget execution
    $('#datepicker').datetimepicker();

}(jQuery));


