<?php
$nom = $_POST['user_name'];
$prenom = $_POST['user_prenom'];
$courriel = $_POST['user_email'];
$phone = $_POST['user_telephone'];
$subject = $_POST['user_subject'];
$message= $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Thanks</title>
</head>

<body>
    <p> Merci <?= $prenom . ' ' . $nom ?> de nous avoir contacté à propos de <?= $subject ?> .
    <br>
    Un de nos conseillers vous contactera soit à l’adresse <?= $courriel ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : 
    <br> <?= $message ?>

</p>
</body>