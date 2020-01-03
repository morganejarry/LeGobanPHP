<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Parties Goban</title>
</head>
<body>
        <?php
                if(isset($_GET['choix']) && $_GET['choix'] == 'KO'){
                        echo '<p style="color:red">Veuillez faire un choix valide</p>';
                }
        ?>
        <p>Bonjour, merci de choisir la partie:</p>
        <a href="index.php?choix=1">Choix 1</a>
        <a href="index.php?choix=2">Choix 2</a>

        
        <form action="index.php" method="get">
                <label for="choix_1">Partie 1</label>
                <input type="radio" name="choix" value="1">
                <label for="choix_2">Partie 2</label>
                <input type="radio" name="choix" value="2">
                <button type="submit">Valider</button>
        </form>

</body>
</html>