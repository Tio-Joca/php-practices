<!DOCTYPE html>

<html>
    <head>
        <title>
            Modifying strings
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Modifying strings</h1>");

            //  Converting a string literal to upper case
            $some_string = "i believe in yesterday";
            echo("<p>The upper case of some_string: " . strtoupper($some_string). "</p>");

            //  Converting a string literal to lower case
            $another_string = "ANOTHER BRICK IN THE WALL";
            echo("<p>The lower case of another_string: " . strtolower($another_string) . "</p>");

            //  Replacing a substring of a string
            $gretting = "Hello world";
            echo("<p>The gretting string value without usage of replace: $gretting</p>");
            echo("<p>The gretting string value with usage of replace: " . str_replace("world", "Gabriela", $gretting) . "</p>");

            //  Reversing a string literal
            $to_reverse = "provider";
            echo("<p>The reverse of the to_reverse string value is: " . strrev($to_reverse) . "</p>");

            //  Trimming a string
            $to_trim = "  Dell G5 5590  ";
            echo("<p>The string value of to_trim using trim is: " . $to_trim . "</p>");

            $simple_string = "Visual Studio Code";
            $array_of_strings = explode(" ", $simple_string);

            $count = 0;

            while ($count < count($array_of_strings))   {
                echo("<p>array_of_strings[$count]: $array_of_strings[$count]</p>");
                $count++;
            }
        ?>
    </body>
</html>