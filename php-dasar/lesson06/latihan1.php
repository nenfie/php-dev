<?php
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
?>

<html>
    <head>
        <title>PHP Dasar : Latihan Array</title>

        <style>
            .kotak {
                width: 30px;
                height: 30px;
                background-color: #BADA55;
                text-align: center;
                line-height: 30px;
                margin: 3px;
                float: left;
                transition: 1s;
            }

            .kotak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }

            .clear {
                clear: both;
            }

        </style>

    </head>
    
    <body>
        <?php foreach( $angka as $unit) { ?>
            <?php foreach( $unit as $a) { ?>
                <div class="kotak"><?php echo $a; ?> </div>
            <?php } ?>

            <div class="clear"></div>

        <?php } ?>
    </body>

</html>