<?php 
    session_start();
?>
<nav>
    <div>
        <ul class="nav">
            <li class="nav-item">
                <?php 
                
                    if (isset($_SESSION["role"]))
                    {
                        if ($_SESSION["role"] == 1)
                        {
                            print('
                                <a class="nav-link text-white" href="dashboard_Admin.php">Accueil</a>
                            ');
                        }else{
                            print('
                                <a class="nav-link text-white" href="index.php">Accueil</a>
                            ');
                        }
                    }

                    else{
                        print('
                            <a class="nav-link text-white" href="index.php">Accueil</a>
                        ');
                    }
                ?>
                
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="matchs.php">Matchs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="parier.php">Parier</a>
            </li>
            
            <?php 
                if ($_SESSION['connecte'] == 1){
                    print('
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Mon Espace</a>
                        </li>
                    ');
                }
            ?>
            
        </ul>
    </div>

    <div class="login">
        <i class="fas fa-sign-in-alt"></i>
        <?php
            if (isset($_SESSION["connecte"])){
                if ($_SESSION["connecte"] == 1){
                    print ("
                        <a href='deconnexion.php'>Se deconnecter</a>
                    ");
                }else{
                    print ("
                        <a href='login.php'>Se connecter</a>
                    ");
                }
            }else{
                print ("
                        <a href='login.php'>Se connecter</a>
                    ");
            }
                
        
        ?>
    </div>
</nav>

