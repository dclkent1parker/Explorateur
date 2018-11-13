<?php 
foreach($iterator as $fichier){
    if(!$fichier->isDot()){
        echo '<li><div class="doc">' . $fichier->getFilename() . '</div></li><br>';
        echo '<div class="info">Taille: ' . $fichier->getSize() . ' octets </div><br>';
        echo '<div class="info">Type: ' . $fichier->getType() . '</div><br>';
    }

}
?> 