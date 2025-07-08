<!DOCTYPE html>

<html>
    <head>
        <title>
            Numbers in PHP
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Numbers in PHP</h1>");

            //  Integers
            $some_int = 43;
            echo("<p>The value stored by some_int has this specs: ");
            echo(var_dump($some_int) . "</p>");

            //  Floats
            $some_float = -3.14;
            echo("<p>The value stored by some_float has this specs: ");
            echo(var_dump($some_float) . "</p>");

            //  Numeric strings
            $some_numeric_string = "457";
            echo("<p>The value stored by some_numeric_string has this specs: ");
            echo(var_dump($some_numeric_string) . "</p>");

            //  Intergers specs
            echo("<p>The smallest integer number that can be represented by PHP is: " . PHP_INT_MIN . "</p>");
            echo("<p>The biggest interger number that can be represented by PHP is: " . PHP_INT_MAX . "</p>");
            echo("<p>The size, in bytes, occupied by an integer represented by PHP is: " . PHP_INT_SIZE . "</p>");

            //  Verification of interger value
            echo("<p>The value stored by some_int is an integer: ");
            echo(var_dump(is_int($some_int)) . "</p>");
            echo("<p>The value stored by some_float is an integer: ");
            echo(var_dump(is_int($some_float)) . "</p>");

            //  Floats specs
            echo("<p>The smallest positive float number that can be represented by PHP is: " . PHP_FLOAT_MIN . "</p>");
            echo("<p>The biggest positive float number that can be represented by PHP is: " . PHP_FLOAT_MAX . "</p>");
            echo("<p>The smallest negative float number that can be represented by PHP is: " . (-PHP_FLOAT_MIN) . "</p>");
            echo("<p>The biggest negative float number that can be represented by PHP is: " . (-PHP_FLOAT_MAX) . "</p>");
            echo("<p>The number of decimal digits that can be converted to float and back without loss is: " . PHP_FLOAT_DIG . "</p>");
            echo("<p>The smallest representable positive number x, so that x + 1.0 != 1.0 is: " . PHP_FLOAT_EPSILON . "</p>");

            //  Verification of float value
            echo("<p>The value stored by some_int is an float: ");
            echo(var_dump(is_float($some_int)) . "</p>");
            echo("<p>The value stored by some_float is an float: ");
            echo(var_dump(is_float($some_float)) . "</p>");

            //  Finity and infinity float values
            $infinite_float = 1.9e+411;
            echo("<p>The value of infinite_float is finite: ");
            echo(var_dump(is_finite($infinite_float)) . "</p>");
            echo("<p>The value of infinity_float is infinite: ");
            echo(var_dump(is_infinite($infinite_float)) . "</p>");

            //  Not a number value
            $nan = acos(8);
            echo("<p>The value of nan is not a number: ");
            echo(var_dump(is_nan($nan)) . "</p>");

            //  Verification of numerical values
            $some_phrase = "Another day in paradise";
            echo("<p>The value of some_int is numerical: ");
            echo(var_dump(is_numeric($some_int)) . "</p>");
            echo("<p>The value of some_float is numerical: ");
            echo(var_dump(is_numeric($some_float)) . "</p>");
            echo("<p>The value of infinite_float is numeric: ");
            echo(var_dump(is_numeric($infinite_float)) . "</p>");
            echo("<p>The value of nan is numeric: ");
            echo(var_dump(is_numeric($nan)) . "</p>");
            echo("<p>The value of some_phrase is numeric: ");
            echo(var_dump(is_numeric($some_phrase)) . "</p>");

            //  Casting numeric strings and floats to integers
            $float_converted_to_int = intval($some_float);
            echo("<p>The value of some_float converted to int and its type is: ");
            echo(var_dump($float_converted_to_int) . "</p>");
            $String_converted_to_int = intval($some_numeric_string);
            echo("<p>The value of some_phrase converted to int and its type is: ");
            echo(var_dump($String_converted_to_int) . "</p>");
        ?>
    </body>
</html>