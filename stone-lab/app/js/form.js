$(function () {

  $('#ageInputId').on('input', function(){
      var r = document.getElementById('ageInputId').value/130 + 'px';
      $('.thumb').css('left', r);

      ageOutputId.value = '$ '+ageInputId.value;
  })

   $('#ageInputId2').on('input', function(){
      var r = document.getElementById('ageInputId2').value*110 + 'px';
      $('.thumbTwo').css('left', r);

      ageOutputId2.value = ageInputId2.value + ' months';
  })
                  
}); 

$(window).on('load', function(){
    document.getElementById('form_first').reset();
    $('.range output').text('$ 1000');
    $('.rangeTwo output').text('1 months');
  })
