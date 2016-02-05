<?php
include('koneksi.php');
if(isset($_POST['email']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$cek = mysql_query("SELECT * FROM member WHERE email='$email'") or die(mysql_error());
	$count = mysql_num_rows($cek);
	if($count == 0)
	{
		echo 'no';
	}
	else
	{
		echo 'yes';
	}
}

?>