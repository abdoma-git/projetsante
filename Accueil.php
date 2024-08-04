<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .banner {
      background-image: url('assets/img/banniere.png'); /* Remplacez par l'URL de votre image */
      background-size: cover;
      background-position: center;
      height: 620px;
      text-align: center;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }
    .banner h1 {
      padding-top: 200px;
      font-size: 3rem;
    }

    .banner .police{
      font-size: 30px;
      font-weight: bold;
      color:white;
    }

    .banner button{
      font-size: 20px;
      font-weight: 400;
    }
  </style>
<body>
  <?php 
      include ("menu.php");
      // la methode POST du formulaire nous cache les donnees saisies
      // la methide GET du formulaire ne cache pas les donnees saisies et les envoies dans l url
  ?>
    <div class="banner">
      <h1>SoigneMoi</h1>
      <br>
      <p class="d-block police"><b> Bienvenue sur SoigneMoi, votre hôpital de confiance offrant des soins de qualité <br> et une attention personnalisée pour tous vos besoins de santé.</b> </p>
      <br>
      <button class="btn btn-lg btn-warning mt-2 p-2"> Decouvrire </button>
    </div>
</body>

</html>