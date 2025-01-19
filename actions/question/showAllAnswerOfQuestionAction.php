<?php
require('actions/database.php');

$getAllAnswerOfThisQuestion = $bdd->prepare('SELECT id_author, email_author, id_question, contenu FROM commentaire WHERE id_question =? ORDER BY id DESC');
$getAllAnswerOfThisQuestion->execute(array($idOfTheQuestion));