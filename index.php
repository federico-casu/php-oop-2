<?php 

  /* 
  
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    - L'e-commerce vende prodotti per animali.
    - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
  
  */  

  include_once __DIR__ . '/models/classes.php';

  $store = [];

  $store['collare'] = new Product('Collare', 12.00, 'Dog');
  $store['crocchette_1kg'] = new Food('Crocchette 1kg', 14.50, 'Dog', 200.00);
  $store['palla_da_tennis'] = new Game('Palla da tennis', 9.98, 'Cat', 'Ball');

  $store['collare']->setImage('https://shop-cdn-m.mediazs.com/bilder/7/400/383839_pla_halsband_biothane_40cm_grau_hs_01_7.jpg');
  $store['crocchette_1kg']->setImage('https://shop-cdn-m.mediazs.com/bilder/0/400/briantos_adult_gf_lamb_1kg_1000x1000_0.jpg');
  $store['palla_da_tennis']->setImage('https://shop-cdn-m.mediazs.com/bilder/7/400/74246_pla_kong_squeakairballseil_7.jpg');
  
  echo "<pre>";
  var_dump($store);
  echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>

    <header>

    </header>

    <main>
        
    </main>
    

    <!-- Js Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>
</body>
</html>