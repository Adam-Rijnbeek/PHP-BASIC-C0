<!DOCTYPE html>
<html>
<body>

    
<?php
$myHeroes =  ['Spiderman', 'Thor', 'Iron man'];
echo $myHeroes[0] = 'Spiderman';
echo "<br>";
echo $myHeroes[1] = 'Thor';
echo "<br>";
echo $myHeroes[2] = 'Iron man';
array_push($myHeroes, 'Hulk' );
print_r($myHeroes);



?>

</body>
</html> 