<?php
session_start();
if (!isset($_SESSION['user1'])) {
   echo "Bienvenu c'est votre première visite<br>";
   $_SESSION['user1']= 'aymen';
} else {
    echo "Bonjour ${_SESSION['user1']}<br>";
}
$infos = [
  'name' => 'sellaouti',
  'fistname' => 'aymen'
];

foreach ($infos as $key => $valeur ) {
    echo "${key} : ${valeur} <br>";
}

var_dump(getdate());

var_dump($GLOBALS);