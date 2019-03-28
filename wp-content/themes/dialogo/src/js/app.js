$(document).ready(function () {

    $('#header-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        items: 1
    });

    $("#header-carousel").mousemove(function (e) {
        parallaxIt(e, "#rec-1", -10);
        parallaxIt(e, "#rec-2", -10);
        parallaxIt(e, "#header-carousel img", 5);
    });

    function parallaxIt(e, target, movement) {
        var $this = $("#header-carousel");
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;

        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement
        });
    }

    $("a.smooth-scroll").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 82
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                //window.location.hash = hash;
            });
        } // End if
    });

    /* $('input[name="phone"]').mask('(99) 99999-9999'); */

    /* new WOW().init(); */
})