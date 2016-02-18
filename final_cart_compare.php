

<?php

mysql_connect("localhost","root","");
mysql_select_db("prestashop1");
$root=mysql_query("select name from url");
if($url_now=mysql_fetch_array($root))
$currenturl=$url_now[0];
$irely_name="irely";
$zopnow_name="zopnow";
$ask_name="askmegrocery";
$sangam_name="sangamdirect";

if(strpos($currenturl,$irely_name))
{
	// Get id of the vendor from table ps_shop and then compare 
	
	$TrArProductInfo=mysql_query("SELECT * from ps_cart_product where id_shop=3");
	$ab=0;
	while($TrRwProductInfo=mysql_fetch_array($TrArProductInfo))
	{
		$ab=$TrRwProductInfo[0];
	}
	$big=0;
	$sangam=0;
	$zopnow=0;
	$irely=0;
	$askmegrocery=0;
	$askmegrocery1=0;

	print "<table border=2><tr><th>irely</th><th>zopnow</th><th>Askmegrocery</th><th>SangamDirect</th><th>sangam</th></tr>";

	$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute,ps_product_attribute.id_product from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=3 and ps_product_attribute.id_product=ps_cart_product.id_product");

	while($cmd=mysql_fetch_row($query))
	{
	
	
		$irely+=$cmd[1];
		print "<tr><td>$cmd[0]==$cmd[1]==$cmd[3]</td>";
	
		$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=2 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $zopnow=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=1 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $big=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=5 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $askmegrocery=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $sangam=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
	
	
	
	
	
	
	
	
	
	
}

echo "</table>";
	
		
}//irely
else if(strpos($currenturl,$zopnow_name))
{

$a=mysql_query("SELECT * from ps_cart_product where id_shop=2");
$ab=0;
while($aa=mysql_fetch_array($a))
{



$ab=$aa[0];

}
$big=0;
$sangam=0;
//$peppertap=0;
$zopnow=0;
$irely=0;
$askmegrocery=0;


print "<table border=2><tr><th>zopnow</th><th>askmegrocery</th><th>bigbasket</th><th>SangamDirect</th><th>irely</th></tr>";
echo $ab;
$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute,ps_product_attribute.id_product from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=2 and ps_product_attribute.id_product=ps_cart_product.id_product");

while($cmd=mysql_fetch_row($query))
{
	
	
	$zopnow+=$cmd[1];
	print "<tr><td>$cmd[0]==$cmd[1]==$cmd[3]</td>";
	
	$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=5 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $askmegrocery=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=1 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $big=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $sangam=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=3 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $irely=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
	
	
	
	
	
	
	
	
	
	
}

echo "</table>";




}//zopnow
else if(strpos($currenturl,$ask_name))
{
$a=mysql_query("SELECT * from ps_cart_product where id_shop=5");
$ab=0;
while($aa=mysql_fetch_array($a))
{



$ab=$aa[0];

}
$big=0;
$sangam=0;

$zopnow=0;
$irely=0;
$askmegrocery=0;


print "<table border=2><tr><th>askmegrocery</th><th>zopnow</th><th>bigbasket</th><th>SangamDirect</th><th>irely</th></tr>";
echo $ab;
$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute,ps_product_attribute.id_product from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=5 and ps_product_attribute.id_product=ps_cart_product.id_product");

while($cmd=mysql_fetch_row($query))
{
	
	
	$askmegrocery+=$cmd[1];
	print "<tr><td>$cmd[0]==$cmd[1]==$cmd[3]</td>";
	
	$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=2 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $zopnow=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=1 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $big=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $sangam=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=3 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $irely=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
	
	
	
	
	
	
	
	
	
	
}

echo "</table>";


}//askmegrocery
else if(strpos($currenturl,$sangam_name))
{


}//sangam

else
{
	$a=mysql_query("SELECT * from ps_cart_product where id_shop=1");
$ab=0;
while($aa=mysql_fetch_array($a))
{



$ab=$aa[0];

}
$big=0;
$sangam=0;
//$peppertap=0;
$zopnow=0;
$irely=0;
$askmegrocery=0;
$askmegrocery1=0;

print "<table border=2><tr><th>bigbasket</th><th>zopnow</th><th>Askmegrocery</th><th>SangamDirect</th><th>Irely</th></tr>";
echo $ab;
$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute,ps_product_attribute.id_product from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=1 and ps_product_attribute.id_product=ps_cart_product.id_product");

while($cmd=mysql_fetch_row($query))
{
	
	
	$big+=$cmd[1];
	print "<tr><td>$cmd[0]==$cmd[1]==$cmd[3]</td>";
	
	$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=2 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $zopnow=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=3 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $irely=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=5 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $askmegrocery=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
		  
		  $b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product='$cmd[3]'");
          
          if($g=mysql_fetch_array($b))
		  {
			  $sangam=+$g[2];
			  print "<td>$g[0]==$g[2]</td>";
			  
		  }
	
	
	
	
	
	
	
	
	
	
}

echo "</table>";
	
	
}//bigbusket

?>
