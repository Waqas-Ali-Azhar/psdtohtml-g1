<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <style type="text/css">
    .total{
      color:  purple;
    }
  </style>
</head>
<body>



<?php


// assignment
$name = "waqas";

?>

<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

<?php


$number = 9;


$maths = 99;
$english = 22;
$urdu = 31;

echo "<span>Good Morning</span>";
echo "<br>";


function sum($a,$b,$c){

  $sum = $a+$b+$c;

  if($sum > 0){
    echo "<br>";
    echo "running summation operation";
    return $a+$b+$c;
  }
  
  else{

    echo "<br>";
    echo "sum is not above 0";

  }
  return 0;
  
}

$total = sum($maths , $english , $urdu);

echo "<br>";


echo '<span class="total">'.$total.'</span>';

echo "<br>";







 ?>

 </body>
</html>