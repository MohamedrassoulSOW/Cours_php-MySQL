<?php
session_start();
require('actions/question/showArticleContentAction.php');
require('actions/question/posteAnswerAction.php');
require('actions/question/showAllAnswerOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
         
        <?php

            if(isset($errorMsg)){ echo $errorMsg; }


            if(isset($questions_date_publication)){
                ?>

                <section class="show-content">

                    <h3><?= $questions_title; ?></h3>
                    <hr>
                    <p><?= $questions_contenu; ?></p>
                    <hr>
                    <small><?='<a href="profile.php?id='.$questions_id_author.'">'.$questions_email_author.'</a> '. $questions_date_publication; ?></small>

                </section>
                <br>
                <section class="show-answers">

                    <form class="form-group" method="POST">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                            <textarea name="answer" class="form-control"></textarea><br>
                            <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                        </div>

                    </form><br>

                    <?php

                    while($answer = $getAllAnswerOfThisQuestion->fetch()){
                        ?>

                        <div class="card">
                            <div class="card-header">
                            <h3><a href="profile.php?id= <?=$answer['id_author'];?>"><?= $answer['email_author']; ?></a> </h3>
                            </div>
                            <div class="card-body">
                            <p><?= $answer['contenu']; ?></p>
                            </div>
                        </div><br>

                        <?php
                    }

                    ?>

                </section>

                <?php
            }
        ?>

    </div>
 
</body>
</html>