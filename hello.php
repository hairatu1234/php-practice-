<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Php practice</h2>  
   <?php
   //VARIABLES
   $nag="hello ";
   $num=5;
   $float=7.8;
   echo "<h1>".$nag."</h1>";
   echo "<h1>".$num."</h1>";
   echo "<h1>".$float."</h1>";
  // ARRAYS
   $fruits=array("banana","apple","orange","pineapple");
  echo var_dump($fruits);
  
  define("fruits","mango and apple");
  echo fruits;
  
  define("fruits",["mango","coconut and", "apple"]);
  echo fruits[2];
//  IF STATEMENT
$var=4;
if($var>6){
    echo"$var"*5;
}else
   {
    echo "you cant satisfy the condition";
}
$var=8;
if($var%2==0&&$var%3==0){
    echo "divisible by both";
    
}
else if($var%3==0||$var%2==0){
    echo "divible by only one";}
 //     SWITCH STATEMENT
$level =3;
switch($level){
case 1:
    echo"easy";
    break;
case 2:
     echo"medium";
     break;
case 3:
    echo"hard";
     break;
default:
    echo"still playing easy";
    break;}
//end of switch
//loops
$var=8;
for($k=1;$k<$var;$k++){
    echo "<h4>".$k."</h4>"."<br>";
}
?>






