<?php 
    session_start();
    include 'include/php_reservation.php';   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="styleres.css"/>
    <title>Réservation</title>
</head>
<body>
    <?php include 'include/header.php';?>

    <main>
        <div class="reservation">
            <h1>Réserver par <u><?php echo $login;?></u></h1>
            <p>Le <?php echo $jour?> de <?php echo $heure_debut;?> à <?php echo $heure_fin;?></p>
            <div class="info_resa">
                <p><u>Intitulé</u> :</p>
                <?php echo $titre;?>
</div>
            <hr>
            <div class="info_resa">
                <p><u>Description</u> :</p>
                <?php echo $description;?>
</div>
            
</div>
    </main>

    <?php include 'include/footer.php';?>
</body>
</html>