<?php
mysql_connect("localhost","root","");
mysql_select_db("prestashop1");
$a=mysql_query("SELECT * from ps_cart_product");
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

print "<table border=2><tr><th>Zopnow</th><th>bigbasket</th><th>Askmegrocery</th><th>SangamDirect</th><th>Irely</th></tr>";
echo $ab;
$query=mysql_query("select ps_product_attribute.reference,ps_product_attribute.price,ps_product_attribute.id_product_attribute from ps_product_attribute,
	ps_cart_product where ps_cart_product.id_cart='$ab' and ps_cart_product.id_shop=2 and  ps_product_attribute.id_product=ps_cart_product.id_product");

while($cmd=mysql_fetch_array($query))
{
	
	//$irely+=$cmd[1];
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
		and ps_product_attribute_shop.id_shop=5 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($p=mysql_fetch_array($d))
		   {
			   
			
			 $askmegrocery+=$p[2];  
			 print "<td>$p[0]==$p[2]</td>";
		   }
		   
		   
		   
		   $e=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=6 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($s=mysql_fetch_array($e))
		   {
			  
			  
			  $sangam+=$s[2];  
			 print "<td>$s[0]==$s[2]</td>";
		   }
		   
		   
		   
		   
		   $f=mysql_query("SELECT ps_product_attribute.reference,ps_product_attribute.id_product_attribute,ps_product_attribute_shop.price 
		from ps_product_attribute_shop,ps_product_attribute where ps_product_attribute.id_product_attribute=ps_product_attribute_shop.id_product_attribute 
		and ps_product_attribute_shop.id_shop=3 and ps_product_attribute.id_product_attribute='$cmd[2]'");
	
	       if($z=mysql_fetch_array($f))
		   {
			  
			  
			  $irely+=$z[2];  
			 print "<td>$z[0]==$z[2]</td>";
		   }
		   echo $irely;
		   
		   
		   
		   
		   print "</tr>";
	

}



?>