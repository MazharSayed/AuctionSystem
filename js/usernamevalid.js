  $('#email_check').blur(function(){
    var query_string = $(this).val();
    if(query_string.length>3) 
      
    {
      $.ajax({
        type: "POST",
        url: "email_valid.php",
        data: { name:query_string },
        success: function(data)
        {
          if(data=='exist')
          {
            $('#result_email').html('<font size=3 color=red>user already exist</font>');
            $('.login-submit').attr('disabled', 'disabled');
          }
          else
          {
            $('#result_email').html('<font size=3 color=green></font>');
            $('.login-submit').removeAttr('disabled');
          }       
        }
      });
    }
  });