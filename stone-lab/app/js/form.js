$(function () {

  $('#ageInputId').on('input', function(){

      var slide_value = document.getElementById('ageInputId').value,
          total_value = slide_value/130 + 'px';

      $('#ageInputId').attr('value', slide_value);
      $('.thumb').css('left', total_value);

      ageOutputId.value = '$ '+ ageInputId.value;
  })

   $('#ageInputId2').on('input', function(){
      var slide_value = document.getElementById('ageInputId2').value,
          total_value = slide_value*110 + 'px';

      $('#ageInputId2').attr('value', slide_value);
      $('.thumbTwo').css('left', total_value);

      ageOutputId2.value = ageInputId2.value + ' months';

  })
                  
}); 


$(window).on('load', function(){
    document.getElementById('form_first').reset();
    $('.range output').text('$ 1000');
    $('.rangeTwo output').text('1 months');
  });




$(function () {
  $('.form-check-input').on('change', function(){

    if(this.checked) {
      var card = $(this).parent().children()[1];
      var index = $(card).attr('data-index');
      var card_mass = $('.radio_card');


      function reset() {
         $(card_mass).css({
          'background' : '',
          'background-position': '',
          'box-shadow': '',
          'color': '#232323'
         })

          $('.radio_card img').attr('src', 'assets/svg/red-radiobutton.svg');
   
      }

      switch(index) {
        case '1': 
          reset();
        $(card_mass[0]).css({
          'background' : '#ed1a3a url("/assets/svg/idea-white.svg") no-repeat',
          'background-position': 'bottom calc(0% + 12px) right calc(0% + 12px)',
           'box-shadow': '0 20px 30px 0 rgba(208, 2, 27, 0.2)',
          'color' : '#ffffff',
        })

        $('.radio_card img:eq(0)').attr('src', 'assets/svg/white-radiobutton.svg');
       
        break;


        case '2':
          reset();
        $(card_mass[1]).css({
          'background' : '#ed1a3a url("/assets/svg/investments icon white.svg") no-repeat',
          'background-position': 'bottom calc(0% + 12px) right calc(0% + 12px)',
          'box-shadow': '0 20px 30px 0 rgba(208, 2, 27, 0.2)',
          'color' : '#ffffff',
        })

        $('.radio_card img:eq(1)').attr('src', 'assets/svg/white-radiobutton.svg');
        break;


        case '3':
          reset();
        $(card_mass[2]).css({
          'background' : '#ed1a3a url("/assets/svg/development-white.svg") no-repeat',
          'background-position': 'bottom calc(0% + 12px) right calc(0% + 12px)',
          'box-shadow': '0 20px 30px 0 rgba(208, 2, 27, 0.2)',
          'color' : '#ffffff',
        })

        $('.radio_card img:eq(2)').attr('src', 'assets/svg/white-radiobutton.svg');
        break;


        case '4':
          reset();
        $(card_mass[3]).css({
          'background' : '#ed1a3a url("/assets/svg/complete icon white.svg") no-repeat',
          'background-position': 'bottom calc(0% + 12px) right calc(0% + 12px)',
          'box-shadow': '0 20px 30px 0 rgba(208, 2, 27, 0.2)',
          'color' : '#ffffff',
        })
        $('.radio_card img:eq(3)').attr('src', 'assets/svg/white-radiobutton.svg');
        break;

        default:
        return;
      }

    }

  })
                  
}); 


/*Add files to multiple download*/

$(function () {

  var inputs = document.querySelectorAll('.inputfile');

  Array.prototype.forEach.call(inputs, function(input){

    var label  = input.previousElementSibling,
    labelVal = label.innerHTML;
    input.addEventListener('change', function(e){
    console.log(inputs);
          var fileName = '';

          if( this.files && this.files.length > 1 )
          fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
          else 
          fileName = e.target.value.split( '\\' ).pop();    
          if( fileName )
          label.querySelector( 'span' ).innerHTML = '<div class="downloadFile_block"><img class="icon_file" src="assets/svg/doc-blue.svg" alt="doc-blue">' + fileName + '<img id="reset_value" src="assets/svg/close icon small.svg" alt="close icon small"></div>';
    else
      label.innerHTML = labelVal;
  });

//input.addEventListener('focus', function(){ input.classList.add( 'has-focus' ); });input.addEventListener('blur', function(){ input.classList.remove( 'has-focus' ); });

});


}); 


/*Clear multiple download*/

$(function () {
  $('.file_name').on('click', '.downloadFile_block #reset_value', function(){
    $('.downloadFile_block').remove();
     document.getElementById("file").value = null;
    })
      
});

  /*For animate inputs*/
$('.general_input').on('input', function(){
    var $this = $(this);
    if ($this.val() == '') {
        $this.removeClass('placeholder-animate_filled');
    } else {
        $this.addClass('placeholder-animate_filled');
    }
});




/*Switch type form*/

$(function () {

  $('.type_form a').on('click', function(){

    var atr = $(this).parent().attr('data'),
        smallFormAttr = $('.small_form').attr('data'),
        bigFormAttr = $('.big_form').attr('data'),
        link_small = $('.small_form a'),
        link_big = $('.big_form a');
       

   // small form

  if(bigFormAttr == 'true' && smallFormAttr == 'false') {

      link_small.css({'color' : '#ef1c3b'})
      link_big.css({'color' : '#02bdf3'})
 
      $('.big_form').css({
          'border-bottom': '4px solid #02bdf3',
      }).attr('data', 'false');

      $('.small_form').css({
        'border-bottom': '4px solid #ef1c3b',
      }).attr('data', 'true');

  } else if(bigFormAttr == 'false' && smallFormAttr == 'true') { // big form

      link_small.css({'color' : '#02bdf3'})
      link_big.css({'color' : '#ef1c3b'})
 
      $('.small_form').css({
        'border-bottom': '4px solid #02bdf3',
      }).attr('data', 'false');

      $('.big_form').css({
        'border-bottom': '4px solid #ef1c3b',
    }).attr('data', 'true');

    } 
  
  })
});





  



  




