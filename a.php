<?php
var_dump($_FILES);
var_dump($_POST);

$ruta = "img/".$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
echo "$ruta";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <img src="<?= $ruta?>" alt="">  
</body>
</html>


