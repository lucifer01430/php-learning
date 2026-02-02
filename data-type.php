<?php

$name="Harsh Pandey";

echo "$name<br><br>";

//var_dump is basically use to debug any data type in php which shows the data-type with their size and other details 

echo var_dump($name); // This shows string data type
echo "<br><br>";

$num1="10";// This shows string data type due to quotes
echo var_dump($num1);
echo "<br><br>";


$num=10; // Integer Data Type
echo var_dump($num);
echo "<br><br>";


$num2=10.6; //Float Data Type
echo var_dump($num2);
echo "<br><br>";

$num3=True; // Boolean Data Type
echo var_dump($num3);
echo "<br><br>";

$num4 = null;//Null Data Type 
echo var_dump($num4);
echo "<br><br>";

//$user=newClassName(); Class Data Type  


$connection=ftp_connect("127.0.0.1") or die("localhost Not Found"); //Special Data Type
echo var_dump($connection)


//NOTE : In php no any character data tye available so that we just use string data type




?>