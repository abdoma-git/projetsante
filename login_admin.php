<?php 
    include ("connexion.php");
    session_start();
    // la methode POST du formulaire nous cache les donnees saisies
    // la methide GET du formulaire ne cache pas les donnees saisies et les envoies dans l url
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/img/banniere.png'); /* Remplacez par l'URL de votre image */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            //background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Connexion Administrateur</h2>
        <form  method="post">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">pwd:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
        <p class="text-center mt-3">Vous n'avez pas de compte ? <a href="register.php">Créez un compte</a></p>
    </div>
    <?php 
                            if ((!empty($_POST['email'])) && (!empty($_POST['password'])) ){

                                $email = $_POST["email"];
                                $pwd = md5($_POST["password"]);
                                
                                //la table des visiteurs
                                $requette = $dba->prepare(" SELECT * FROM `administrateur` ");
                                $requette->execute();
                                $tableUsers = $requette->fetchAll();
                                $point = 0;
                                //boucle sur les utilisateurs de la table visiteur
                                foreach ( $tableUsers as $ligne ){

                                    if ($ligne["email"] == $email && $ligne["pwd"] == $pwd){

                                    
                                        $_SESSION["connecte"] = 1;
                                
                                        $_SESSION["nom"] = $ligne["nom"];
                                        $_SESSION["prenom"] = $ligne["prenom"];
                                        $_SESSION["email"] = $ligne["email"];
                                       
                                       
                                        $point = 1 ;

                                        header('Location: espace_admin.php');
                                    }
                                }

                                if ( $point == 0){
                                    echo "utilisateur indisponible </br>";
                                }
                            }

                                
                            
                        ?>


    <!-- Inclusion de Bootstrap JS et des dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include('footer.php') ;?>
</body>
</html>
