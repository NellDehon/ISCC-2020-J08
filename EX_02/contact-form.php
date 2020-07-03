<p>
<?php
$nom=$_POST['user_name'];
$e_mail=$_POST['user_mail'];
$msg=$_POST['user_message'];
 
?>
</p>
<p>
    <?php
    if(!empty($nom)&&!empty($e_mail)&&!empty($msg)){
        echo "Nom et prénom : $nom<br>";
        echo "E-mail: $e_mail<br>";
        echo "Message : $msg <br>";
    }
    else{
        echo "Aucune donnée reçues";
    }
    ?>
    </p>