<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <header>
    <nav>
      <!-- logo image-->
      <div id="navbar">
        <div class="container">
          <button class="button"><a href="connexion.php">connexion</a></button>
          <button class="button"><a href="inscription.php">inscription</a></button>
        </div>
        <div id="logovoiture">
          <img src="images/OIP.jpg" id="img" />
        </div>



        <!-- Bouton recherche-->
        <form action="#">
          <input type="text" placeholder=" rechercher" name="search" id="searchbar" />
          <button id="buttons" type="submit">search</button>

        </form>


        <!-- Liste -->
        <div id="menuctn" class="active">
          <ul id="listul">
            <li><a href="doc.php"> Acceuil</a></li>
            <li><a href="voitureocassion.php">Voiture</a></li>
            <li><a href="services_page.php">Service </a></li>
            <li><a href="formcontact.php">Contact </a></li>
          </ul>
          <hr>
        </div>

    </nav>
  </header>
  <!-- Service du garage-->
  <div class="">
    <div class="MainImageContainer">
      <img src="images/auto-repair-3691962_1280.jpg" id="mainImg" />
    </div>
    <h2 id="prestation">PRESTATIONS</h2>
    <div class="molette">
      <img src="images/logorep.jpg" alt="#" />
      <p>Réparation de carosserie et mecanique des voitures.</p>
    </div>
    <div class="molette">
      <img src="images/entre.jpg" alt="#" />
      <p>Entretien de vos vehicules, vidange, plaquettes de frein , amortisseur.</p>
    </div>
    <div class="molette">
      <img src="images/sale.jpg" alt="#" />
      <p class="sizepara">Vente de véhicule d'occasion à petit prix.</p>
    </div>
  </div>
  <!-- Voiture d'exposition-->
  <div class="ExpoVoiture" id="ocass">
    <img src="images/me.jpg" alt="#" />
    <div id="information">
      <h3>Peugot : 308</h3>
      <p>Année : 2012</p>
      <p>Carburant : Essence</p>
      <p>kilometrage : 250 000</p>
      <p>prix : 25k</p>
      <a href="details.html">Détails</a>
    </div>
  </div>

  <div class="ExpoVoiture">
    <img src="images/bm.jpg" alt="#" />
    <div id="information">
      <h3> BMW : </h3>
      <p>Année : 2008</p>
      <p>Carburant : Diessel</p>
      <p>kilometrage : 100 000</p>
      <p>prix : 20k</p>
      <a href="details.html">Détails</a>
    </div>
  </div>

  <div class="ExpoVoiture">
    <img src="images/K.jpg" alt="#" />
    <div id="information">
      <h3>Peugeot : </h3>
      <p>Année : 2018</p>
      <p>Carburant : Diessel</p>
      <p>kilometrage : 120 000</p>
      <p>prix : 35k</p>
      <a href="details.html">Détails</a>
    </div>
  </div>
  <!-- Footer avec horaires garage-->
  <footer>
    <h3>Horaires d'ouverture :</h3>
    <p>Lundi - vendredi : 08:45 - 12:00 - 14:00 - 18:00</p>
    <p>samedi : 8:45 - 12:00</p>
  </footer>
</body>

</html>