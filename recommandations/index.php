<?php
include '../partials/header.php';

 require_once "../includes/db.php";





$query = $bdd->query("SELECT * FROM recommandations ORDER BY id DESC");
$recommandations = $query->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET['success'])){
    $message_type= "success";
    if($_GET['success']==="created"){
    $message = "La question a ete ajoute avec succes.";

}
if($_GET['success']==="deleted")
{
  $message= "La question a ete supprimer avec succes.";
}

if($_GET['success']==="update") {
    $message = "La question a ete modifier avec succes";
}
}
// echo "<pre>";
// print_r($recommandations);
// foreach ($recommandations as $recommandation) {
//     echo $recommandation->livre."\r";
// }
// echo "</pre>";


?>

<table class="container">
    <tr>
  <th>Livre</th>
  <th>Livre (si non present)</th>
  <th>Recommander par</th>
  <th>Note</th>
  <th>Commentaire</th>
  </tr>

  <?php
foreach ($recommandations as $recommandation) {
    echo "<tr><td>".$recommandation->livre."</td>";
    echo "<td>".$recommandation->livre_si_non_present."</td>";
    echo "<td>".$recommandation->recommande_par."</td>";
    echo "<td>".$recommandation->note."</td>";
    echo "<td>".$recommandation->commentaire."</td>";
    echo "<td><a href='delete.php?id=" . $recommandation->id . "'>supprimer</a></td>";
    echo "<td><a href='update.php?id=" . $recommandation->id . "'>modifier</a></td></tr>";

}
include '../partials/footer.php';
?>

</table>
<?php
$description = "Découvrez et partagez vos livres préférés avec notre formulaire Airtable. Explorez les recommandations de la communauté pour enrichir votre bibliothèque personnelle. Ensemble, cultivons notre amour de la lecture !";
$titre = "Recommandation de Livre";
?>
<main class="container">
<h1>Recommandation de Livre</h1>

<p>Découvrez et partagez vos livres préférés avec notre formulaire Airtable. Explorez les recommandations de la communauté pour enrichir votre bibliothèque personnelle. Ensemble, cultivons notre amour de la lecture !</p>
<form action="/recommandations/create.php" method="POST">

    <label for="">Livre</label>
    <select name="livre" id="">
        <option value="0"></option>
        <option value="1">Harry Potter à l'école des sorciers</option>
        <option value="2">Harry Potter et l'Ordre du Phœnix</option>
        <option value="3">Harry Potter et la Chambre des secrets</option>
        <option value="4">Harry Potter et la Coupe de feu</option>
        <option value="5">Harry Potter et le Prince de sang-mêlé</option>
        <option value="6">Harry Potter et le Prisonnier d'Azkaban</option>
        <option value="7">Harry Potter et les Reliques de la Mort</option>
        <option value="8">Madame Bovary</option>
        <option value="9">Moby-Dick</option>
        <option value="9">Germinal</option>
    </select>

    <label for="livre_si_non_present"> Livre (si non present) </label>
    <input type="text" id="livre_si_non_present" name="livre_si_non_present">

    <label for="recommande_par">Recommander par</label>
    <input type="text" id="recommande_par" name="recommande_par">


    <label for="note">Note</label>
    <select name="note" id="">
        <option value="0">★★★★★</option>
        <option value="1">★★★★☆</option>
        <option value="2">★★★☆☆</option>
        <option value="3">★★☆☆☆</option>
        <option value="4">★☆☆☆☆</option>
    </select>

    <label for="commentaire"> Commentaire </label>
    <input type="text" id="commentaire" name="commentaire">

    <button>Envoyer</button>

</form>

</main>

<?php
include '../partials/footer.php'; 
?>
