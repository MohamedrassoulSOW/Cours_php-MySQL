<?php

require('actions/database.php');
// Récupérer l'identifiant de l'utilisateur
if(isset($_GET['id']) AND !empty($_GET['id'])){

    // L'id de l'utlisateur
    $idOfUser = $_GET['id'];

    // Vérifier si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT nom, prenom, email FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowcount() > 0){

        // Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        // Récupérer toutes les publication de l'utilisateur
        $user_email = $usersInfos['email'];
        $user_nom = $usersInfos['nom'];
        $user_prenom = $usersInfos['prenom'];

        $getThisQuestion = $bdd->prepare('SELECT * FROM questions WHERE id_author = ? ORDER BY id DESC');
        $getThisQuestion->execute(array($idOfUser));

    }else{
    $errorMsg = "Aucun utilisateur n'est trouvé.";
}

}else{
    $errorMsg = "Aucun utilisateur n'est trouvé.";
}