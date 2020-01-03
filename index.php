<?php
require 'goban.php';
?><!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goban</title>
    <link rel="stylesheet" href="goban.css">
</head>
<body>
    <?php
        $game = [
            [NULL,true,true,false,NULL], //index 0
            [NULL,true,false,false,NULL], //index 1
            [NULL,true,true,false,NULL], //index 2
            [NULL,true,false,NULL,false], //index 3
            [NULL,true,false,NULL,NULL] //index 4
        ];

        $game2 = [
            [NULL,true,true,false,NULL,false,true,NULL],
            [NULL,true,false,false,NULL,false,false,true],
            [NULL,true,true,false,NULL,NULL,true,false],
            [NULL,true,false,NULL,false,false,NULL,false],
            [NULL,true,false,NULL,NULL,NULL,true,true],
            [NULL,true,false,false,NULL,false,false,true],
            [NULL,true,true,false,NULL,NULL,true,false],
            [NULL,true,false,NULL,false,false,NULL,false]
        ];

        if($_GET['choix'] == 1){
            displayGoban($game);
        }elseif($_GET['choix'] == 2){
            displayGoban($game2);
        }else{
            header('Location: formulaire.php?choix=KO');
            exit();
        }
        
    ?>
</body>
</html>
