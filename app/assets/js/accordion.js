$(document).ready(function(){
    $('.accordion-header').click(function() {
        var $this = $(this);
      
        if ($this.next().hasClass('active')) {
            $this.next().removeClass('active');
            $this.removeClass('active');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('.accordion-content').removeClass('active');
            $this.removeClass('active');
            $this.parent().parent().find('.accordion-content').slideUp(350);
            $this.next().toggleClass('active');
            $this.toggleClass('active');
            $this.next().slideToggle(350);
        }
    });
});