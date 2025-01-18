<?php 
require('actions/users/securiteAction.php');
require('actions/question/publishQuestionAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?>

    <form class="container" method="POST">

        <?php 
        if(isset($errorMsg)){ 
            echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
                }
        ?>

        <h3>Questonnaire</h3>
        <hr>
        <label for="">Tittre de la question</label>
        <input type="text" name="title">
        <label for="">Description de la question</label>
        <textarea name="description"></textarea>
        <label for="">Contenu du question</label>
        <textarea name="contenu"></textarea>
        <input type="submit" value="Publier une question" name="validate">
    </form>
    
</body>
</html>