<pre>
<?php
ini_set('display_errors', 1);

    // Convert Integer
    $a = 9.99; // float
    $b = (int)$a; // convert integer
    var_dump($b); // int(9)

    $a = "99"; // string
    $b = (int)$a; // convert integer
    var_dump($b); //int(99)

    $a = "100 Rs."; // string
    $b = (int)$a; // convert integer
    var_dump($b); // int(100) If the string starts with digits followed by non-numeric characters, only the initial digits are considered.

    $a = "$100"; // string (non-numberic)
    $b = (int)$a; // convert integer
    var_dump($b); //int(0)  If the string starts with non-numeric characters and the digits are in the middle, the csting operator returns "0".


    // Convert Float
    $a = 100;// integer
    $b = (double)$a; // float
    var_dump($b);

    $a = "9.99"; // string
    $b = (float)$a; // float
    var_dump($b);

    $a = "1.23E01"; // string
    $b = (double)$a; // float
    var_dump($b);

    $a = "5.5E-5"; // string
    $b = (float)$a; // float
    var_dump($b);
?>

Above all converts starts with text is 0, false, empty others are its number, 1

Null is Null