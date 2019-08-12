$(function () {

	$(window).on('scroll', function(){

     	//showcase head scroll effec   
  
         var movement = parseInt($(this).scrollTop() );
       		$('.showcases_head').css({
				backgroundPositionY: 70 - movement + '%',
       });


	})

});