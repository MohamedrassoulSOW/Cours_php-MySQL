<?php

require('actions/database.php');

//Recuperer les question par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, id_author, title, description, contenu, email_author, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //Le recherche
    $usersSearch = $_GET['search'];

    // Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bdd->query('SELECT id, id_author, title, description, contenu, email_author, date_publication FROM questions WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC ');


}