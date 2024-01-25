<header>
    <?php
        if(isset($_SESSION["login"]))
            {
        ?>            
          <header>
                    <a href="index.php" class="logo">Gestion de Reservation</a>
                    <ul class="navlist1">
                <li><a href="planning.php">Planning</a></li>
                <li><a href="reservation-form.php">Réserver une salle</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
            <form method="POST" class="deco">
                            <input type="submit" name="deco" class="bouton" value="Déconnexion"/>
                        </form>
            </header>              
                    <?php
                        if(isset($_POST["deco"]))
                            {
                                session_destroy();
                                header("Location:index.php");
                            }     
            }
        else
            {
        ?>                
                    <header>
                    <a href="index.php" class="logo">Gestion de Reservation</a>
                    <ul class="navlist">
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="planning.php">Planning</a></li>
            </ul>
            </header>              
        <?php
            }
    ?>
</header>