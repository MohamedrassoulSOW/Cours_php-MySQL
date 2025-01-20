<?php
session_start();
require('actions/users/showOneUsers.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } 
        
        if(isset($getThisQuestion)){
            ?>

            <div class="card">

                <div class="card-body">
                    <h4><?= $user_email; ?></h4>
                    <br>
                    <p><?= $user_prenom .'  '. $user_nom; ?></p>
                </div>
            </div>
            <br>
            <?php

                while($question = $getThisQuestion->fetch()){
                    ?>

                    <div class="card">
                        <div class="card-header">
                            <?= $question['title']; ?>
                        </div>
                        <div class="card-body">
                            <?= $question['description']; ?>
                        </div>
                        <div class="card-footer">
                        Par <?= $question['email_author']; ?> le <?= $question['date_publication']; ?>
                        </div>
                    </div>
                    <br>

                    <?php
                }

        }
        ?>
    </div>

</body>
</html>