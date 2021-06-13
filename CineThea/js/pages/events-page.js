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
        $('#clock').countdown('2021/07/15',function(event){
            var $this=jQuery(this).html(event.strftime(''
                +'<div class="time-entry days"><span>%D</span> Days</div> '
                +'<div class="time-entry hours"><span>%H</span> Hours</div> '
                +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
                +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
        });
    })

    // datepicker jquery ui widget execution
    $('#datepicker').datetimepicker();


    // AJAX Operation - Read data from Json Files
    $("#nav_list span").click(function() {
        const title = $(this).attr("title");
        var json_path = '../json_files/' + title + '.json';

        $.getJSON(json_path, function (data) {
            // Date information
            var date = data.events[0].date;
            $(".event-date").html("Date:  " + date);

            // İmage
            var image = data.events[0].image;

            // Text
            var text = data.events[0].text;

            $(".event-exp").html('<img class="event-img" src="' + image + '" alt="" />' + text);

            // Title
            var title = data.events[0].title;
            $(".event-title").html(title);
        });
    })


    $('.form-group .login_btn').click(() => {
        if(valid[0].validity.valid && valid[1].validity.valid) {
            Swal.fire({
                title: 'Successfull',
                text: 'Logged In Successfully',
                icon: 'success',
                confirmButtonText: 'Confirm'
            }).then(() => window.location.href="index.html");
        }
        else {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill the information correctly',
                icon: 'error',
                confirmButtonText: 'Confirm'
            });
        }
    });

}(jQuery));


