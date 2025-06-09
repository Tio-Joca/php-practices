<!DOCTYPE html>

<html>
    <head>
        <title>
            Strings in PHP
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Strings in PHP</h1>");
            //  Output of a string literal
            echo("<p>Hello</p>");

            //  Output of a string value from a variable
            $name = "Joaquim";
            echo("<p>Hello $name</p>");

            /*
                Differences between strings literals using single and
                double quotes

                String literals using single quotes don't accept the
                return of values from variables, but string literals
                with double qoutes can do this for us.
            */
            $another_name = "Gabriela";
            echo('<p>Hello $another_name</p>');
            echo("<p>Hello $another_name</p>");

            //  Length of a string
            echo("<p>Length of name: " . strlen($name) . "</p>");
            echo("<p>Length of another_name: " . strlen($another_name) . "</p>");

            //  Word count
            $phrase = "PHP is funny";
            $another_phrase = "Vladimir Nabokov";
            echo("<p>Quantity of words in phrase: " . str_word_count($name) . "</p>");
            echo("<p>Quantity of words in another_phrase: " . str_word_count($another_phrase) . "</p>");
            
            //  Search for a substring in a string
            $example = "This is a test for the beginners. Yeah, this is a test.";
            echo("<p>The first index of the test substring within example string is: " . strpos($example, "test") . "</p>");
        ?>
    </body>
</html>