require('./bootstrap');
import 'bootstrap';
var $ = require('jquery');

$(document).ready(function() {

  $('.explore').click(function() {
    $('.home').fadeOut(250);
    setTimeout(function(){
      $('.portfolio').fadeIn("slow");
    }, 250);

  });

});
