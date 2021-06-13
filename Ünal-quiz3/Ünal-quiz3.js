$(document).ready(function() {

    $("#nav_list a").click(function() {
        const title = $(this).attr("title");
        var json_path = './json_files/' + title + '.json';

        $.getJSON(json_path, function (data) {
            // Month and Speaker information
            var month = data.speakers[0].month;
            var speaker = data.speakers[0].speaker;
            $("main h2").html(month + "<br>" + speaker);

            // İmage
            var image = data.speakers[0].image;
            $("main img").attr("src",image);

            // Text
            var text = data.speakers[0].text;
            $("main p").html(text);

            // Title
            var title = data.speakers[0].title;
            $("main h1").html(title);
        });
    })


	
}); // end ready