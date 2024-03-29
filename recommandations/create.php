<?php


require_once "../includes/db.php";

$query = $bdd->prepare("INSERT INTO recommandations
    SET
    livre=:livre,
    livre_si_non_present=:livre_si_non_present,
    recommande_par=:recommande_par,
    note=:note,
    commentaire=:commentaire
");

$query->execute([
    "livre" => $_POST['livre'],
    "livre_si_non_present" => $_POST['livre_si_non_present'],
    "recommande_par" => $_POST['recommande_par'],
    "note" => $_POST['note'],
    "commentaire" => $_POST['commentaire']
]);

header("Location: /recommandations?success=created");