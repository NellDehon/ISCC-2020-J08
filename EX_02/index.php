<?php
include 'header.php';
?>
 
<?php
function afficher_pages(){
    if($_GET['page'] == 'accueil'){
   echo '';
   include 'vitrine-accueil.php' ;
    }
else if($_GET['page'] == 'programme' ){
echo '';
include 'vitrine-programme.php';
}
else if($_GET['page'] == 'contacts'){
    echo '';
    include 'vitrine-contact.php';
}
else if($_GET['page'] == 'contact-form'){
    include 'contact-form.php';
}
else {
    echo'';
    include '404.php';
}}
afficher_pages();
?>
<?php
include 'footer.php';
?>