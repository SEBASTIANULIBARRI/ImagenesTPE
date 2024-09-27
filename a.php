<?php
var_dump($_FILES);
var_dump($_POST);

$ruta = "img/".$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
echo "$ruta";

?>

<img src="<?= $ruta?>" alt="">