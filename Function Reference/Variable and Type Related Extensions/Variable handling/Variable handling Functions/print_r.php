<?php
# print_r — Prints human-readable information about a variable

    // Example #1: without a (return) parameter
    $a = array(
        'a' => 'alpha',
        'b' => 'bravo',
        'c' => array('x', 'y', 'z')
    );

    print_r($a);

    // Example 2: with a (return) paramiter
    $b = array(
        'm' => "make",
        'f' => "funky",
        'x' => array('g', 'r', 'a', 'n', 'd')
    );

    $results = print_r($b, true);

    print_r($results);
?>
