$(document).ready(function () {
    $('body').scrollspy({ target: '#top-menu-nav', offset: 100 })
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
        parallaxIt(e, "#plus", 10);
        parallaxIt(e, "#plus-lg", 8);
        parallaxItY(e, "#line-vertical", -25);
        parallaxItX(e, "#line-horizontal", -20);
        parallaxIt(e, "#header-carousel .banner-img", 5);
    });
    
    $("#about").mousemove(function (e) {
        parallaxItX(e, "#map", -20);
        parallaxIt(e, "#negative-plus", -20);
        parallaxItX(e, "#map-horizontal-line", 30);
        parallaxItX(e, "#horizontal-line-sm", 20);
        parallaxItX(e, "#horizontal-line-xs", -10);
    });
    
    function parallaxIt(e, target, movement) {
        var $this = $("#header-carousel");
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;
    
        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement,
        });
    }
    
    function parallaxItX(e, target, movement) {
        var $this = $("#header-carousel");
        var relX = e.pageX - $this.offset().left;
    
        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
        });
    }
    
    function parallaxItY(e, target, movement) {
        var $this = $("#header-carousel");
        var relY = e.pageY - $this.offset().top;
    
        TweenMax.to(target, 1, {
            y: (relY - $this.height() / 2) / $this.height() * movement,
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

    $('.about-text p').not(':nth-child(1)').not(':nth-child(2)').each(function(){
        $(this).hide()
    })

    $("#btn-read-more").on('click', function (event) {
        $('.about-text p').not(':nth-child(1)').not(':nth-child(2)').each(function(){
            $(this).toggleClass('more')
            
            if($(this).hasClass('more')){
                $(this).show('.5s')
            }else{
                $(this).hide('.5s')
            }
        })
        
        $(this).toggleClass('more')
        if($(this).hasClass('more')){
            $(this).text('ler menos')
        }else{
            $(this).text('ler mais')
        }
    });
    /* $('input[name="phone"]').mask('(99) 99999-9999'); */

    /* new WOW().init(); */
})