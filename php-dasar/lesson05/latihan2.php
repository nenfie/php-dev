<?php
// pengulangan pada array

$angka = [3,2,15,20,11,77,89,100,123];

?>

<html>
    <head>
        <title>PHP Dasar : Array</title>
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
                clear : both;
            }
        </style>
    </head>

    <body>
        <!-- using for -->
        <?php for( $i = 0; $i < count($angka); $i++) { ?>
            <div class="kotak"><?php echo $angka[$i]; ?> </div>
        <?php } ?>

        <div class="clear"></div>

        <!-- using foreach -->
        <?php foreach( $angka as $a ) { ?>
            <div class="kotak"><?php echo $a; ?></div>
        <?php } ?>

    </body>

</html>