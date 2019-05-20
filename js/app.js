//UPDATE BOOKINGS EVERY SECOND START
$(document).ready(function(){
  setInterval(function(){
      $("#bookedOne").load('bookings/roomOne.php')
  }, 1000);
});

$(document).ready(function(){
  setInterval(function(){
      $("#bookedTwo").load('bookings/roomTwo.php')
  }, 1000);
});

$(document).ready(function(){
  setInterval(function(){
      $("#bookedThree").load('bookings/roomThree.php')
  }, 1000);
});

$(document).ready(function(){
  setInterval(function(){
      $("#bookedFour").load('bookings/roomFour.php')
  }, 1000);
});

//PASTE JS CODE FOR NEW ROOMS HERE




//UPDATE BOOKINGS EVERY SECOND END


//REMOVE OVERLAY AND CLOSING SIDEBAR START
$(document).ready(function(){
  $('.overlay').click(function(){
    if ($(window).width() < 1200) {
      $('.slide').animate({right: '-60%'});
      $('.overlay').fadeOut();
    } else {
      $('.slide').animate({right: '-60%'});
      $('.overlay').fadeOut();
    }
  });

  $('#close').click(function(){
    if ($(window).width() < 1200) {
      $('.slide').animate({right: '-60%'});
      $('.overlay').fadeOut();
    } else {
      $('.slide').animate({right: '-60%'});
      $('.overlay').fadeOut();
    }
  });
});
//REMOVE OVERLAY AND CLOSING SIDEBAR END


//SHOWING OVERLAY AND SETS CORRECT VALUES TO SIDEBAR START
$(document).ready(function (e) {
  $('.button').click(function(){
    var room = event.target.id;
    $('.slide').animate({right: '0'});
    $('.overlay').fadeIn();
    $('#room').val(room);
    var text = room.substring(4);
    $('#roomText').html('Boka grupprum '+text);

  });
});
//SHOWING OVERLAY AND SETS CORRECT VALUES TO SIDEBAR END
