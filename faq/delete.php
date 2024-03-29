<?php

require_once "../includes/db.php";

$query=$bdd->prepare("DELETE FROM recommandations WHERE id=id");

$query->execute (["id" => $_GET['id']]);
header("Location: /recommandations/index.php?success=delete");

exit();