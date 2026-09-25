<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
$a = 5;
$b = 4;
$c = 3;
$d = 2;


$result = (($a / $c) * ($b / $d)) - (($a * $b - $c) / ($c * $d));

?>
   

<?php

$x = 4;
$y = 2;

$result2 = ($x + $y)/($y + 1) - ($x * $y - 12)/(34 + $x);




?>



<?php

$x = 8;
$y = 5;



$result3 = (($x + 1)/($x - 1))**$x + 18 * $x * $y**2 ;

$result4 = (1 + 1/$x**2)**$x - 12 * $x**2 * $y ;
?>




<?php

echo "Результат формулы 1: " , $result , "<br>";
echo "Результат формулы 2: " , $result2 , "<br>";
echo "Результат формулы 3: " , $result3 , "<br>";
echo "Результат формулы 4: " , $result4 , "<br>";


?>





</body>
</html>