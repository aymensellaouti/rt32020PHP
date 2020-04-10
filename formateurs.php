<?php
require 'Formateur.php';
$formateurModel = new Formateur();
$formateurs = $formateurModel->findAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
    <tr>
        <th>Formateur</th>
        <th>Actions</th>
    </tr>
    <?php
    foreach ($formateurs as $formateur) {
        ?>
        <tr>
            <td><?= $formateur->name ?></td>
            <td>
                <a href="deleteFormateur.php?id=<?= $formateur->id?>">X</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>
