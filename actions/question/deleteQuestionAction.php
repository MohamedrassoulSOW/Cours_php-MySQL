<?php

session_start();
if(isset($_SESSION['auth']));
header('Location: ../../login.php');


require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheQuestion = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT id_author FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['id_author'] == $_SESSION['id']){

            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            header('Location: ../../my-questions.php');

        }else{
    echo "Vous ne pouvez pas supprimer une question qui ne vous appartient pas!";
}

    }else{
    echo "Aucune question n'a été trouvé.";
}

}else{
    echo "Aucune question n'a été trouvé.";
}