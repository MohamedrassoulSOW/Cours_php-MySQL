<?php

require('actions/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['answer'])){

        $users_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bdd->prepare('INSERT INTO commentaire (id_author, email_author, id_question, contenu)VALUES(?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['email'], $idOfTheQuestion, $users_answer));

    }
}