<?php

require('actions/database.php');

// Validation du Formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password'])){

        // Les données de l'utilisateur
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérifier si l'utilisateur existe déjà sur le site
        $checkUserAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkUserAlreadyExists->execute(array($user_email));

        if($checkUserAlreadyExists->rowCount() ==0){

            // Inserrer l'utilisateur dans la BDD
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(nom, prenom, email, password)VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_nom, $user_prenom, $user_email, $user_password));

            // Recupérer les information de l'utilisateur 
            $getInfosOfThisUserRek = $bdd->prepare('SELECT id, nom, prenom, email FROM users WHERE nom = ? AND prenom = ? AND email = ?');
            $getInfosOfThisUserRek->execute(array($user_nom, $user_prenom, $user_email));

            $userInfos = $getInfosOfThisUserRek->fetch();

            // Authentifier l'utilisateur sur le site et recupérer ses données dans des variables globaux SESSION
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['nom'] = $userInfos['nom'];
            $_SESSION['prenom'] = $userInfos['prenom'];
            $_SESSION['email'] = $userInfos['email'];

            // Redirriger l'utilisateur vers la page d'accueil
            header('Location: index.php');

        }else{
            $errorMsg = "Cet utilisateur existe déjà !";
        }

    }else{
        $errorMsg = "Veuillez completer tous les champs ...";
    }

}
?>