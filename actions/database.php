<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=cours-php;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('Une erreur a été retrouvée : '. $e->getMessage());
}
?>