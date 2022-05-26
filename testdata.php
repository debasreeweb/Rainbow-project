<?php
//  echo "<pre>";
//  print_r($_GET);
//  echo "</pre>";

 echo "<br>";
 echo $_GET['number1'].'  ';
 echo $_GET['number2'];
 $a=$_GET['number1'];
 $b=$_GET['number2'];
 $sign=$_GET['operation'];

 switch($sign)
 {
     case '+':
        $sum=$a +$b;
        echo '<h1>you choose addition operation so the result is'.$sum.'<h1>';
        break;
    case '-':
        $sub=$a-$b;
        echo '<h1>you choose subtraction operation so the result is'.$sub.'<h1>';
        break;

    case '/':
        $div=$a/$b;
        echo '<h1> you choose division operation so the result is'. $div.'<h1>';
        break;   

     case '*':
        $mul=$a * $b;
        echo '<h1>you choose multiplication operation so the result is'.$mul.'<h1>';
        break;

 }
 
?>
