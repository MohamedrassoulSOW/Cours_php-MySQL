<?php
require('actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id, title, description, contenu FROM questions WHERE id_author = ? ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));