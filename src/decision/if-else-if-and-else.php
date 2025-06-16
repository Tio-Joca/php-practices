<!DOCTYPE html>

<html>
    <head>
        <title>
            Single decision structure
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Single decision structure</h1>");

            /*
                Single decision structure

                This kind of statement works based on a boolean
                value that can be obtained after an evaluation
                of a conditional expression composed by
                comparison and/or logical operators. If the
                boolean value is true, the block of statements
                related to its respective conditional expression
                will be executed. If the evaluation of a
                conditional expression results in a false value
                and the source code has other conditional
                expressions to be evaluated, these subsequent
                conditional expressions will be evaluated until
                finding the first conditional expression
                evaluated to true to execute its respective
                block of statements. If the latest possible
                block of the single decision structure exists
                right after the last conditional expression,
                this last block of statements will be executed.
                Otherwise, the execution continues with the next
                statement right after the decision structure.

                Simplifying, this structure controls program
                flow based on conditional expressions:
                
                - if: Evaluates a condition. If true, executes
                its code block.
                - elseif or else if: If previous conditions are
                false, evaluates another condition.
                - else: Executes when all previous conditions
                are false.
                
                The program evaluates conditions sequentially
                until finding the first true condition, executes
                its block, then skips the rest of the structure.
            */

            //  If
            $value = 4;

            if ($value % 2 == 0)    {
                echo("<p>The value stored in \$value is even.</p>");
            }

            //  If and else
            $value = 3;

            if ($value % 2 == 0)    {
                echo("<p>The value stored in \$value is even.</p>");
            }   else    {
                echo("<p>The value stored in \$value is odd.</p>");
            }

            /*
                Usage of ternary operator as an alternative to
                if and else decision structure

                It's possible to use the ternary operator as a
                substitute of if and else in simpler situations
                when you need to store a value in a variable or
                a constant.

                For example, the example below do the same thing
                that the example above do using the ternary
                operator.
            */
            $output = ($value % 2 == 0) ? "<p>The value stored in \$value is even.</p>" : "<p>The value stored in \$value is odd.</p>";
            echo($output);

            //  If, else if and else
            $value = 0;

            if ($value < 0) {
                echo("<p>The value stored in \$value is less than zero.</p>");
            }   else if ($value == 0)   {
                echo("<p>The value stored in \$value is equal to zero.</p>");
            }   else    {
                echo("<p>The value stored in \$value is greater than zero.</p>");
            }

            $sex = 'F';
            $contribution = 30;
            $age = 74;

            //  Nested single decision structure
            if ($sex == 'M')    {
                if (($contribution >= 20) && ($age >= 65))  {
                    echo("<p>Congratulations sir, your request for retirement was approved.</p>");
                }   else    {
                    echo("<p>Sorry sir, your request for retirement was rejected.</p>");
                }
            }   else    {
                if (($contribution >= 15) && ($age >= 62))  {
                    echo("<p>Congratulations miss, your request for retirement was approved.</p>");
                }   else    {
                    echo("<p>Sorry miss, your request for retirement was rejected.</p>");
                }
            }
        ?>
    </body>
</html>