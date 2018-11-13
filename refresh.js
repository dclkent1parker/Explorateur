function loadlink(){
$('#contenu').load('index.php #contenu')
}
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 5000);