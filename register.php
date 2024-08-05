<?php 
    include ("connexion.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <section class="bg-image" style="background-image: url('assets/img/bg-register.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100" style="padding: 40px;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Créer un compte</h2>

                <form  method="POST">

                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label"> Nom</label>
                    <input type="text" name="nom" class="form-control form-control-lg" />

                    <div data-mdb-input-init class="form-outline mt-3 mb-4">
                    <label class="form-label">  Prenom</label>
                    <input type="text" name="prenom" class="form-control form-control-lg" />
                   
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg"> Email</label>
                    <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                    
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Mot de passe</label>
                    <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                    
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Adresse</label>
                    <input type="text" id="form3Example4cdg" name="adresse" class="form-control form-control-lg" />
                   
                    </div>

                    <div class="d-flex justify-content-center">
                        <button  type="submit" data-mdb-button-init
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Creer un Compte</button>
                    </div>

                    <?php 
                            if ((!empty($_POST['nom'])) && (!empty($_POST['prenom'])) && (!empty($_POST['email'])) && (!empty($_POST['password']))){
                                
                                $nom = $_POST["nom"];
                                $prenom = $_POST["prenom"];
                                $email = $_POST["email"];
                                $pwd = md5($_POST["password"]);
                                $addresse = $_POST["adresse"];

                                $visiteur = $dba->prepare(" INSERT INTO `visiteur`(`nom`, `prenom`, `email`, `adresse`, `pwd`) VALUES (?,?,?,?,?) ");
                                $visiteur->execute(array($nom,$prenom,$email,$addresse,$pwd));

                                header("location: login.php ");

                            }
                    ?>

                </form>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <?php include('footer.php') ;?>
    
</body>
</html>