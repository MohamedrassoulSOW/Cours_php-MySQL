
<?php

require('actions/database.php');

// Vérifier si l'id de la question rentrée dans l'URL existe
if(isset($_GET['id']) AND !empty($_GET['id'])){

    // Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

    // Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        // Récupérer toutes les informations de la question
        $questionInfos = $checkIfQuestionExists->fetch();

        // Stocker les datas de la question dans dans des variables propres.
        $questions_title = $questionInfos['title'];
        $questions_description = $questionInfos['description'];
        $questions_contenu = $questionInfos['contenu'];
        $questions_id_author = $questionInfos['id_author'];
        $questions_email_author = $questionInfos['email_author'];
        $questions_date_publication = $questionInfos['date_publication'];

    }else{
        $errorMsg = "Aucune question n'a été trouvé";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvé";
}

/*
// correction pour vérification
require('actions/database.php');

// Vérifier si l'id de la question est fourni et valide
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idOfTheQuestion = intval($_GET['id']);

    // Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    if ($checkIfQuestionExists->execute(array($idOfTheQuestion))) {

        if ($checkIfQuestionExists->rowCount() > 0) {
            // Récupérer toutes les informations de la question
            $questionInfos = $checkIfQuestionExists->fetch();

            // Échapper les données pour éviter les attaques XSS
            $questions_title = htmlspecialchars($questionInfos['title']);
            $questions_description = htmlspecialchars($questionInfos['description']);
            $questions_contenu = htmlspecialchars($questionInfos['contenu']);
            $questions_id_author = htmlspecialchars($questionInfos['id_author']);
            $questions_email_author = htmlspecialchars($questionInfos['email_author']);
            $questions_date_publication = htmlspecialchars($questionInfos['date_publication']);

        } else {
            $errorMsg = "Aucune question n'a été trouvée.";
        }

    } else {
        $errorMsg = "Erreur lors de la récupération des informations de la question.";
    }

} else {
    $errorMsg = "Identifiant de question invalide.";
}

// Afficher le message d'erreur si nécessaire
if (isset($errorMsg)) {
    echo '<p>' . htmlspecialchars($errorMsg) . '</p>';
} */
?>
