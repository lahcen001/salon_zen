$(document).ready(function () {
    $('#headerVideoLink').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
});

var mybutton = document.getElementById("gotoup");


window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

$({ Counter: 0 }).animate({
    Counter: $('.Single').text()
}, {
    duration: 3000,
    easing: 'swing',
    step: function () {
        $('.Single').text(Math.ceil(this.Counter));
    }
});

$({ Counter: 0 }).animate({
    Counter: $('.Single1').text()
}, {
    duration: 3000,
    easing: 'swing',
    step: function () {
        $('.Single1').text(Math.ceil(this.Counter));
    }
});


$({ Counter: 0 }).animate({
    Counter: $('.Single2').text()
}, {
    duration: 3000,
    easing: 'swing',
    step: function () {
        $('.Single2').text(Math.ceil(this.Counter));
    }
});