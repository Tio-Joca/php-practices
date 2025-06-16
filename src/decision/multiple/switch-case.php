<!DOCTYPE html>

<html>
    <head>
        <title>
            Switch case
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Switch case</h1>");

            /*
                Multiple decision structure - switch case

                Unlike single decision structure, multiple
                decision structure can execute multiple blocks
                of instructions, if desired. This kind of
                decision structure works by checking for a
                pattern to select which block of statements to
                execute first. If the block of instructions has
                a break at the end of the block, the execution
                of instructions from the decision structure ends
                here. But, if the block of instructions doesn't
                have a break at the end of the block, the
                execution of instructions from the decision
                structure continues to the next block of
                statements until it finds a break or ends its
                execution after the execution of the last block
                of instructions. Last but not least, if the
                value to be checked doesn't match any of the
                patterns, the default block of statements will
                be executed.

                Specifically, about the switch case, PHP defines
                this multiple decision structure to make a loose
                comparison between the value to be compared with
                the established pattern. In other words, for
                example, if the pattern are composed by integer
                values and the provided value to be checked is a
                numeric string, it converts the numeric string
                to a integer to make the checking process.
            */

            $value = 1;

            /*
                Switch case with break at the end of all blocks
                of instruction
            */
            switch ($value) {
                case 1:
                    echo("<p>The value stored by \$value is 1</p>");
                    break;
                case 2:
                    echo("<p>The value stored by \$value is 2</p>");
                    break;
                case 3:
                    echo("<p>The value stored by \$value is 3</p>");
                    break;
                default:
                    echo("<p>The value stored by \$value is less than 1 or greater than 3</p>");
                    break;  //  Optional, but I recommend for consistency of the source code
            }

            /*
                Equivalent to the previous example using single
                decision structure
            */
            if ($value == 1)    {
                echo("<p>The value stored by \$value is 1</p>");
            }   else if ($value == 2)   {
                echo("<p>The value stored by \$value is 2</p>");
            }   else if ($value == 3)   {
                echo("<p>The value stored by \$value is 3</p>");
            }   else    {
                echo("<p>The value stored by \$value is less than 1 or greater than 3</p>");
            }

            $result = 2;

            /*
                Switch case without break at the end of some
                blocks of instruction
            */
            switch ($value) {
                case 1:
                    $result = $value + $result;
                    echo("<p>\$result: $result</p>");
                case 2:
                    $result = $value - $result;
                    echo("<p>\$result: $result</p>");
                case 3:
                    $result = $value * $result;
                    echo("<p>\$result: $result</p>");
                    break;
                default:
                    $result = $value / $result;
                    echo("<p>\$result: $result</p>");
                    break;
            }

            /*
                Equivalent to the previous example using single
                decision structure
            */
            if ($value == 1)    {
                $result = $value + $result;
                echo("<p>\$result: $result</p>");
                $result = $value - $result;
                echo("<p>\$result: $result</p>");
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
            }   else if ($value == 2)   {
                $result = $value - $result;
                echo("<p>\$result: $result</p>");
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
            }   else if ($value == 3)   {
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
            }   else    {
                $result = $value / $result;
                echo("<p>\$result: $result</p>");
            }

            /*
                Switch case without break at the end of all
                blocks of instruction
            */
            switch ($value) {
                case 1:
                    $result = $value + $result;
                    echo("<p>\$result: $result</p>");
                case 2:
                    $result = $value - $result;
                    echo("<p>\$result: $result</p>");
                case 3:
                    $result = $value * $result;
                    echo("<p>\$result: $result</p>");
                default:
                    $result = $value / $result;
                    echo("<p>\$result: $result</p>");
            }

            /*
                Equivalent to the previous example using single
                decision structure
            */
            if ($value == 1)    {
                $result = $value + $result;
                echo("<p>\$result: $result</p>");
                $result = $value - $result;
                echo("<p>\$result: $result</p>");
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
                $result = $value / $result;
                echo("<p>\$result: $result</p>");
            }   else if ($value == 2)   {
                $result = $value - $result;
                echo("<p>\$result: $result</p>");
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
                $result = $value / $result;
                echo("<p>\$result: $result</p>");
            }   else if ($value == 3)   {
                $result = $value * $result;
                echo("<p>\$result: $result</p>");
                $result = $value / $result;
                echo("<p>\$result: $result</p>");
            }   else    {
                $result = $value / $result;
                echo("<p>\$result: $result</p>");
            }

            /*
                Switch case with multiple patterns related to
                the same block of instruction
            */
            switch ($value) {
                case 1:
                case 2:
                case 3:
                    echo("<p>The value stored by \$value is greater than or equal to 1 and less than or equal to 3.</p>");
                    break;
                default:
                    echo("<p>The value stored by \$value is less than 1 or greater than 3.</p>");
                    break;
            }

            /*
                Equivalent to the previous example using single
                decision structure
            */
            if (($value >= 1) && ($value <= 3)) {
                echo("<p>The value stored by \$value is greater than or equal to 1 and less than or equal to 3.</p>");
            }   else    {
                echo("<p>The value stored by \$value is less than 1 or greater than 3.</p>");
            }
        ?>
    </body>
</html>