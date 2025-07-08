<!DOCTYPE html>

<html>
    <title>
        Math functions in PHP
    </title>
    <body>
        <?php
            echo("<h1>Math functions in PHP</h1>");

            //  Demonstrations of math functions in PHP

            //  abs()
            echo("<p>The absolute value of 45 is: " . abs(45) . "</p>");
            echo("<p>The absolute value of -45 is: " . abs(-45) . "</p>");

            //  floor()
            echo("<p>The floored value of 0.5 is: " . floor(0.5) . "</p>");

            //  round() - It isn't work using banker's rounding by default
            echo("<p>The rounded value of 0.5 is: " . round(0.5) . "</p>");

            //  ceil()
            echo("<p>The ceiled value of 0.5 is: " . ceil(0.5) . "</p>");

            //  log10()
            echo("<p>The base 10 log of 100000 is: " . log10(100000) . "</p>");

            //  pow()
            echo("<p>The 1024 raised to the power of 4 is: " . pow(1024, 4) . "</p>");

            $vector = [23, -13, 49, 54, -78, 44];

            //  min()
            echo("<p>The minimum value contained by \$vector is: " . min($vector) . "</p>");

            //  max()
            echo("<p>The maximum value contained by \$vector is: " . max($vector) . "</p>");

            //  sqrt()
            echo("<p>The square root of 64 is: " . sqrt(64) . "</p>");

            //  intdiv()
            echo("<p>The integer division between 5 by 3 is: " . intdiv(5, 3) . "</p>");
        ?>
    </body>
</html>