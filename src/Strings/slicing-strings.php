<!DOCTYPE html>

<html>
    <head>
        <title>
            Slicing string in PHP
        </title>
    </head>
    <?php
        echo("<h1>Slicing strings in PHP</h1>");

        //  Slicing a string
        $james = "Bond, James Bond";
        echo("<p>The james string value sliced from the 0 index of character to the 3 index of character is: " . substr($james, 0, 4) . "</p>");

        //  Slicing a string from a starting index to the end
        echo("<p>The james string value sliced from the 6 index of character to the end of the string is: " . substr($james, 6) . "</p>");

        //  Slicing a string with a negative starting index
        echo("<p>The james string value sliced from the -10 index of character to the -6 index of character is: " . substr($james, -10, 5));

        //  Slicing a string with a negative ending index
        echo("<p>The james string value sliced from the -16 index of character to the -5 index of character is: " . substr($james, -16, -5) . "</p>");
    ?>
</html>