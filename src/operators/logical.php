<!DOCTYPE html>

<html>
    <head>
        <title>
            PHP logical operators
        </title>
    </head>
    <body>
        <?php
            echo("<h1>PHP logical operators</h1>");

            /*
                Comparison operators

                This kind of operator returns true or false according
                to the comparison operation to make with two operands.

                This operators and some examples of its applications
                are listed below.
            */

            //  Equality
            echo("<p>43 == \"23\": ");
            echo(var_dump((43 == "23")) . "</p>");
            echo("<p>43 == \"43\": ");
            echo(var_dump((43 == "43")) . "</p>");

            //  Identical
            echo("<p>43 === \"43\": ");
            echo(var_dump((43 === "43")) . "</p>");
            echo("<p>43 === 43: ");
            echo(var_dump((43 === 43)) . "</p>");

            //  Not equal
            echo("<p>43 != \"43\": ");
            echo(var_dump((43 != "43")) . "</p>");
            echo("<p>43 != \"23\": ");
            echo(var_dump((43 != "23")) . "</p>");

            //  Not identical
            echo("<p>43 !== 43: ");
            echo(var_dump((43 !== 43)) . "</p>");
            echo("<p>43 !== \"43\": ");
            echo(var_dump((43 !== "43")) . "</p>");

            //  Less than
            echo("<p>43 < 23: ");
            echo(var_dump((43 < 23)) . "</p>");
            echo("<p>43 < 143: ");
            echo(var_dump((43 < 143)) . "</p>");

            //  Greater than
            echo("<p>43 > 143: ");
            echo(var_dump((43 > 143)) . "</p>");
            echo("<p>43 > 23: ");
            echo(var_dump((43 > 23)) . "</p>");

            //  Less than or equal to
            echo("<p>43 <= 23: ");
            echo(var_dump((43 <= 23)) . "</p>");
            echo("<p>43 <= 43: ");
            echo(var_dump((43 <= 43)) . "</p>");
            echo("<p>43 <= 143: ");
            echo(var_dump((43 <= 143)) . "</p>");

            //  Greater than or equal to
            echo("<p>43 >= 143: ");
            echo(var_dump((43 >= 143)) . "</p>");
            echo("<p>43 >= 43: ");
            echo(var_dump((43 >= 43)) . "</p>");
            echo("<p>43 >= 23: ");
            echo(var_dump((43 >= 23)) . "</p>");

            //  Spaceship
            echo("<p>43 <=> 23: " . (43 <=> 23) . "</p>");
            echo("<p>43 <=> 43: " . (43 <=> 43) . "</p>");
            echo("<p>43 <=> 143: " . (43 <=> 143) . "</p>");

            /*
                Logical operators

                This kind of operator returns true or false according
                to the logical operation to make with two operands.
                But, differently from comparison operators, these
                operators must be used with boolean values as its
                operands.

                This operators and some examples of its applications
                are listed below.
            */

            //  NOT
            echo("<p>! false: ");
            echo(var_dump(! false) . "</p>");
            echo("<p>! true: ");
            echo(var_dump(! true) . "</p>");

            //  AND
            echo("<p>false && false: ");
            echo(var_dump(false && false) . "</p>");
            echo("<p>false && true: ");
            echo(var_dump(false && true) . "</p>");
            echo("<p>true && false: ");
            echo(var_dump(true && false) . "</p>");
            echo("<p>true && true: ");
            echo(var_dump(true && true) . "</p>");

            //  OR
            echo("<p>false || false: ");
            echo(var_dump(false || false) . "</p>");
            echo("<p>false || true: ");
            echo(var_dump(false || true) . "</p>");
            echo("<p>true || false: ");
            echo(var_dump(true || false) . "</p>");
            echo("<p>true || true: ");
            echo(var_dump(true || true) . "</p>");

            //  XOR
            echo("<p>false ^ false: ");
            echo(var_dump(false ^ false) . "</p>");
            echo("<p>false ^ true: ");
            echo(var_dump(false ^ true) . "</p>");
            echo("<p>true ^ false: ");
            echo(var_dump(true ^ false) . "</p>");
            echo("<p>true ^ true: ");
            echo(var_dump(true ^ true) . "</p>");

            /*
                Conditional assignment operators

                This kind of operator works choosing one of two
                possibilities to be the result of an expression 
                depending on the operator purpose.
            */

            //  Ternary operator
            $value = 4;
            $even = (($value % 2) == 0) ? true : false;

            echo("<p>4 is even: ");
            echo(var_dump($even) . "</p>");

            $value++;

            $even = (($value % 2) == 0) ? true : false;

            echo("<p>5 is even: ");
            echo(var_dump($even) . "</p>");

            //  Null coalescing
            $first = 73;
            $second = 37;

            $result = $first ?? $second;

            echo("<p>Result: $result</p>");

            $first = null;
            $second = 37;

            $result = $first ?? $second;

            echo("<p>Result: $result</p>");
        ?>
    </body>
</html>