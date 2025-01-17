<?php
require('actions/database.php');

if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['tittre']) && !empty($_POST['description']) && !empty($_POST['contenu'])){

    }else{
        $errorMsg = "Veuillez completer tous les champs...";
    }

}

?>