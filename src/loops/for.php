<!DOCTYPE html>

<html>
    <head>
        <title>
            For loops
        </title>
    </head>
    <body>
        <?php
            echo("<h1>For loops</h1>");

            /*
                Repeating loops - For

                Repeting loops is a programming resource
                provided by most of all programming languages to
                able programmers to develop blocks of
                instruction with the capacity to be repeated,
                based on a boolean value that can be obtained
                with an evaluation of a conditional expression
                composed by comparison and/or logical operators.

                In this source code, I'll show to you the for
                loop. This kind of loop works using three
                expressions that will be inside of the for loop
                parenthesis. The first expression comprehends
                variables declarations, initializations and/or
                assignments. The second expression comprehends a
                boolean value or a conditional expression to be
                evaluated to a boolean value to decide if the
                loop needs to be executed or not. The third
                expression comprehends operations to be
                performed on the variables. The first expression
                is evaluated once, the second is evaluated
                before each iteration and the third is evaluated
                after each iteration.

                Be careful! If you don't provide the
                appropriated conditional expression to be
                evaluated, you may end up doing a infinite loop.
            */

            $counter;
            $verifier;

            //  For loop using an ascending counter

            for ($counter = 0; $counter < 10; $counter++)   {
                echo("<p>\$counter: $counter</p>");
            }

            //  For loop using a descending counter

            for ($counter = 9; $counter > -1; $counter--)   {
                echo("<p>\$counter: $counter</p>");
            }

            /*
                For loop using an ascending counter
                with a boolean verifier
            */

            for ($counter = 0, $verifier = true; $counter < 10 && $verifier; $verifier = ($counter === 4) ? false : true, $counter++)    {
                echo("<p>\$counter: $counter</p>");
            }

            /*
                For loop using a descending counter
                with a boolean verifier
            */

            for ($counter = 9, $verifier = false; $counter > -1 && ! $verifier; $verifier = ($counter === 5) ? true : false, $counter--) {
                echo("<p>\$counter: $counter</p>");
            }

            /*
                Factorial calculator algorithm

                The next example demonstrates one of many
                possibilities of for loops. The purpose of the
                algorithm below is to calculate the factorial
                from a provided integer number. It uses a single
                decision structure to answer to some default
                options for the received integer. But, if you
                look for the else block of statements, you'll
                see an application of a for loop to calculate
                the factorial.
            */

            $factorial;
            $factorial_result;

            $factorial = 7;

            if ($factorial < 0) {
                $factorial_result = 0;
            }   else if ($factorial === 0 ^ $factorial === 1)   {
                $factorial_result = 1;
            }   else if ($factorial === 2)  {
                $factorial_result = 2;
            }   else    {
                for ($counter = 3, $factorial_result = 2; $counter <= $factorial; $counter++)   {
                    $factorial_result = $factorial_result * $counter;
                }
            }

            if (((bool) $factorial_result)) {
                echo("<p>The result of factorial from \$factorial is $factorial_result</p>");
            }   else    {
                echo("<p>It's not possible to calculate the factorial from an integer value less than zero</p>");
            }
        ?>
    </body>
</html>