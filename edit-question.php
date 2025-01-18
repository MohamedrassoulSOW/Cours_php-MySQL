<?php 
require('actions/users/securiteAction.php');
require('actions/question/getInfosOfEditedQuestion.php');
require('actions/question/editQuestionAction.php') 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <br><br>
    <div class="container">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <?php

            if(isset($question_contenu)){
                ?>
                <form method="POST">

                <h3>Éditer une question</h3>
                <hr>
                <label for="">Tittre de la question</label>
                <input type="text" name="title" value="<?= $question_title ?>">
                <label for="">Description de la question</label>
                <textarea name="description" ><?= $question_description ?></textarea>
                <label for="">Contenu du question</label>
                <textarea name="contenu" ><?= $question_contenu ?></textarea>
                <input type="submit" value="Modifier la question" name="validate">
                </form>
                </div>
                <?php
            }
        ?>
    
</body>
</html>