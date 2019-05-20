$('form.frmBox').on('submit', function(){
  var that = $(this),
  url = that.attr('action'),
  type = that.attr('method'),
  data = {};

    that.find('[name]').each(function(){
      var that = $(this),
        name = that.attr('name'),
        value = that.val();

      data[name] = value;
    });

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response){
        if (response == "1001") {
          $('#error').html('Fel efternamn eller SODKOD')
        } else if (response == "1002") {
          $('#error').html('Var vänlig och boka en tid som inte redan är bokad.')
        } else if (response == "1003") {
          $('#error').html('Du har uppnåt dina 5 max bokningar per vecka.')
        } else if (response == "1004") {
          $('#error').html('Du har uppnåt dina 2 max bokningar per dag.')
        } else if (response == "1000") {
          $('#succes').html('Tack för din bokning!')
          $('.slide').animate({right: '-60%'});
          $('.overlay').fadeOut();
          $('#surname').val('');
          $('#sodkod').val('');
          $('#error').html('');
        }
      }//SUCCES FUNCTION
    });//AJAX FUNCTION

  return false;
});
