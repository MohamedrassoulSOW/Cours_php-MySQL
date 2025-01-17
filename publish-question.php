<?php 
require('actions/users/securiteAction.php');
require('actions/question/publishQuestionAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?>

    <form action="#" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <h3>Questonnaire</h3>
        <hr>
        <label for="">Tittre de la question</label>
        <input type="text" name="tittre">
        <label for="">Description de la question</label>
        <textarea name="description"></textarea>
        <label for="">Contenu du question</label>
        <textarea name="contenu"></textarea>
        <input type="submit" value="Envoyer" name="validate">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-qB6BopZf0k1AZkYtUExWka+EhlKS67ux4u+jDXROgID3gKxCw5YpHcJIW1RMGzB+" crossorigin="anonymous"></script>
</body>
</html>
1h33:35s