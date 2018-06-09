<?php    # implode - Join array elements with a string
    // Example #1: implode() example
    // Example #1: implode() example
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



    // Example #2: in an SQL statement
    // Example #2: in an SQL statement
    // Example #2: in an SQL statement
    $new_user = array (
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "age" => $_POST['age'],
        "location" => $_POST['location']
    );

    /**
     *  Execute the following SQL code:
     *  INSERT INTO users (firstname, lastname, email, age, location)
     *      VALUES (:firstname, :lastname, ":email, :age, :location)
     */

    $sql = sprintf( // sprintf() allows: INSERT INTO x (y) values (:z)
        "INSERT INTO %s (%s) VALUES (%s)",
        "users",
        implode(", ", array_keys($new_user)),
        ":". implode(", :", array_keys($new_user))
    );

    print_r(implode(", ", array_keys($new_user)));
?>
