<!DOCTYPE html>

<html>
    <head>
        <title>
            Escape characters
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Escape characters</h1>");

            /*
                Escape characters

                If you to use a primarlly illegal character in a string, you'll
                need to use a backslash (\) followed by the character you want
                to insert.

                Some examples of escape characters are listed below:

                \' -> single quote
                \" -> double quote
                \$ -> PHP variables
                \n -> New line
                \r -> Carriage return
                \t -> Tab
                \f -> Form feed
                \ooo -> Octal value
                \xhh -> Hexadecimal value
            */

            echo("We are the so-called \"Vikings\" from the north!");
        ?>
    </body>
</html>