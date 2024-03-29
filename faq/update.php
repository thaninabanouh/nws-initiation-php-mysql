

<?php
include "../partials/header.php"; 

require_once "../includes/db.php";



$query = $bdd->query("SELECT * FROM recommandations WHERE id=".$_GET['id']);
$recommandations = $query->fetch(PDO::FETCH_OBJ);

echo "<prev>";
print_r($_GET);

print_r($recommandations);
die();
?>
<?php

require_once "../includes/db.php";

if(isset($_GET['id'])){
    $query = $bdd->query("SELECT * FROM inscription WHERE id =".$_GET['id']);
    $inscriptions = $query->fetch(PDO::FETCH_OBJ);
} else {
    header('Location: index.php');
    exit;
    
}

$message = null;
$message_type = null;

include '../partials/header.php';
?>

<main class="container">
  <h1> Modifier </h1>

  <?php if(isset($message)) { ?>
  <p data-notice="<?php echo $message_type ?>">
      <span><?php echo $message ?></span>
      <i data-feather="x" data-close></i>
   </p>
   <?php } ?>


   <form action="save.php" method="POST">

      <label for="livre"> Nom du Livre </label>
      <input value="<?= $recommandations->livre ?>" type="text" id="livre" name="livre">

      <label for="livre_si_non_present"> Nom du Livre </label>
      <input value="<?= $recommandations->livre_si_non_present ?>" type="text" id="livre_si_non_present" name="livre_si_non_present">

      <label for="recommande_par"> Recommander par.. </label>
      <input value="<?= $recommandations->recommande_par ?>" type="text" id="recommande_par" name="recommande_par">

      <label for="note"> Note </label>
      <input value="<?= $recommandations->note ?>" type="text" id="note" name="note">

      <label for="commentaire"> Commentaire </label>
      <input value="<?= $recommandations->commentaire ?>" type="text" id="commentaire" name="commentaire">

      <button>Envoyer</button>

      </form>

      
</main>

<?php
include '../partials/footer.php'; ?>
