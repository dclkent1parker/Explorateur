<?php 
foreach($iterator as $fichier){
    if(!$fichier->isDot()){
        echo '<li><div class="doc"><a id="link" href="' . $fichier->getPath() .'/'. $fichier . '" download="'. $fichier .'">' . $fichier->getFilename() . '</a></div></li><br>';
        echo '<div class="info">Taille: ' . $fichier->getSize() . ' octets </div><br>';
        echo '<div class="info">Type: ' . $fichier->getType() . '</div><br>';
    }

}
?> 