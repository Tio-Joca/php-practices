<!DOCTYPE html>

<html>
    <head>
        <title>
            PHP string operators
        </title>
    </head>
    <body>
        <?php
            echo("<h1>PHP string operators</h1>");

            //  Concatenation
            $string = "I can't";
            $another_string = " let go";

            $result = $string . $another_string;

            echo("<p>The \$string concatenated with \$another_string result in: $result</p>");

            //  Concatenation assignment
            $string = "I missed my ";
            $another_string = "onward flight to Prague";

            $string .= $another_string;

            echo("<p>The \$string contatenated with \$another_string result in: $string</p>");
        ?>
    </body>
</html>