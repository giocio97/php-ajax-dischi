<?php

// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

include  __DIR__. '/db/data.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body><?php
include __DIR__.'/parti/header.php';?>
<main>
    <div class="container">
        <div id="discs-container"><?php
        foreach($arr_discs as $disc){ ?>
            <div class="disc">
                <img src="<?= $disc ['poster']?>" alt="<?= $disc ['title']?>">
                <h4><?= $disc ['title']?></h4>
                <span><?= $disc ['author']?></span><br>
                <span><?= $disc ['year']?></span>
            </div> <?php

        }?>
        
        </div>
        
    </div>
</main>
    
</body>
</html>