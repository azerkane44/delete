<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="forss" type="text/css" />
    <title>Document</title>
</head>
<!-- Titre espace admin-->

<body>
    <header id="headerespaceadmin">
        <h3 id="titleadmin"> Bienveue sur votre espace admin! </h3>

    </header>
    <!-- Bouton de redirectio vers page bannisement-->
    <p> Afficher et bannir les membres inscrit</p>
    <form action="showbanmember.php" method="post" id="banbutton">
        <input type="submit" name="submit" value="Affichage et bannisement des membres" />
    </form>
    <!-- Boutton redirection vers page ajout et suppresion des services-->
    <p> Ajouter ou supprimer les services du garage</p>
    <form action="admin_gestion_services.php" method="post" id="banbutton">
        <input type="submit" name="submit" value="Ajout des services" />
    </form>
    <!--Bouton redirection vers création compte utilisateur -->
    <p> Créer un compte utilisateur</p>
    <form action="creation.php" method="post" id="banbutton">
        <input type="submit" name="submit" value="Ajout des services" />
    </form>
    </h3>
</body>

</html>