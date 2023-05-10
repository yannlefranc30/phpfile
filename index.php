<!DOCTYPE html>
<html>
<body>

<?php
$number1 = 130;
$number2 = 160;

function addition() {
    $GLOBALS['z'] = $GLOBALS['number1'] + $GLOBALS['number2'];
}

addition();
echo $z;
?>

</body>
</html>

