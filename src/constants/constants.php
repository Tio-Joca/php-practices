<!DOCTYPE html>

<html>
    <head>
        <title>
            Constants
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Constants</h1>");

            /*
                Constants in PHP

                Exists two ways to create constants in PHP, using
                the const keyword and using the declare function.

                The difference between these two ways is the fact
                about the impossibility to use the const keyword
                to create constants inside another block scope.
                If you want to do this, you'll need to use the
                define function.

                Last but not least, you have to keep in mind that
                constants in PHP are global.
            */

            //  Creating a constant using the const keyword
            const PERFECT_NUMBER = 42;
            echo("<p>PERFECT_NUMBER: " . PERFECT_NUMBER . "</p>");

            //  Creating a constant using the define function
            define("PROCESSOR_CLOCK", 4.2);
            echo("<p>PROCESSOR_CLOCK: " . PROCESSOR_CLOCK . "</p>");

            //  Demonstrating the creation of constants inside a function
            function create_const (): void   {
                define("INSIDE_FUNCTION", (98375 / 2));
            }

            create_const();
            
            if (INSIDE_FUNCTION == (98375 / 2)) {
                echo("<p>The constant INSIDE FUNCTION was created and its value is " . INSIDE_FUNCTION . ".</p>");
            }   else    {
                echo("<p>The constant INSIDE FUNCTION wasn't created.</p>");
            }

            //  Creating an constant array
            const CONST_ARRAY = [2, 3, 5, 7, 11, 13, 17, 19];

            $counter = 0;

            while ($counter < count(CONST_ARRAY))   {
                echo("<p>The value inside CONST_ARRAY at the index $counter is: " . CONST_ARRAY[$counter++] . "</p>");
            }

            //  Proving that constants in PHP are global
            function print_some_constants (): void   {
                echo("<p>PERFECT_NUMBER: " . PERFECT_NUMBER . "</p>");
                echo("<p>PROCESSOR_CLOCK: " . PROCESSOR_CLOCK . "</p>");
            }

            print_some_constants();
        ?>
    </body>
</html>