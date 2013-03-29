$(function() {
    $('ul.nav a').bind('click',function(event) {
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');

        event.preventDefault();
    });
});

function carousel_offset() {
    if (window.matchMedia("(max-width: 1366px)").matches) {
      var x = -1000;
    } else {
      var x = -1400;
    }
    return x;
}

function studio_offset() {
    if (window.matchMedia("(max-width: 1366px)").matches) {
      var x = -465;
    } else {
      var x = -650;
    }
    return x;
}

function carousel() {

    var t = setInterval(function() {
        var offset = carousel_offset();
        $("#carousel ul").stop().animate({marginLeft:offset},750,function(){
            $(this).find("li:last").after($(this).find("li:first"));
            $(this).css({marginLeft:0});
        })
    },5000);
}

function carousel_studio() {

    var t = setInterval(function() {
        var offset = studio_offset();
        $("#studio_photo ul").stop().animate({marginLeft:offset},750,function(){
            $(this).find("li:last").after($(this).find("li:first"));
            $(this).css({marginLeft:0});
        })
    },5000);
}

$(document).ready(function() {
    carousel();
    carousel_studio();
});

/*$(function(){
    var sections = {},
        _height  = $(window).height(),
        i        = 0;
    
    // Grab positions of our sections 
    $('.section').each(function(){
        sections[this.name] = $(this).offset().top;
        $('.blah').append('<br/>' + sections[this.name]);
    });

    $('.active').toggleClass('hovered');

    $(document).scroll(function(){
        var $this = $(this),
            pos   = $this.scrollTop();
            
        for(i in sections){
            if(sections[i] > pos && sections[i] < pos + _height){
                $('#nav img').removeClass('active').removeClass('hovered');
                $('#nav_' + i).find('img.top').addClass('active');
                $('.active').toggleClass('hovered');
            }
        }
    });
});*/