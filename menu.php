<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Bootstrap</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg p-3 navbar-light" style="background-color: #065e6c !important;">
    <a class=" text-light navbar-brand" href="#">SoigneMoi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-light" href="Accueil.php"><b>Accueil</b></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="Sejour.php"><b>Sejour</b></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="espace.php"><b> Mon Espace </b></a>
        </li>
      </ul>

      <div class="form-inline">

        <?php 

            if (isset($_SESSION["connecte"])){

                if ($_SESSION["connecte"] == 1){
                    print ("
                        <a href='deconnexion.php'> 
                          <button class='text-light btn bg-black my-2 my-sm-0'>Se Déconnecter</button> 
                        </a>
                    ");
                }else{
                    print ("
                        <a href='login.php'> 
                          <button class='text-light btn bg-black my-2 my-sm-0'>Se Connecter</button> 
                        </a>
                    ");
                }
            }else{
                print ("
                        <a href='login.php'> 
                          <button class='text-light btn bg-black my-2 my-sm-0'>Se Connecter</button> 
                        </a>
                    ");
            }
    

        ?>
        
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
