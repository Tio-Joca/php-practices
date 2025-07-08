<!DOCTYPE html>

<html>
    <head>
        <title>
            Concatenation of strings
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Concatenation of strings</h1>");

            //  Concatenation of strings
            $first = "Another brick ";
            $second = " in the wall";
            $third = $first . $second;

            echo("<p>The first string value concatenated with second string value is: $third</p>");

            //  Concatenation of strings using double quotes
            $fourth = "Lost connection";
            $fifth = "to Prague";
            $sixth = "$fourth $fifth";
            echo("<p>The fourth string value concatenated with fifth string value is: $sixth</p>");
        ?>
    </body>
</html>