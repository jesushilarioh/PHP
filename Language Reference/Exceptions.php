
<?php
    /**
     * Example #1: 
     * 
     * Trowing PDO Execptions with 
     * PHP Exceptions using try with multiple
     * catch blocks.
     * 
     */
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        throw new Exception("such broken");
    } catch (PDOException $error) {
        echo "PDO error: ". $error -> getMessage(). "\n";
    } catch (Exception $error) {
        echo "PHP error: ". $error -> getMessage(). "\n";
    }



    /**
     * Example #3: Throwing an Exception
     * 
     */
    function inverse($x) {
        if (!($x)) {
            throw new Exception('Division by zero');
        } 
    }

    try {
        echo inverse(5). "\n";
        echo inverse(0). "\n";
    } catch (Exception $error) {
        echo "Caught exception: ", $error -> getMessage(), "\n";
    }

    // Continue program
    echo "Continuing program\n";


    /**
     * Example #5: Nested Execption
     * 
     */
    class MyException extends Exception {}
    
    class Test {
        public function testing() {
            try {
                try {
                    throw new MyException("Foo!");
                } catch (MyException $error) {
                    // re-throw it
                    throw $error; echo "\n";
                }
            } catch (Exception $error) {
                var_dump($error -> getMessage()); // Gets printed
            }
        }
    }

    $foo = new Test;
    $foo -> testing();
?>