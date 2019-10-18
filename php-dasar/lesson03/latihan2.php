<?php

// Percabangan

// if else
/*
$x = 10;
if ( $x < 20 ) {
    echo "Benar";
} else {
    echo "Salah";
}
*/

// if else if else
/*
$x = 20;
if ( $x < 20 ) {
    echo "Benar";
} else if ( $x == 20 ) {
    echo "x bernilai 20";
} else {
    echo "Salah";
}
*/

// ternary

// switch

?>

<html>
    <head>
        <title>PHP Dasar - Percabangan</title>
        <style>
            .warna-baris {
                background-color: silver;
            }
        </style>
    </head>

    <body>
        <table border="1" cellpadding="10" cellspacing="0">

            <?php for( $i = 1; $i <= 5; $i++ ) { ?> 

                <?php if ( $i % 2 == 1 ) { ?>
                
                    <tr class="warna-baris">

                <?php } else { ?>   

                    <tr>

                <?php } ?>                 
                    <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                        <td>
                            <?php echo "$i, $j"; ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>

        </table>

    </body>
</html>