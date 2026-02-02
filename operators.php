<?php

/* OPERATORS : Operators are basically take signals and provuide output on it 

In Php language basically these types of operators are available 

1. Arithmetic Operator  
2. Assignment Operator 
3. Comparison Operator
4. Increment / Decrement Operator
5. String Operator 
6. Array / Conditional Operator
7. Logical Operator

*/

//Arithmetic operators : Use to perform all mathematical operations

$a=10;
$b=5;

echo $a+$b;echo "<br><br>";
echo $a-$b;echo "<br><br>";
echo $a*$b;echo "<br><br>";
echo $a/$b;echo "<br><br>";
echo $a%$b;echo "<br><br>";
echo $a**$b;echo "<br><hr>";

// Assignment Operator : Herewe can assign one variable's value to others and perform operation on it 

$a = $a + $b ;
echo $a; echo "<br><br>"; // here the value of $a = 15

$a+=$b; // here value of $b assigned to $a 

echo $a; echo "<br><hr>";

//Comparison Operator : here we comoare two variable's values and alway get result in boolean format
$a=10;
$b=20;

var_dump($a==$b); echo "<br><br>";
var_dump($a===$b); echo "<br><br>";
var_dump($a!=$b);echo "<br><hr>";

//Increment and decrement operator : This operator is use to increase or decrease the value of variables 

$a = 10 ;
echo ++$a;echo "<br><br>"; //Increase variables's value by 1
echo $a++;echo "<br><br>";//Increase variables's value by 1

$a=5;
echo --$a;echo "<br><br>";//Decrease variables's value by 1
echo $a--;//Decrease variables's value by 1
echo "<br><br> <hr>";

//Strings and Strings Operators
$name="Harsh";
$str1="Peter";
$str2="10";

echo "Hey $name how are you? Is everything Okay. And tell me one thing that know heard somthing about, $str1 I think is $str2 out of $str2.";

echo "<br><hr>";

//concatenation

echo $str1.$str2;


//Please refer Other files for next part of operators

?>