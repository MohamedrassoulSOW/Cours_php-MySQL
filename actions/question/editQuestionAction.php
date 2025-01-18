<?php

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si les champs sont remplis.
    if(!empty($_POST['title']) AND !empty($_POST['description']) && !empty($_POST['contenu'])){

        // Les données à faire passer dans la requette
        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_contenu = nl2br(htmlspecialchars($_POST['contenu']));

        // Modifier les information de la question qui posséde l'id entrée en parametre dans l'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET title = ?, description = ?, contenu = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_contenu, $idOfQuestion));

        // Redirection vers la d'affichage des questions de l'utlisateur.
        header('Location: my-questions.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}