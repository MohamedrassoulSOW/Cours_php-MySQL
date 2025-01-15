<?php require('actions/loginAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <form action="login.php" method="POST">

    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <h3>Connexion</h3>
        <hr>
        <label for="">Adress Mail</label>
        <input type="email" name="email">
        <label for="">Mot de Passe</label>
        <input type="password" name="password">
        <input type="submit" value="Se connecter" name="validate">
        <p>Si vous n'avez pas de compte ? Veillez vous <a href="signup.php">S'inscrire</a></p>
    </form>
</body>
</html>
1h21"54'