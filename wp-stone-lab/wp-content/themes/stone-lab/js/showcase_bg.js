$(function () {

	$(window).on('scroll', function(){

     	//showcase head scroll effec 
  
        var movementTop = parseInt($(this).scrollTop() / 50);
   
        if(movementTop <= 10){
       		$('.wrapper4-effect').css('opacity', (movementTop/10));

        }  else {return;}

	})


})
/*
	$(window).on('load', function(){


		  $('#lasr').on("click", function(e){

        var data;

        $.ajax({
    		type: "GET",
   			url: "http://wp-stone-lab/wp-content/themes/stone-lab/inc/ajax.php",
   			dataType: "json",	
    	
    		success: function(data){
            $('.htm').html(data);
    }
     
  });
   
	})

});

  */ 
