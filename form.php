<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
    <body>
        <form  action="thanks.php"  method="post">

            <div>
                <label  for="nom">Nom :</label>
                <input  type="text"  id="nom"  name="user_name">
            </div>

            <div>
                <label  for="prenom">Prénom :</label>
                <input  type="text"  id="prenom"  name="user_prenom">
            </div>

            <div>
                <label  for="courriel">Courriel :</label>
                <input  type="email"  id="courriel"  name="user_email">
            </div>

            <div>
                <label  for="phone">Télephone :</label>
                <input  type="tel"  id="phone"  name="user_telephone">
            </div>

            <div>
                <label for="subject">Subject:</label>
                <select id="subject" name="user_subject">
                    <option value="value">--Please choose an option--</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
            </div>

            <div  class="button">
            <button  type="submit">Envoyer votre message</button>
            </div>

        </form>
    </body>
</html>

<?php
  var_dump($_POST);
  echo "<br>";
  echo  $_POST['user_name'];
?>