<?php
    // Built-in function

    // date
    echo date("l, d-M-y");
    echo "<br>";

    // time
    // result is in UNIX timestamp / EPOCH time => how many seconds has elapsed since 1 January 1970
    echo time();
    echo "<br>";

    // mktime
    // mktime (hour,minute,seconds,month,date,year)
    echo mktime(0,0,0,2,1,1979);
    echo "<br>";

    // strtotime
    echo strtotime("1 feb 1979");
    echo "<br>";

    // can combine functions
    echo date("l", strtotime("1 feb 1979"));

    // Some other built-in functions
    // String : strlen, strcmp, explode, htmlspecialchars
    // Utility : var_dump, isset, empty, die, sleep
    
?>