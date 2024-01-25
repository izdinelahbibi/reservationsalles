<main class="accueil">
<?php
    if(isset($_SESSION["login"]))
        {
    ?>
        <section class="hero">
            <div class="hero-text2">
                <h1>Vous pouvez réserver une Salle</h1>
                <a href="reservation-form.php">Réserver Un Salle</a>
            </div>
        </section>
            
    <?php
        }
    else
        {
    ?>
    
    <section class="hero">
            <div class="hero-text">
                <h1>Gestion de Réservation de Salles</h1>
                <a href="connexion.php">Se Connecter</a>
            </div>
            <div class="hero-text1">
                <a href="inscription.php">Inscription</a>
            </div>
        </section>
    
            
    <?php
        }
?>
</main>