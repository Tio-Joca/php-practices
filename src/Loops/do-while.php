<!DOCTYPE html>

<html>
    <head>
        <title>
            Do while
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Do while</h1>");

            /*
                Repeating loops - Do while

                Repeting loops is a programming resource
                provided by most of all programming languages to
                able programmers to develop blocks of
                instruction with the capacity to be repeated,
                based on a boolean value that can be obtained
                with an evaluation of a conditional expression
                composed by comparison and/or logical operators.

                In this source code, I'll show to you the do
                while loop. This kind of loop works just like a
                while loop, but it executes its respective block
                of instructions once before the first usage of a
                boolean value or a comparison and/or logical
                expression to be evaluated to boolean value.

                Be careful! If you don't provide the
                appropriated conditional expression to be
                evaluated, you may end up doing a infinite loop.
            */

            $counter;
            $verifier;
            $sum;
            $limit;

            //  Do while loop using an ascending counter

            $counter = 10;

            do  {
                echo("<p>\$counter: $counter</p>");

                if ($counter < 10)  {
                    $counter = $counter + 1;
                }
            }   while ($counter < 10);

            //  Do while loop using a descending counter

            $counter = -1;

            do  {
                echo("<p>\$counter: $counter</p>");

                if ($counter > -1)  {
                    $counter = $counter - 1;
                }
            }   while ($counter > -1);

            /*
                Do while loop using an ascending counter with a
                boolean verifier
            */

            $counter = 0;
            $verifier = true;

            do  {
                echo("<p>\$counter: $counter</p>");
                $counter = $counter + 1;

            }   while ($counter < 10 && ! $verifier);

            /*
                Do while loop using a descending counter with a
                boolean verifier
            */

            $counter = 9;
            $verifier = false;

            do  {
                echo("<p>\$counter: $counter</p>");
                $counter = $counter - 1;

            }   while ($counter > -1 && $verifier);

            /*
                Sum of numbers algorithm

                The next example demonstrates one of many
                possibilities of do while loops. The purpose of
                the algorithm below is to calculate the sum of
                numbers in a range starting from 1 to a provided
                integer limit, with one as the first element of
                the sum and adding one until reach the limit. It
                uses a single decision structure to deal with
                some collateral effects that may occur due to
                the nature of the implemented algorithm.
            */

            $counter = 1;

            $sum = 0;
            $limit = 1024;

            do  {
                $sum = $sum + $counter;
                $counter = $counter + 1;
            }   while ($counter <= $limit);

            if ($limit > 0)   {
                echo("<p>The sum of numbers from 1 to $limit is $sum</p>");
            }   else    {
                echo("<p>It's not possible to provide a result to this operation because the given limit is less than or equal to zero.</p>");
            }
        ?>
    </body>
</html>