$(document).ready(function(){
    $window = $(window);        
    $(".parallax").each(function(){ 
        var $bgobj = $(this),
            headerheight = $('#header').outerHeight(true);
          
        $(window).scroll(function() {
            if( $(window).width() > 768 ){

                if( $window.scrollTop()+headerheight>$bgobj.position().top ){ 
                    $bgobj.css({backgroundAttachment:'fixed'});
                             
                    var yPos = ( ($bgobj.position().top - $window.scrollTop()+(headerheight*2)) / 3); 
                    
                    var coords = '50% '+ (yPos) + 'px';

                    $(".parallax-text", $bgobj).css({
                        'margin-top': (($window.scrollTop() - $bgobj.position().top) / 4) + "px",
                        'opacity': 1 - (($window.scrollTop() - $bgobj.position().top) / 400)
                    });

                    $bgobj.css({ backgroundPosition: coords });
                    
                   }else{
                        $bgobj.css({backgroundAttachment:'scroll'});
                        $bgobj.css({ backgroundPosition: "50% 0" });
                        $bgobj.find(".parallax-text").css('opacity',1);
                }     
            }       

        });

    });
});