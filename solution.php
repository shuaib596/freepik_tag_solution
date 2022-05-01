<!DOCTYPE html>
<html>
<body>

<?php 

$str = "nature day environment day world day environmental protection international day world environment environment flora and fauna save planet fauna save environment save the world environment ecology save nature world illustration eco world ecology event illustrations nature illustration celebration june awareness international nature world nature flowers day gradient global";

$lowerCaseString = strtolower($str);

$str_toa = array_unique(explode(" ", $lowerCaseString));  

echo implode(", ",$str_toa);
 

?>

</body>
</html>
