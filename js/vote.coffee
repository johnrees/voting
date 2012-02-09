jQuery ->
  $('ul#options li').click ->
    $('li').addClass('submitted').unbind('click')

    $(this).text(parseInt($(this).text())+1)
    opt = $(this).data('opt')

    try
      $.ajax
        url: "post.php"
        # dataType: "json"
        data: { post: 5, opt: 2 }
        type: "POST"
        # data: {criteria: { post_id : 5 }, object : { $inc : { opt_2 : 1 } }, upsert: true }
        success: (data, textStatus, jqXHR)->
          console.log("SUCCESS!")
          console.log(data)
        error: (jqXHR, textStatus, errorThrown)->
          console.log("ERR")
          console.log(errorThrown)
    catch error
      console.log 'derp'