<?php
mysql_connect("localhost","root","");
mysql_select_db("prestashop1");
if(isset($_POST["submit"]))
{
$take_pin=$_POST['pincode'];//getting pin code from pinui.html
$pin_details=mysql_query("select pin from bigbasket where pin=$take_pin");
if($pin=mysql_fetch_array($pin_details))
 header("Location: http://localhost/prestashop1/");	

else
	header("Location: http://localhost/prestashop1/irely/");
}

?>
