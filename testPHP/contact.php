<?php

if (isset($_POST["Nom"])) {
    $retour = mail("bgonthier974@gmail.com" ,$_POST["Nom"], $_POST["comments"], "From: contact@moncv.fr/r/nReply-to:" . $_POST["email"]);
}
?>
