<?php
# array_keys — Return all the keys or a subset of the keys of an array

    // Example #1:
    // Example #1:
    // Example #1:
    $array = array(
        0 => 100,
        "color" => "red"
    );

    $array_keys = array_keys($array);

    print_r($array_keys);




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
