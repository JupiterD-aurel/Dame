<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dame</title>
</head>
<body>


<div class="noir">
<?php

$table = "1";


echo  $table[0] ;
echo "<br>";

?>

<div class="blanc">
<?php

$table2 = "1";

echo  $table2[0] ;
echo "<br>";



$tab = [
    $table,
    $table2,
];

while ($tab < 16)
{
    echo "$tab";
    echo "<br/>";
    ++$tab;
}

?>

</div>

</body>
</html>