<!DOCTYPE html>

<html>
    <head>
        <title>
            PHP arithmetical operators
        </title>
    </head>
    <body>
        <?php
            echo("<h1>PHP arithmetical operators</h1>");

            $first = 43;
            $second = 11;
            $result;

            //  Addition
            $result = $first + $second;
            echo("<p>43 + 11 is equals to " . $result . "</p>");

            //  Subtraction
            $result = $first - $second;
            echo("<p>43 - 11 is equals to " . $result . "</p>");

            //  Multiplication
            $result = $first * $second;
            echo("<p>43 * 11 is equals to " . $result . "</p>");

            //  Division
            $result = $first * $second;
            echo("<p>43 / 11 is equals to " . $result . "</p>");

            //  Modulus
            $result = $first % $second;
            echo("<p>43 % 11 is equals to " . $result . "</p>");

            //  Exponentiation
            $result = $first ** $second;
            echo("<p>43 ** 11 is equals to " . $result . "</p>");

            //  Assignment
            $result = $first;
            if ($result == $first) {
                echo("<p>The value of result is equals to the value of first<br />\$result: $result<br />\$first: $first</p>");
            }   else    {
                echo("<p>The value of result is not equals to the value of first<br />\$result: $result<br />\$first: $first</p>");
            }

            //  Composite assignment
            
            //  Composite addiction assignment
            $result += $first;
            echo("<p>43 += 43 is equals to " . $result . "</p>");

            //  Composite subtraction assignment
            $result -= $first;
            echo("<p>86 -= 43 is equals to " . $result . "</p>");

            //  Composite multiplication assignment
            $result *= $first;
            echo("<p>43 * 43 is equals to " . $result . "</p>");

            //  Composite division assignment
            $result /= $first;
            echo("<p>1849 / 43 is equals to " . $result . "</p>");

            //  Composite modulus assignment
            $result %= $first;
            echo("<p>43 % 43 is equals to " . $result . "</p>");

            //  Composite exponentiation assignment
            $result **= $first;
            echo("<p>0 ** 43 is equals to " . $result . "</p>");

            /*
                Uniform increment and decrement operators

                Uniform increment adds one to a stored value by a
                variable. Uniform decrement adds one to a stored value
                by a variable.

                This kind of operators could work in one of two modes:
                prefix and posfix. The first means the variable value
                is evaluated, adding ou subtracting, before the usage
                of the value by the rest of an expression. The second
                performs the opposite behavior, the variable value is
                evaluated, adding or subtracting, after the usage of
                the value by the rest of an expression.
            */
            $result = $second;  //  $result has the integer value 11
            echo("<p>\$result: " . $result++ . "</p>");
            echo("<p>\$result: " . ++$result . "</p>");

            echo("<p>\$result: " . $result-- . "</p>");
            echo("<p>\$result: " . --$result . "</p>");
        ?>
    </body>
</html>