<?php include_once ('authentication.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            font-size: 30px;
        }
        * {
        box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="column">
            <form action="inscription.php" method="post" >
                <h1>
                <label>Formulaire de Login</label><br>
                </h1>
                <input placeholder="*Login" type="text" name="login2" required><br>
                <input minlength="8" placeholder="*Mot de passe" type="password" name="mpasse" required><br><br>
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div class="column">
        <form action="inscription.php" method="post" >
                <h1>
                <label>Formulaire d'inscription</label><br>
                </h1>
                <input placeholder="*Prénom" type="text" name="prenom" required><br>
                <input placeholder="*Nom" type="text" name="nom" required><br>
                <input placeholder="*Téléphone de contact" type="tel" name="tel" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            required><br><small>Format: 123-456-7890</small><br>
                <input placeholder="*E-mail" type="text" name="email" required><br>
                <input placeholder="*Login" type="text" name="login" required><br>
                <input minlength="8" placeholder="*Mot de passe" type="password" name="mpasse1" required><br>
                <input minlength="8" placeholder="*Confirmer votre mot de passe" type="password" name="mpasse2" required><br><br>
                *All fields are mandatory. /
                Tous les champs sont obligatoires.<br>
                *Le mot de passe doit contenir au minimum 8 caractères.<br><br> 
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div> 


</body>
</html>