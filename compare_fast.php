<html>
<head>
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
	
}
table.hovertable th {
	background-color:cyan;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: white;
}
.hovertable tr:hover{
	background-color:yellow;
}
</style>
</head>
<body>
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
$big_name="sumit";

$irely_price=0;
$big_price=0;
$sangam_price=0;
$zopnow_price=0;
$ask_price=0;


if(strpos($currenturl,$irely_name))
{
	echo "<h3 align=center style='background-color:green;color:white;'>WELCOME TO TRAATO COMPARE</h3>";
	echo "<table class='hoverTable'><tr><th style='color:blue;font-size:18px;'>Staple</th><th style='background-color:Cornsilk;font-size:15px;'>irely</th><th style='background-color:green;font-size:15px;'>zopnow</th><th style='background-color:pink;font-size:15px;'>askmegrocery</th><th style='background-color:orange;font-size:15px;'>sangam</th><th style='background-color:gray;font-size:15px;'>Bigbusket</th></tr>";
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$irely_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($irely1=mysql_fetch_row($irely))
	{
		
   echo "<tr><th>".$irely1[3]."</th>"."<td>".$irely1[2]."*".$my_cart1[5]."</td>";
   $irely_price+=$irely1[2]*$my_cart1[5];

	}


	
 $zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
		
	if($zopnow1=mysql_fetch_row($zopnow))
	{
	
   echo "<td>".$zopnow1[2]."</td>";
    $zopnow_price+=$zopnow1[2];
       
	}
	
	 $ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name')");
		
	if($ask1=mysql_fetch_row($ask))
	{
		
   echo "<td>".$ask1[2]."</td>";	
   $ask_price+=$ask1[2];
	}
	
	 $sangam=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name')");
		
	if($sangam1=mysql_fetch_row($sangam))
	{
   echo "<td>".$sangam1[2]."</td>";	
    $sangam_price+=$sangam1[2];
	}
	
	
	 $big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name')");
		
	if($big1=mysql_fetch_row($big))
	{
   echo "<td>".$big1[2]."</td></tr>";	
   $big_price+=$big1[2];
	}
	
}
echo "<tr><th style='background-color:red;font-size:17px;'>GRAND TOTAL</th><th style='background-color:Cornsilk;font-size:15px;'>$irely_price</th><th style='background-color:green;font-size:15px;'>$zopnow_price</th><th style='background-color:pink;font-size:15px;'>$ask_price</th><th style='background-color:orange;font-size:15px;'>$sangam_price</th><th style='background-color:gray;font-size:15px;'>$big_price</th></tr></table>";

}//irely
//zopnow code start


else if(strpos($currenturl,$zopnow_name))
{
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($zopnow1=mysql_fetch_row($zopnow))
	{
		
   echo $zopnow1[2]." ".$zopnow1[3]."<br>";

	}


	
 $irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name')");
		
	if($irely1=mysql_fetch_row($irely))
	{
	
   echo $irely1[1]." ".$irely1[2]."<br>";
       
	}
	
	 $ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name')");
		
	if($ask1=mysql_fetch_row($ask))
	{
		
   echo $ask1[1]." ".$ask1[2]."<br>";	

	
	}
	
	 $sangam=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name')");
		
	if($sangam1=mysql_fetch_row($sangam))
	{
   echo $sangam1[1]." ".$sangam1[2]."<br>";	
	}
	
	
	 $big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name')");
		
	if($big1=mysql_fetch_row($big))
	{
   echo $big1[1]." ".$big1[2]."<br>";	
	}
	
}
}//zopnow
//ask me bazer start

else if(strpos($currenturl,$ask_name))
{
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$ask_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($ask1=mysql_fetch_row($ask))
	{
		
   echo $ask1[2]." ".$ask1[3]."<br>";

	}


	
 $zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
		
	if($zopnow1=mysql_fetch_row($zopnow))
	{
	
   echo $zopnow1[1]." ".$zopnow1[2]."<br>";
       
	}
	
	 $irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name')");
		
	if($irely1=mysql_fetch_row($irely))
	{
		
   echo $irely1[1]." ".$irely1[2]."<br>";	

	
	}
	
	 $sangam=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name')");
		
	if($sangam1=mysql_fetch_row($sangam))
	{
   echo $sangam1[1]." ".$sangam1[2]."<br>";	
	}
	
	
	 $big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name')");
		
	if($big1=mysql_fetch_row($big))
	{
   echo $big1[1]." ".$big1[2]."<br>";	
	}
	
}
}//ask me bazer

//sangam start



else if(strpos($currenturl,$sangam_name))
{
	
	echo "<table class='hoverTable'><tr><td></td><td>sangam</td><td>bigbasket</td><td>irely</td><td>askmegrocery</td><td>zopnow</td></tr>";
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$sangam_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$sangam=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($sangam1=mysql_fetch_row($sangam))
	{
		
   echo "<tr><th>".$sangam1[3]."</th><td>".$sangam1[2]."</td>";
    $sangam_price+=$sangam1[2];
	}


	
 $zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
		
	if($zopnow1=mysql_fetch_row($zopnow))
	{
	
   echo "<td>".$zopnow1[2]."</td>";
       $zopnow_price+=$zopnow1[2];
	}
	
	 $irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name')");
		
	if($irely1=mysql_fetch_row($irely))
	{
		
   echo "<td>".$irely1[2]."</td>";	

	$irely_price+=$irely1[2];	
	}
	
	 $ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name')");
		
	if($ask1=mysql_fetch_row($ask))
	{
   echo "<td>".$ask1[2]."</td>";	
   $ask_price+=$ask1[2];
	}
	
	
	 $big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name')");
		
	if($big1=mysql_fetch_row($big))
	{
   echo "<td>".$big1[2]."</td>";	
   $big_price+=$big1[2];
	}
	
}

echo "<tr><th>GRAND TOTAL</th><td>$sangam_price</td><td>$big_price</td><td>$irely_price</td><td>$ask_price</td><td>$zopnow_price</td></tr>";
}//sangam

//start big
else
{
	echo "<table class='hoverTable'><tr><td></td><td>bigbasket</td><td>zopnow</td><td>irely</td><td>sangam</td><td>askmegrocery</td></tr>";
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$big_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($big1=mysql_fetch_row($big))
	{
		
   echo $big1[2]." ".$big1[3]."<br>";

	}


	
 $zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
		
	if($zopnow1=mysql_fetch_row($zopnow))
	{
	
   echo $zopnow1[1]." ".$zopnow1[2]."<br>";
       
	}
	
	 $irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name')");
		
	if($irely1=mysql_fetch_row($irely))
	{
		
   echo $irely1[1]." ".$irely1[2]."<br>";	

	
	}
	
	 $sangam=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name')");
		
	if($sangam1=mysql_fetch_row($sangam))
	{
   echo $sangam1[1]." ".$sangam1[2]."<br>";	
	}
	
	
	 $ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name')");
		
	if($ask1=mysql_fetch_row($ask))
	{
   echo $ask1[1]." ".$ask1[2]."<br>";	
	}
	
}

echo "<tr><th>GRAND TOTAL</th><td>$big_price</td><td>$zopnow_price</td><td>irely_price</td><td>sangam_price</td><td>ask_price</td></tr>";
}//big








?>
</body>
</html>
