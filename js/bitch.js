pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#email").change(function() { 

var eml = $("#email").val();

if(eml.length >= 8)
{
$("#state").html('<img src="pic/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "checkemail.php",  
    data: "email="+ eml,  
    success: function(msg){  
   
   $("#state").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#email").removeClass('object_error'); // if necessary
		$("#email").addClass("object_ok");
        $(this).html('&nbsp;<img src="pic/tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#email").removeClass('object_ok'); // if necessary
		$("#email").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
    $("#state").html('<font color="red">Please enter valid Email Address.</font>')
	$("#email").removeClass('object_ok'); // if necessary
	$("#email").addClass("object_error");
	}

});

});
