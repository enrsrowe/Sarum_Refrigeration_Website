/*$(document).ready(function() { 

  $('.photos').on('mouseenter', 'li', function() {
    $(this).find('span').slideToggle();
  }).on('mouseleave', 'li', function() {
    $(this).find('span').slideToggle();
  });

});*/

$(document).ready(function() { 
  $('#tour').on('click', 'button', function() { 
    $('.photos').slideToggle();
  });

  function showPhotos() {
    $(this).find('span').slideToggle();
  }
  $('.photos').on('mouseenter', 'li', showPhotos)
              .on('mouseleave', 'li', showPhotos);
});
