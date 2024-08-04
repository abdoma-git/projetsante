<?php 
    include ("connexion.php");
   
    // la methode POST du formulaire nous cache les donnees saisies
    // la methide GET du formulaire ne cache pas les donnees saisies et les envoies dans l url
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Séjour à l'Hôpital</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
      include ("menu.php");
      // la methode POST du formulaire nous cache les donnees saisies
      // la methide GET du formulaire ne cache pas les donnees saisies et les envoies dans l url
  ?>
 
  <div class="container mt-5">
    <h2>Formulaire de Séjour à l'Hôpital</h2>
    <form method="POST">
      <div class="form-group">
        <label for="dateDebut">Date de Début</label>
        <input type="date" class="form-control" id="dateDebut" name="dateDebut" required>
      </div>
      <div class="form-group">
        <label for="dateFin">Date de Fin</label>
        <input type="date" class="form-control" id="dateFin" name="dateFin" required>
      </div>
      <div class="form-group">
        <label for="motif">Motif</label>
        <textarea class="form-control" id="motif" name="motif" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="specialite">Spécialité</label>
        <select class="form-control" id="specialite" name="specialite" required>
          <option value="">Sélectionnez une spécialité</option>
          <option value="cardiologie">Cardiologie</option>
          <option value="neurologie">Neurologie</option>
          <option value="orthopédie">Orthopédie</option>
          <option value="pédiatrie">Pédiatrie</option>
          <option value="oncologie">Oncologie</option>
          <!-- Ajoutez d'autres options de spécialité ici -->
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Soumettre</button>
    </form>
  </div>

    <?php 
            if ((!empty($_POST['dateDebut']))){

                
                $date_debut = $_POST["dateDebut"];
                $date_fin = $_POST["dateFin"];
                $motif = $_POST["motif"];
                $sepcialite = $_POST["specialite"];

                $visiteur = $dba->prepare("INSERT INTO `séjour`( `date_debut`, `data_fin`, `spécialité`, `motif`, `id_patient`) VALUES (?,?,?,?,?) ");
                $visiteur->execute(array($date_debut,$date_fin,$sepcialite,$motif,$_SESSION["id_patient"]));

                header("location: espace.php ");

            }
        ?>

 

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
