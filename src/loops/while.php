<!DOCTYPE html>

<html>
    <head>
        <title>
            While loops
        </title>
    </head>
    <body>
        <?php
            echo("<h1>While loops</h1>");

            /*
                Repeating loops - While

                Repeting loops is a programming resource
                provided by most of all programming languages to
                able programmers to develop blocks of
                instruction with the capacity to be repeated,
                based on a boolean value that can be obtained
                with an evaluation of a conditional expression
                composed by comparison and/or logical operators.

                In this source code, I'll show to you the while
                loop. This kind of loop works just using a
                boolean value or a conditional expression to be
                evaluated to a boolean value.

                Be careful! If you don't provide the
                appropriated conditional expression to be
                evaluated, you may end up doing a infinite loop.
            */

            $counter;
            $value;
            $verifier;

            //  While loop using an ascending counter

            $counter = 0;

            while ($counter < 10)   {
                echo("<p>\$counter: $counter</p>");
                $counter = $counter + 1;
            }

            //  While loop using a descending counter

            $counter = 9;

            while ($counter > -1)   {
                echo("<p>\$counter: $counter</p>");
                $counter = $counter - 1;
            }

            /*
                While loop using an ascending counter and a
                boolean verifier
            */

            $counter = 0;
            $verifier = true;

            while ($counter < 10 && $verifier)   {
                echo("<p>\$counter: $counter</p>");
                if ($counter == 4)  {
                    $verifier = false;
                }   else    {
                    $counter = $counter + 1;
                }
            }

            /*
                While loop using a descending counter and a
                boolean verifier
            */

            $counter = 9;
            $verifier = false;

            while ($counter > -1 && ! $verifier)    {
                echo("<p>\$counter: $counter</p>");
                if ($counter == 5)  {
                    $verifier = true;
                }   else    {
                    $counter = $counter - 1;
                }
            }

            /*
                Prime number checker algorithm

                The next example demonstrates one of many
                possibilities of while loops. The purpose of the
                algorithm below is to check if a integer is a
                prime number. It uses a single decision
                structure to answer to some default options for
                the received integer. But, if you look to the
                else block of statements, you'll see an
                application of a while loop to check if the
                received integer isn't a prime number.
            */
            
            $value = 27;

            if ($value < 2) {
                $verifier = false;
            }   else if (($value == 2) ^ ($value == 3)) {
                $verifier = true;
            }   else    {
                $counter = 2;
                $verifier = true;
                while (($counter < $value) && $verifier)    {
                    if ($value % $counter == 0) {
                        $verifier = false;
                    }   else    {
                        $counter = $counter + 1;
                    }
                }
            }
        ?>
    </body>
</html>