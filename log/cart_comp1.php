<?php
mysql_connect("localhost","root","");
mysql_select_db("prestashop1");
$a=mysql_query("SELECT * from ps_cart_product");

$ab;


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

print "<table border=2><tr><th>Askmegrocery</th><th>bigbasket</th><th>Irely</th><th>SangamDirect</th><th>Zopnow</th></tr>";

$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=1 and ps_cart_product.id_product_attribute=ps_product_attribute.id_product_attribute 
				and ps_product_attribute.id_product=ps_cart_product.id_product");

while($cmd=mysql_fetch_array($query))
{
	$zopnow+=$cmd[1];
	print "<tr><td>$cmd[0]==$cmd[1]</td>";
	
	$b=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=1 and ps_product_attribute.id_product_attribute='$cmd[2]'");
          
          if($a=mysql_fetch_array($b))
		  {
			  $big=$big+$a[2];
			  print "<td>$a[0]==$a[2]</td>";
			  
		  }
			  
		  
           
		  
		
		
		$c=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=3 and ps_product_attribute.id_product_attribute='$cmd[2]'");
              
			  if($i=mysql_fetch_array($c))
			  {
				  
				  //$peppertap+=$i[2];
				 // print "<td>$i[0]==$i[2]</td>";
			  }
			  
			  
		
		
		$d=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=4 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($p=mysql_fetch_array($d))
		   {
			   
			 $sangam+=$p[2];  
			 print "<td>$p[0]==$p[2]</td>";
		   }
		   
		   
		   
		   $e=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=5 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($s=mysql_fetch_array($e))
		   {
			  
			 $irely=$irely+$s[2];  
			 print "<td>$s[0]==$s[2]</td>";
		   }
		   
		   
		   
		   
		   $f=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($z=mysql_fetch_array($f))
		   {
			  
			 $askmegrocery+=$z[2];  
			 print "<td>$z[0]==$z[2]</td>";
		   }
		   
		   
		   
		   
		   
		   print "</tr>";
	

}
echo "</table>";

print "<table border=1><tr><td>Askmegrocery price==$askmegrocery</td></tr><tr><td>Bigbasket price==$big</td></tr><tr><td>Irely price==$irely</td></tr><tr><td>SangamDirect price==$sangam</td></tr><tr><td>zopnow price=$zopnow</td></tr></table>";




?>