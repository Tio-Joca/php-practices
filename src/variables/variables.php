<!DOCTYPE html>

<html>
    <head>
        <title>Introduction to variables in PHP</title>
    </head>
    <body>
        <h1>Introduction to variables in PHP</h1>
        <?php
            //  Integers

            $x = 2;
            $y = 3;

            echo($x . "<br>");
            echo($y . "<br>");

            //  Floats

            $a = 3.14;
            $b = 87.34;

            echo($a . "<br>");
            echo($b . "<br>");

            //  Booleans

            $t = true;
            $f = false;

            echo($t . "<br>");
            echo($f . "<br>");

            //  Strings

            $one_word = "Work";
            $phrase = "More than work";

            echo($one_word . "<br>");
            echo($phrase . "<br>");

            /*
                Getting the variable types

                To get the type of a variable, we need to use the var_dump() function
            */

            echo(var_dump($x) . "<br>");
            echo(var_dump($y) . "<br>");

            echo(var_dump($a) . "<br>");
            echo(var_dump($b) . "<br>");

            echo(var_dump($t) . "<br>");
            echo(var_dump($f) . "<br>");

            echo(var_dump($one_word) . "<br>");
            echo(var_dump($phrase) . "<br>");
        ?>
    </body>
</html>