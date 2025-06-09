<!DOCTYPE html>

<html>
    <head>
        <title>
            Variables scope in PHP
        </title>
    </head>
    <body>
        <h1>
            Variables scope in PHP
        </h1>
        <?php
            $int = 5;   //  This is a global variable

            function simple_test () {
                //  The attempt to use the $int varible inside of the scope of this function will cause an warning.
                echo("<p>The value of variable int is $int.</p>");
            }

            simple_test();

            //  But, when we execute the same statement outside the function scope, the code runs without problems.
            echo("<p>The value of variable int is $int.</p>");

            function another_test ()    {
                $double = 3.14; //  This is a local variable
                echo("<p>The value of the variable double is $double.</p>");    // This line of code works perfectly.
            }

            another_test();

            //  But, when we try to use the same statement outside the function scope, we'll get an warning.
            echo("<p>The value of the variable double is $double.</p>");

            //  When we need to use global variables outside of a local scope, we can use the global keyword to access them.

            $five = 5;
            $ten = 10;
            $sum = 0;

            function my_test()  {
                global $five, $ten, $sum;

                $sum = $five + $ten;
            }

            my_test();
            echo("<p>The sum of $five with $ten is $sum.</p>");

            /*
                Similarly with the usage of the global keyword, we could use $GLOBALS array.

                But, differently from stardard arrays, the indexes of this arrays holds the name of the variable.
            */

            function one_more_test ()   {
                $GLOBALS["sum"] = $GLOBALS["five"] + $GLOBALS["ten"];
            }

            one_more_test();
            echo("<p>The sum of $five with $ten is $sum.</p>");

            function static_demo () {
                static $value = 5;  //  This is a static variable

                echo("<p>The value of the static variable value is $value.</p>");
                ++$value;
            }

            static_demo();
            static_demo();
            static_demo();
        ?>
    </body>
</html>