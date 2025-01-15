<?php require('actions/signupAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <form action="signup.php" method="post">

    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <h3>INSCRIPTION</h3>
        <hr>
        <div class="name-field">
            <div class="">
                <label for="">Nom</label>
                <input type="text" name="nom">
            </div>
            <div class="">
                <label for="">Prenom</label>
                <input type="text" name="prenom">
            </div>
        </div>
        <label for="">Adress Mail</label>
        <input type="email" name="email">
        <label for="">Mot de Passe</label>
        <input type="password" name="password">
        <input type="submit" value="S'inscrire" name="validate">
        <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
    </form>
</body>
</html>
