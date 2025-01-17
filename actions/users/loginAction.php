<?php

require('actions/database.php');

// Validation du Formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        // Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        // Vérifier si l'utilisateur existe
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_email));

        if($checkIfUserExists->rowCount() > 0){

            // Recupérer les information de l'utilisateur 
            $usersInfos = $checkIfUserExists->fetch();

            // Vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['password'])){

            // Authentifier l'utilisateur sur le site et recupérer ses données dans des variables globaux SESSION
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['nom'] = $usersInfos['nom'];
            $_SESSION['prenom'] = $usersInfos['prenom'];
            $_SESSION['email'] = $usersInfos['email'];

            // Redirriger l'utilisateur vers la page d'accueil
            header('Location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre email est incorrect...";
        }

    }else{
        $errorMsg = "Veuillez completer tous les champs...";
    }
}

?>