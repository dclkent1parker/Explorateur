<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <title>DCL Explorer</title>

</head>
<body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <header>
        <div id="title"><h1>DCL Explorer</h1></div>
    </header>
    <main>
        <div id="container">
            <?php 
                $dossier= 'phpExplorer';
                // On définit la variable dossier comme le nom du dossier qu'on veut ouvrir 'phpExplorer'
                $iterator= new DirectoryIterator($dossier);
                // La variable iterator est instanciée par la fonction 'DirectoryIterator($nomdudossier) ce qui permet d'ouvrir un dossier 
             ?>
            <div id="boutons">  
                <i class="fas fa-minus-circle"></i> 
                <i class="fas fa-plus-circle"></i>
                <i class="fas fa-times-circle"></i> 
            </div>
            <div id="chemin">
                <?php
                //Chemin.php nous permet d'afficher le dossier ouvert suivant comment il est instancié plus haut
                include('chemin.php'); ?>
            </div>
            <div id="contenu">
                <ul>
                    <?php 
                    //Display.php contient toutes les infos sur les fichiers
                    include('display.php'); ?>
                </ul>
            </div>
        </div>
    </main>
    <script src="refresh.js"></script>
</body>
</html>