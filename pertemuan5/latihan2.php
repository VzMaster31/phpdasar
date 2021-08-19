<?php

    // melakukan pengulangan pada array
    // for atau foreach
    $angka = [3,4,5,6,20,40,42,23,41,1,23,4131,2];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
    <?php for ($i=0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $angka1) : ?>
        <div class="kotak"><?= $angka1; ?></div>    
    <?php endforeach; ?>
    
    



</body>
</html>