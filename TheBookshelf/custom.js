
/*$(function(){
    $('.fadein iframe:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').hide()
         .next('iframe').fadeIn(1000)
         .end().appendTo('.fadein');}, 
      4000);
});
*/
$(function() {
	
    function createSlider(el_left, el_right, items) {
        var index = 0;
		
        el_left.click(function() {
            var $this = items.eq(index);
            $this.animate({
                left: '-50%'
            }, 1500);
            index = (index + 1) % items.length;
            var $next = items.eq(index);
            $next.css('left', '150%');
            $next.animate({
                left: '50%'
            }, 1500);
        });
        el_right.click(function() {
            var $this = items.eq(index);
            $this.animate({
                left: '150%'
            }, 1500);
            index = (index - 1) % items.length;
            var $next = items.eq(index);
            $next.css('left', '-50%');
            $next.animate({
                left: '50%'
            }, 1500);
        });
    }

    createSlider($('.Animate'), $('.Animate2'), $('.box'));
	
});