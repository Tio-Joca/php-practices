<!DOCTYPE html>

<html>
    <title>Case sensitiviness in PHP</title>
    <body>
        <h1>Case sensitiviness in PHP</h1>
        <?php
            echo("The lines below was printed using the echo method with different styles of echo (i.e. echo, eCHO, ECHO)<br>" .
            "This is possible because keywords, classes, functions, user-defined functions are not case-sensitive.<br>");

            echo("<br>PHP ");
            echo("is ");
            ECHO("amazing.<br>");

            echo("<br>But variable names are case-sensitive.<br>");

            $color = "red";

            echo("<br>The color name stored is " . $color . "<br>");
            echo("The color name stored is " . $Color . "<br>");
            echo("The color name stored is " . $COLOR . "<br>");
        ?>
    </body>
</html>