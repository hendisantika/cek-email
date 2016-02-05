<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cek Email Di Database Via Ajax Dengan jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#email").change(function() 
	{
		var email = $("#email").val();
		$("#stts").html('Sedang mengecek email...');
		$.ajax({
			type: "POST",  
			url: "cek.php",
			data: "email="+ email,
			success: function(hasil){  
			$("#stts").ajaxComplete(function(event, request){ 
		
				if(hasil == 'yes')
				{ 
					$("#stts").html('<img src="tersedia.jpg" align="absmiddle"> <font color="blue"><b>Email Tersedia</b></font>');
				}  
				else  if(hasil == 'no')
				{  
					$("#stts").html('<img src="tidak-tersedia.jpg" align="absmiddle"> <font color="red"><b>Email Tidak Tersedia</b></font>');
				}  
		   });
		   } 
		   
		  }); 
	return false;
	});

});
</script>
<style type="text/css">
body {
	font-family:Arial;
	font-size:12px;
	margin:0px auto;
	padding:0px;
}
#stts {
	font-size:11px;
	margin-left:10px;
	float:right;
}
.inp{
	background-color:#f4f4f4;
	padding:10px;
	border:1px dashed #333333;
}
#content {
	margin:50px auto;
	width:530px;
}
</style>
</head>
<body>
<div id="content">
  <form>
    <div class="style_form">
      <label>Masukkan Email :</label>
      <input type="text" name="email" id="email" class="inp" size="35">
      <div id="stts"></div> </div>
  </form>
</div>
</body>
</html>
