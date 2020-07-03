<!DOCTYPE html>
<html>
<header>
<h1>Mini-site-routing</h1>
</header>
<nav>
     <a href="mini-site-routing.php?page=1" >Accueil</a>
     <a href="mini-site-routing.php?page=2" >Page 2</a>
     <a href="mini-site-routing.php?page=3" >Page 3</a>
           
            </nav> 
<body>
<?php 
function afficher_pages(){
    if($_GET['page']== 1){
    echo "Accueil!";
}
else if($_GET['page'] ==2){
    echo "Page 2!";
}
else if($_GET['page'] == 3 ){
    echo "Page 3!";
}}
afficher_pages();
?>
</body>