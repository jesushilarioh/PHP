<?php   # sprintf - Returns a formatted string

    // Example #1: Argument swapping
    $number = 6;
    $location = "down by the river";

    $format = "There are %d sheds %s\n";

    echo sprintf($format, $number, $location);

    /**
     *  Example #4 Agrument swapping -
     *  with repeated place holders.
     *  For without adding mor arguents. (note: using single quotes)
     */
     
    $format = '%2$s there are %1$d grape vines. That\'s a nice that %2$s there are %1$d grape vines.';
    echo sprintf($format, $number, $location);

?>
