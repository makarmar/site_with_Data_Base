function stego (url, code)
{
  $("#img_new").html(""); 
  $.ajax({  
            type: "POST",
            url: "stego.php",  
            data: 'url_img='+url+'&stego_code='+code+'',
            cache: false,  
            success: function(html)
            { 
              $("#img_new").html(html);   
            }  
    });	
}

function destego (url)
{
  $("#img_new").html(""); 
  $.ajax({  
            type: "POST",
            url: "destego.php",  
            data: 'url_img='+url+'&stego_code='+code+'',
            cache: false,  
            success: function(html)
            { 
              $("#img_new").html(html);   
            }  
  });	
}