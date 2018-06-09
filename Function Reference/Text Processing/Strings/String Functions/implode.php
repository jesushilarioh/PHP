<?php    # implode - Join array elements with a string
    // Example #1: implode() example
    $array = array(
        'lastname',
        'email',
        'phone'
    );
    $comma_separated_string = implode(", ", $array);

    echo "\n". $comma_separated_string. "\n\n";

    // Empty string when using and empty array:
    /* Ex. a */var_dump(implode('hello', array()));
    /* Ex. b */var_dump(implode(', ', $array));
?>
