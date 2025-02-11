<?php include('connexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Espace</title>
</head>
<body>

    <?php include('menu.php'); ?>

    <?php
      
        if ($_SESSION["connecte"] == 1){
        
    ?>

    <section>
    <div class="container-fluid py-5 p-5">
        
        <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://img.freepik.com/vecteurs-premium/portrait-avatar-belle-femme-medecin-pour-medias-sociaux-illustration-vectorielle-lumineuse_590570-4.jpg " alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?php echo $_SESSION['nom']." ". $_SESSION['prenom'] ?></h5>
                <p class="text-muted mb-1">Patient</p>
                <div class="d-flex justify-content-center mb-2">
                </div>
            </div>
            </div>
            
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php echo $_SESSION['nom']." ". $_SESSION['prenom'] ?> </p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"> <?php echo $_SESSION['email'] ?> </p>
                </div>
                </div>
                
                <hr>
                
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $_SESSION['adresse'] ?></p>
                </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <h4 class="my-3"> Mes Sejours </h4>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id Sejour</th>
                            <th scope="col">Date Debut</th>
                            <th scope="col">Date Fin</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Specialite</th>
                            <th scope="col"> Statut </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //la table des visiteurs
                                $requette = $dba->prepare(" SELECT * FROM `séjour` WHERE id_patient=".$_SESSION['id_patient']." ");
                                $requette->execute();
                                $tableSejour = $requette->fetchAll();
                                $dateActuelle = new DateTime();
                                //echo $dateActuelle->format('Y-m-d');

                                foreach ($tableSejour as $ligne) {
                                    print('
                                        <tr>
                                            <th scope="row">'.$ligne["id"].'</th>
                                            <td>'.$ligne["date_debut"].'</td>
                                            <td>'.$ligne["data_fin"].'</td>
                                            <td>'.$ligne["motif"].'</td>
                                            <td>'.$ligne["spécialité"].'</td>
                                            <td> ');

                                            if ($ligne["data_fin"] > $dateActuelle) {
                                                echo "La date de fin est passée.";
                                            } elseif ($ligne["data_fin"] < $dateActuelle) {
                                                echo "La date de fin est dans le futur.";
                                            }
                                    print('            
                                            </td>
                                        </tr>
                                    ');
                                }

                            

                            ?>
                            
                        </tbody>
                        </table>
                    </div>
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
<?php 
    }else{
        header('Location: erreur.php');

    }
?>