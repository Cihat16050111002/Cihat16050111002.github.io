// Create a variable for ajax
var ourRequest = new XMLHttpRequest();

$(document).ready(function(){

    $('#searchText').keyup(function () {
        let searchText = $('#searchText').val();
        getMovies(searchText);
        // e.preventDefault();
    });


    // $(".owl-carousel").owlCarousel();
    $('.owl-carousel').owlCarousel({
        center: true,
        items:2,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            600:{
                items:6
            }
        }
    });

});

function getMovies(searchText) {
    // console.log(searchText);
    ourRequest.open("GET", "https://www.omdbapi.com/?s="+ searchText +"&apikey=ecad2649");
    ourRequest.onload = function () {

        // Add then-catch here
        let data = JSON.parse(ourRequest.responseText);

        // The array which includes all related movies
        let data_arr = data.Search;
        let output = "";

        $.each(data_arr, (index, movie) => {
            output += `
                <div class="col-md-3">
                    <div class="well text-center">
                        <img src="${movie.Poster}" alt="">
                        <h5>${movie.Title}</h5>
                        <a href="https://imdb.com/title/${movie.imdbID}" target="_blank" class="btn btn-primary">Movie Details</a>
                    </div>
                </div> 
            `;
        });
        $("#movies").html(output);
    };
    ourRequest.send();
}

