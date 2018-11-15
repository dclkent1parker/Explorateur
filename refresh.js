
//Fonction pour rafraichir une partie de la page toutes les 5 secondes
function loadlink(){
    //jQuery/Ajax nous permettent d'appeler un ID directement, ici #contenu
    //on indique dans la fonction load quelle page et quel id dans cette page on veut refresh
$('#contenu').load('index.php #contenu')
}
//On attribue une intervalle à la fonction loadlink ci-dessus
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 5000);