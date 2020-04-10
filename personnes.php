<?php
require 'Personne.php';
$personneModel = new Personne();
$personnes = $personneModel->findAll();
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
          <th>Personne</th>
          <th>Actions</th>
         </tr>
     <?php
     foreach ($personnes as $personne) {
     ?>
         <tr>
          <td><?= $personne->name ?></td>
          <td>
           <a href="deletePersonne.php?id=<?= $personne->id?>">X</a>
          </td>
         </tr>
     <?php
      }
     ?>

    </table>
</body>
</html>
