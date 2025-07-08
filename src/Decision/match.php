<!DOCTYPE html>

<html>
    <head>
        <title>
            Match
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Match</h1>");

            /*
                Match decision structure

                This kind of decision structure works in a way
                that resembles a cross between the ternary
                operator and the switch case. It works checking
                if a value corresponds to one of a established
                set of patterns and selecting the respective
                value to be evaluated as a result of the
                expression. Otherwise, it returns the value
                specified by the default clause.

                It's important to appoint the fact that match
                decision structure makes a strict comparison
                between the value to be compared with the
                established patterns. In other words, the value
                needs to be equal and have the same type of the
                pattern to select the appropriated value to be
                evaluated.
            */

            $output;
            $value = 4;

            $output = match ($value)    {
                1 => "<p>The value stored by \$value is 1</p>",
                2 => "<p>The value stored by \$value is 2</p>",
                3 => "<p>The value stored by \$value is 3</p>",
                default => "<p>The value stored by \$value is less than 1 or greater than 3</p>"
            };

            echo($output);
            
            $value = 3;

            $output = match ($value)    {
                1, 2, 3 => "<p>The value stored by \$value is greater than or equal to 1 and less than or equal to 3</p>",
                default => "<p>The value stored by \$value is less than 1 or greater than 3</p>"
            };

            echo($output);
        ?>
    </body>
</html>