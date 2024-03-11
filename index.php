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

try {
    $store['collare'] = new Product('Collare', 12.00, 'Dog');
    $store['crocchette_1kg'] = new Food('Crocchette 1kg', 14.50, 'Dog', 200.00);
    $store['palla_da_tennis'] = new Game('Palla da tennis', 9.98, 'Cat', 'Ball');
    $store['lettiera_chiusa'] = new Product('Lettiera chiusa', 49.98, 'Cat');
    $store['cuccia_interno'] = new Product('Cuccia da Interno', 35.99, 'Dog');
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
}

$store['collare']->setImage('https://shop-cdn-m.mediazs.com/bilder/7/400/383839_pla_halsband_biothane_40cm_grau_hs_01_7.jpg');
$store['crocchette_1kg']->setImage('https://shop-cdn-m.mediazs.com/bilder/0/400/briantos_adult_gf_lamb_1kg_1000x1000_0.jpg');
$store['palla_da_tennis']->setImage('https://shop-cdn-m.mediazs.com/bilder/7/400/74246_pla_kong_squeakairballseil_7.jpg');
$store['lettiera_chiusa']->setImage('https://shop-cdn-m.mediazs.com/bilder/toilette/per/gatti/modkat/xl/6/400/79342_modkat_xl_katzentoilette_wei__hs09_6.jpg');
$store['cuccia_interno']->setImage('https://shop-cdn-m.mediazs.com/bilder/cuccia/trixie/fhr/soft/be/nordic/1/400/110331_110138_trixie_be_nordic_bett_hs_02_1.jpg');


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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <!-- Fontawsome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' />
</head>

<body>

    <header class="border border-danger py-3 bg-secondary">
        <div class="container">
            <h1>My Pet Shop</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nobis iure doloremque similique quibusdam ut repellat accusamus, voluptatibus recusandae id perferendis beatae ratione, quis earum aliquid perspiciatis maxime quos dolore!</p>
            <button class="btn btn-primary">Example button</button>
        </div>
    </header>

    <main class="border border-primary py-3">
        <div class="container d-flex flex-wrap gap-2 ">
            <?php foreach ($store as $item) : ?>
                <div class="card position-relative" style="width: calc(100% / 3 - (1rem / 3))">
                    <img class="card-img-top" src="<?= $item->getImage() ?>" alt="<?= $item->getName() ?>" />
                    <div class="card-body">
                        <h4 class="card-title"><?= $item->getName() ?></h4>
                        <p>
                            Price: <?= $item->getPrice() ?> €
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-3">
                        <span>Type: <?= $item->getType() ?></span>
                        <?php if ($item->getType() == 'Food') : ?>
                            <span>Calories: <?= $item->getCalories() ?></span>
                        <?php elseif ($item->getType() == 'Game') : ?>
                            <span>Genre: <?= $item->getGenre() ?></span>
                        <?php endif; ?>
                    </div>

                    <?php if ($item->getPet() == 'Dog') : ?>
                        <span style="top: 5%; right: 5%;" class="position-absolute rounded-circle bg-primary text-white p-2"><i class="fa-solid fa-dog"></i></span>
                    <?php elseif ($item->getPet() == 'Cat') : ?>
                        <span style="top: 5%; right: 5%;" class="position-absolute rounded-circle bg-primary text-white p-2"><i class="fa-solid fa-cat"></i></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>


    <!-- Js Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js' integrity='sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==' crossorigin='anonymous'></script>
</body>

</html>