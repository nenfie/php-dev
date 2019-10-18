<?php

// Pengulangan

// for
/*
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
*/

// while
/*
$i = 0;
while ( $i < 5 ) {
    echo "Hello Folks! <br>";
    $i++;
}
*/

// do.. while
/*
$i = 0;
do {
    echo "Hello People! <br>";
    $i++;
} while ( $i < 5 );
*/

// foreach : looping for array

?>

<html>
    <head>
        <title>PHP Dasar - Pengulangan</title>
    </head>
    <body>
        <!-- html di dalam php -->
        <table border="1" cellpadding="10" cellspacing="0">

            <?php
                for ( $i = 1; $i <= 3; $i++ ) {
                    echo "<tr>";
                    for ( $j = 1; $j <= 5; $j++) {
                        echo "<td>$i, $j</td>";
                    } 
                    echo "</tr>";
                }
            ?>

        </table>

        <br>

        <!-- php di dalam html -->
        <table border="1" cellpadding="10" cellspacing="0">

            <?php for( $i = 1; $i <= 3; $i++ ) { ?>                
                <tr>                    
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