<?php
require 'Personne.php';
if ($_GET['id']) {
    $personne = new Personne();
    $personne->delete($_GET['id']);
    header('location:personnes.php');
}else {
    header('location:personnes.php?error=id innexistant');
}