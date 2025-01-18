<?php

require('actions/database.php');

// Vérifier si id de la question est bien passé en parametre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    // Vérifier si les questions existent
    $checkIfQuestionExixts = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExixts->execute(array($idOfQuestion));

    if($checkIfQuestionExixts->rowCount() > 0){

        // Recupérer les données de la question
        $questionInfos = $checkIfQuestionExixts->fetch();
        if($questionInfos['id_author'] == $_SESSION['id']){

            $question_title = $questionInfos['title'];
            $question_description = $questionInfos['description'];
            $question_contenu = $questionInfos['contenu'];
            $question_date = $questionInfos['date_publication'];

            $question_description = str_replace('<br />', '', $question_description);
            $question_contenu = str_replace('<br />', '', $question_contenu);

        }else{
    $errorMsg = "Vous n'est pas l'auteur de cette publication.";
}

    }else{
    $errorMsg = "Aucune question n'a été trouvé";
}

}else{
    $errorMsg = "Aucune question n'a été trouvé +";
}