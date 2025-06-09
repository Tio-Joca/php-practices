<!DOCTYPE html>

<html>
    <head>
        <title>
            Echo and print
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Echo and print</h1>");
            /*
                Echo and print have the same purpose with diferent features

                Both are used to output data to the screen, but echo doesn't
                return a value while print returns the integer value 1. Echo
                accept multiple parameters while print accept one parameter.
                In terms of performance, echo is marginally faster than print.
            */

            echo "<p>Hello</p>";
            echo("<p>Hello</p>");

            echo("<h2>PHP is Fun!</h2>");
            echo("Hello world!<br>");
            echo("I'm about to learn PHP!<br>");
            echo("This " . "string " . "was " . "made " . "with multiple parameters.");

            $text = "Learning PHP";
            $another_text = "at <a href=\"https://w3schools.com/php\">w3schools.com</a>";

            echo("<p>$text $another_text.</p>");
            echo('<p>' . $text . ' ' . $another_text . '.</p>');

            print "<p>Hello</p>";
            print("<p>Hello</p>");

            print("<h2>PHP is Fun!</h2>");
            print("Hello world!<br>");
            print("I'm about to learn PHP!<br>");
            print("This " . "string " . "was " . "made " . "with multiple parameters.");

            print("<p>$text $another_text.</p>");
            print('<p>' . $text . ' ' . $another_text . '.</p>');
        ?>
    </body>
</html>