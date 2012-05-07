// FANCYBOX  //

// load a fancybox
$(document).ready(function() {
        $("a.group").fancybox({
            'speedIn'		:	600,
            'speedOut'		:	200,
            'type' : 'ajax',
            'titleShow'  : false
        });
});

// Init the slider
$(function () {
    $('#slider1').anythingSlider({
        resizeContents : true,
        hashTags : false,                 // How long between slide transitions in AutoPlay mode
        animationTime: 800,
       // width               : null,      // Override the default CSS width
        height : 355,
        buildArrows : false,
        navigationFormatter : null, 
        toggleArrows        : false,
        enableKeyboard      : true,
        buildNavigation: true,
        toggleControls      : false,
        autoPlay   : false
    }); // add any non-default options here
});

// Effect for hover thumbnails works
$(function() {
    // OPACITY OF BUTTON SET TO 0%
    $(".roll").css("opacity","0");

    // ON MOUSE OVER
    $(".roll").hover(function () {

        // SET OPACITY TO 70%
        $(this).stop().animate({
                opacity: .7
            }, "slow");
        },

        // ON MOUSE OUT
        function () {

        // SET OPACITY BACK TO 50%
        $(this).stop().animate({
                opacity: 0
            }, "slow");
        });
});

    