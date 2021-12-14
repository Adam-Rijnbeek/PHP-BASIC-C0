<!DOCTYPE html>
<html>
<body>

    
<?php
$var1 = 3;

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
echo "<br>";
$var2 = 4;

if($var2 < 12 || $var2 > 3) {
    echo "het getal zit tussen de 12 en de 3!";
} else {
    echo "het getal is groter dan 12 of kleiner dan 3!";
}
echo "<br>";
$var3 = 7;

if($var3 < 20 xor $var3 > 5) {
    echo "het getal zit tussen de 20 en de 8!";
} else {
    echo "het getal is groter dan 20 of kleiner dan 8!";
}
echo "<br>";
$var4 = 10;

if($var4 < 30 != $var4 > 12) {
    echo "het getal zit tussen de 30 en de 12!";
} else {
    echo "het getal is groter dan 30 of kleiner dan 12!";
}









?>

</body>
</html> 