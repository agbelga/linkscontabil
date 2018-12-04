$(function() {

  var $window = $(window);

  $('section[data-type="background"]').each(function() {

    var $bgobj = $(this); 

    $(window).scroll(function() {

      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      var coords = '50% '+ yPos + 'px';

      $bgobj.css({ backgroundPosition: coords });

    }) 

  })

});

// scroll
jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
  event.preventDefault();
  $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600); 
  });
});

//filtro
$(function() {
  //$('.filtro').on( 'click', 'a', function(e) {
  $('.filtro').on( function(e) {
      e.preventDefault();
    
      var filterValue = $(this).attr('data-filter');
    
      if(filterValue == "all") {
        $(".lista .link").fadeIn('slow');
      } else {
        $(".lista .link").not("." + filterValue).hide();
        $("." + filterValue).fadeIn('slow');
      }
    
      $('.filtro li').removeClass('active');
      $(this).closest('li').addClass('active');
    
      $('.no-result').hide();$('#search').val('');
  });
  
  var rows = $('.lista li');
  $('.no-result').hide();
  
  $('#search').keyup(function() {
      $('.filtro li').removeClass('active');
    
      var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
      reg = RegExp(val, 'i'),
      text;

      rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
      }).hide();

      var visible = $('.link:visible').length;

      if(visible == 0) { 
        $('.no-result').show();
      } else { 
        $('.no-result').hide();
      }

  });
  
});


//tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

//slider
/*$('.carousel').carousel({
  interval: 7000,
  pause: false
})*/


//slider film roll on
jQuery(function() {
  this.film_rolls || (this.film_rolls = []);
  this.film_rolls['film_roll_1'] = new FilmRoll({
    container: '#film_roll_1',
    height: '+10'
  });
  this.film_rolls['film_roll_2'] = new FilmRoll({
    container: '#film_roll_2',
    height: 190,
    
  });
  $('#film_roll_2').on('film_roll:moving', function() {
    return setTimeout(function() {
      return $('#film_roll_2 div.film_roll_shuttle').removeClass('moving_left moving_right');
    }, 550);
  });
  this.film_rolls['film_roll_3'] = new FilmRoll({
    container: '#film_roll_3',
    height: 190,
    pager: false
  });
  return true;
});

//modal bootstrap
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

//modal agenda
$(function() {
  $('#seletor').change(function(){
    $('.mes').hide();
    $('#' + $(this).val()).show();
  });
});