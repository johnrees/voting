(function() {

  jQuery(function() {
    return $('ul#options li').click(function() {
      var opt;
      $('li').addClass('submitted').unbind('click');
      $(this).text(parseInt($(this).text()) + 1);
      opt = $(this).data('opt');
      try {
        return $.ajax({
          url: "post.php",
          data: {
            post: 5,
            opt: 2
          },
          type: "POST",
          success: function(data, textStatus, jqXHR) {
            console.log("SUCCESS!");
            return console.log(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log("ERR");
            return console.log(errorThrown);
          }
        });
      } catch (error) {
        return console.log('derp');
      }
    });
  });

}).call(this);
