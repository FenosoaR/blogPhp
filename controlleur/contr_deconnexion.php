<?php




setcookie('adresseMail' , $mail_valid , time()-3600 , '/');
header('Location:../view/connexionAdmin.php');


?>






