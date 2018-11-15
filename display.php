<?php 
//Foreach = Pour chaque fichier contenu dans l'iterator(le dossier)
foreach($iterator as $fichier){
    //isDot indique si l'élément est un dossier ou fichier(jpg, etc...)
    // Donc si $fichier est un dossier ou fichier alors:
    if(!$fichier->isDot()){
        //On echo une liste contenant le nom du fichier (getFilename), on veut que ce soit un lien donc on ajoute un a href contenant le chemin du dossier (getPath) ainsi que le nom du fichier ($fichier);
        echo '<li><div class="doc"><a id="link" href="' . $fichier->getPath() .'/'. $fichier . '" download="'. $fichier .'">' . $fichier->getFilename() . '</a></div></li><br>';
        //On récupère la taille du fichier et on ajoute octets qui n'est pas précisé dans la formule getSize 
        echo '<div class="info">Taille: ' . $fichier->getSize() . ' octets </div><br>';
        //Enfin on récupère le type d'élement (getType), dossier ou fichier.
        echo '<div class="info">Type: ' . $fichier->getType() . '</div><br>';
    }

}
?> 