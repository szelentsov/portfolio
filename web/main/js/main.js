'use strict';
$(window).on('load', function () {
 //START JS
 
    class DocumentLoader{//loader document
        constructor(preloader,svg_anm){
            this.preloader = preloader;
            this.svg_anm = svg_anm;
        };
        docLoad(){
            $(this.svg_anm).fadeOut();
            $(this.preloader).delay(500).fadeOut('slow');
        }
    }
    let mainLoader = new DocumentLoader('.preloader','.svg_anm');
    mainLoader.docLoad();
 
 
    class SmoothTransition{
        constructor(menu){
            this.menu = menu;
        }

        toParagraph(){
            $(this.menu).on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 500);
            });
        }
    }

    let goTo = new SmoothTransition("#menu");
    goTo.toParagraph();
    let goabout = new SmoothTransition("#home-arrow-down");
    goabout.toParagraph();
    
    $(function(){
        $("#typed").typed({
            stringsElement: $("#typed-strings"),
            typeSpeed: 100,
            backDelay: 2000,
            loop: true,
            contentType: "html",
            loopCount: false
        });
    });
    //scroll up
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    //end scroll up
    
    $("form[name='form']").submit(function (e) {
        e.preventDefault();
          $.ajax({
            type        : $("form[name='form']").attr( 'method' ),
            url         : $("form[name='form']").attr( 'action' ),
            data        : $("form[name='form']").serializeArray(),
            success     : function() {
              $("#load-ajax").load("mess");
          }
          });

    });
//END JS
});
