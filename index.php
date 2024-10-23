<?php

$a = 5;
$b = 6;
$c = $a+$b;
echo "hasil :". $c;
echo "<br>";
$a = 4;
$b = 2;
$c = $a-$b;
echo "hasil :". $c;
echo "<br>";
$a = 3;
$b = 1;
$c = $a*$b;
echo "hasil :". $c;
echo "<br>";
$a = 4;
$b = 2;
$c = $a/$b;
echo "hasil :". $c;
echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device width, initial-scale=1.0">
</head>

<body>
    <h1>kalkulator bang</h1>

   <form>
    <label for="n1">Number 1:</label>
    <input type="number" id="n1" number="n1"> <br>
    <label for="n2">Number 2:</label>
    <input type="number" id="n2" number="n2">    
   </form> 

    <?php
$angka1 = 6;
$angka2 = 3;
$operasi = "/";
switch ($operasi){
    case "+" :
    echo $angka2+$angka1;
    break;

    case "-":
        echo $angka2-$angka1;
        break;
        case "*":
            echo $angka2*$angka1;
            break;
            case "/":
                echo $angka2/$angka1;
                break;
        default:
        echo "pilih salah satu operator";
    }


?>
</body>






