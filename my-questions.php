<?php 
require('actions/users/securiteAction.php');
require('actions/question/myQuestionAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="container">

        <?php

            while($question = $getAllMyQuestions->fetch()){
                ?>
                    <div class="card">
                        <div class="card-header"><?= $question['title']; ?>

                        </div>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $question['description']; ?></h5>
                            <p class="card-text"><?php echo $question['contenu']; ?></p>
                            <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                            <a href="edit-Question.php?id=<?php echo $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                            <a href="actions/question/deleteQuestionAction.php?id=<?php echo $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
                        </div>
                    </div>
                    <br>
                <?php
            }

        ?>

</div>

</body>
</html>