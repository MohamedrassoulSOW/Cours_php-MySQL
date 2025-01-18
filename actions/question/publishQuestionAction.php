<?php
require('actions/database.php');

if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['contenu'])){

        // Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_contenu = nl2br(htmlspecialchars($_POST['contenu']));
        $question_date = date('d-m-Y H:i:s');
        $question_id_author = $_SESSION['id'];
        $question_email = $_SESSION['email'];

        // Inserrer la question sur la questionnaire du site
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(title, description, contenu, id_author, email_author, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_contenu, 
                $question_id_author, 
                $question_email, 
                $question_date
            )
        );

        $successMsg = "Votre message a bien été publier";

    }else{
        $errorMsg = "Veuillez completer tous les champs...";
    }

}

?>