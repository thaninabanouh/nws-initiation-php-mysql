<?php
include '../partials/header.php';
?>

<main>
    <form action="" method="recommandations">

    <label for="livre"> Livre </label>
<input type="text" id="livre" name="livre">

<label for="livre_si_non_present"> Livre (si non present) </label>
<input type="text" id="livre_si_non_present" name="livre_si_non_present">

<label for="recommande_par">Recommande par</label>
<input type="text" id="recommande_par" name="recommande_par">

<label for="note"> Note </label>
<input type="int(5)" id="note" name="note">

<label for="commentaire"> Commentaire </label>
<input type="text" id="commentaire" name="commentaire">

    </form>
</main>