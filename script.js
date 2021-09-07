$(document).ready(function () {
    $('#headerVideoLink').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
});

var mybutton = document.getElementById("gotoup");
var mybutton1 = document.getElementById("gotoup1");

window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 4000 || document.documentElement.scrollTop > 4900) {
        mybutton.style.display = "block";

    } else {
        mybutton.style.display = "none";

    }


    if (document.documentElement.scrollTop > 400 && document.documentElement.scrollTop < 650) {

        mybutton1.style.display = "block";

    } else {

        mybutton1.style.display = "none";
    }




    // if (document.documentElement.scrollTop == 650) {



    // }

}

$({ Counter: 0 }).animate({
    Counter: $('.Single').text()
}, {
    duration: 8000,
    easing: 'swing',
    step: function () {
        $('.Single').text(Math.ceil(this.Counter));
    }
});

$({ Counter: 0 }).animate({
    Counter: $('.Single1').text()
}, {
    duration: 8000,
    easing: 'swing',
    step: function () {
        $('.Single1').text(Math.ceil(this.Counter));
    }
});

$({ Counter: 0 }).animate({
    Counter: $('.Single2').text()
}, {
    duration: 8000,
    easing: 'swing',
    step: function () {
        $('.Single2').text(Math.ceil(this.Counter));
    }
})








