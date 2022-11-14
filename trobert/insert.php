<?php
require ('./ConnectionMySQL.php') ;
$nom = "Dahoumane";
$prenom = "Salim";
$connection = getconnection();

$statement = $connection ->prepare("INSERT INTO eleves(nom, prenom)VALUES(:nom,:prenom)");
$statement ->bindparam(':nom', $nom, pdo::PARAM_STR);
$statement ->bindparam(':prenom', $prenom, pdo::PARAM_STR);
/* $statement ->bindparam(1, $nom, pdo::PARAM_STR);
$statement ->bindparam(2, $prenom, pdo::PARAM_STR); */
$statement ->execute();