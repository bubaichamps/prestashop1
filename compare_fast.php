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

if(strpos($currenturl,$irely_name))
{
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$irely_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$irely=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$irely_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

	if($irely1=mysql_fetch_row($irely))
	{
		
   echo $irely1[2]." ".$irely1[3]."<br>";

	}


	
 $zopnow=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$zopnow_name')");
		
	if($zopnow1=mysql_fetch_row($zopnow))
	{
	
   echo $zopnow1[1]." ".$zopnow1[2]."<br>";
       
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
$my_cart=mysql_query("select * from ps_cart_product where id_shop=(select id_shop from ps_shop where name='$sangam_name')");
while($my_cart1=mysql_fetch_array($my_cart))
{
	
	
$ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price,name.reference from ps_product_attribute_shop as shop,ps_product_attribute as name where
 shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$sangam_name') and shop.id_product_attribute='$my_cart1[4]' and shop.id_product_attribute=name.id_product_attribute");

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
	
	 $ask=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$ask_name')");
		
	if($ask1=mysql_fetch_row($ask))
	{
   echo $ask1[1]." ".$ask1[2]."<br>";	
	}
	
	
	 $big=mysql_query("select shop.id_product,shop.id_product_attribute,shop.price from ps_product_attribute_shop as shop where
 shop.id_product_attribute='$my_cart1[4]' and shop.id_product='$my_cart1[1]' and shop.id_shop=(select id_shop from ps_shop where name='$big_name')");
		
	if($big1=mysql_fetch_row($big))
	{
   echo $big1[1]." ".$big1[2]."<br>";	
	}
	
}
}//sangam

//start big
else
{
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
}//ask me bazer








?>
