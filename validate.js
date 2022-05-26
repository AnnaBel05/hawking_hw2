$(document).ready(function()
{
    var name = '';
  
      $('#submit').click(function()
      {
  
        if(name == ''){
          alert('Please, put data to the name field');
        }else{
          $.ajax({
            type: 'POST',
            url:'main.php',
            data:'name='+name,
            success:function(msg){
              $('#message').html(msg);
            }
          });
        }
      });
  
  });