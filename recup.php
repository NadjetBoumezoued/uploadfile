<?php
var_dump($_POST);
var_dump($_FILES);
$cheminEtNomTemporaire = $_FILES['fichier']['tmp_name'];
$cheminEtNomDefinitif = 'up/'.$_FILES['fichier']['name'];

$moveIsOK = move_uploaded_file($cheminEtNomTemporaire, $cheminEtNomDefinitif);

if($moveIsOK)
{
    $message = "le fichier a ete uploade ";
}
else {
    $message = "failed ";
}
?>




<html>
    <head>
        <title>traitement</title>
    </head>
<body>

    <p><?= $message ?></p>
</body>
</html>