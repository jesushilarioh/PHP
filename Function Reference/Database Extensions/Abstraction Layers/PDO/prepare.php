<?php
    # PDO::prepare - Prepares a statement for executon
    #                and returns a statement object

    // Example #1: Prepare an SQL statement with named parameters
    // Example #1: Prepare an SQL statement with named parameters
    // Example #1: Prepare an SQL statement with named parameters

    /* Execute a prepared statement by passing an array of values */
    $connection = new PDO($dsn, $username, $password, $options);
    
    $sql = 'SELECT name, colour, calories
            FROM fruit
            WHERE calories < :calories AND colour = :colour';

    $driver_options = array (
            PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY
    );
    $statement = $connection -> prepare($sql, $driver_options);
    $statement -> execute(array(
        ':calories' => 150,
        ':colour'   => 'red'
    ));
    $red = $statement -> fetchAll();

    $statement -> execute(array(
        ':calories'=> 175,
        ':colour' => 'yellow'
    ));
    $yellow = $statement -> fetchAll();


    // Example #2: Prepare an SQL statement with question mark parameters
    // Example #2: Prepare an SQL statement with question mark parameters
    // Example #2: Prepare an SQL statement with question mark parameters
    $statement = $connection -> prepare("SELECT name, colour, calories
        FROM fruit
        WHERE calories < ? AND colour = ?");

    $statement -> execute(array(150, "red"));
    $red = $statement -> fetchAll();
    $statement -> execute(array(175, "yellow"));
    $yellow = $statement -> fetchAll();
?>
