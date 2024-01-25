<?php 
    session_start();
    include 'include/php_reservation-form.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="styleform.css"/>
    <title>Réserver une salle</title>
</head>
<body>
    <?php include 'include/header.php';?>
<div class="resf">
    <main>
        <h1>Réserver Salle</h1>
        <form action="reservation-form.php" method="POST" class="form_pir">
            <label for="titre">Titre <span class="oblig">*</span> :</label>
            <select id="titre" name="titre" required>
                <option value="How to">Sélection une salle</option>
                <option value="Anglais">Salle 1</option>
                <option value="Pitch">Salle 2</option>
                <option value="Conférence">Salle 3</option>             
            </select>                

            <label for="description">Description <span class="oblig">*</span>: </label>
            <input type="text" id="description" name="description" required>

            <label for="debut">Date et heure de début <span class="oblig">*</span> :</label>
            <?php include 'include/php_select_date.php';?>

            <select id="debut" name="debut_heure" required>               
            <?php include 'include/php_select_h_debut.php';?>
            </select>                       

            <label for="fin">Date et heure de fin <span class="oblig">*</span> :</label>
            <?php include 'include/php_affiche_d_fin.php';?>
                

            <select id="fin" name="fin_heure" required>
            <?php include 'include/php_select_h_fin.php';?>                            
            </select>  
            
           
           
            <input type="submit" name="validresa" class="bouton" value="Réserver">

            <?php
                if(isset($msg_error))
                    {
                        echo "<span class='msg_'>" . $msg_error . "</span><br/>";
                    }
                if(isset($msg_valid))
                    {
                        echo "<span class='msg_'>" . $msg_valid . "</span><br/>";
                    }
            ?>
        </form>
    </main>
                </div>
    <?php include 'include/footer.php';?>
</body>
</html>