<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_espaceadmin.css" type="text/css" />
    <link rel="stylesheet" href="form.css" type="text/css" />
    <title>Contact</title>

</head>

<body>
    <div class="formcontainer"><!-- Titre du formulaire -->
        <h4>Contactez-nous</h4>
        <!-- Lien vers la page de traitement des donées -->
        <form action="traitement.php" method="post">
            <div class="name-field">
                <div><!-- place pour les noms -->
                    <label for="name">Nom</label>&ensp;&emsp;
                    <input type="text" name="name" id="name" required>
                    <br> <!-- place pour prenom-->
                    <label for="prenom">Prenom</label>&ensp;&emsp;
                    <input type="text" name="Prenom" id="Prenom" required>
                    <br><!-- place pour numéro de téléphone -->
                    <label for="phone">Numéro de téléphone </label>&emsp;
                    <input type="phone" name="phone" id="phone" required>
                    <br> <!-- place pour l'email-->
                    <label for="email">Email</label>&emsp;
                    <input type="email" name="email" id="email" required>
                    <br>
                    <!-- Place pour le message au garage-->
                    <label for="message">Message</label>
                    <textarea style="font-size: 30px;" name="message" id="message" required></textarea>
                    <br><br> <!-- Boutton envoyer -->
                    <button>Envoyer</button>
                </div>
                <div>
        </form>
    </div>
</body>

</html>