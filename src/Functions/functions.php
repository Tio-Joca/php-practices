<?php
    /*
        Functions in PHP

        Functions are blocks of code designed to perform a specific task.
        They are executed when called and help organize code into reusable
        components, improving maintainability and reducing redundancy.

        PHP functions can:
        - Accept parameters/arguments
        - Return values
        - Be called multiple times
        - Be defined once and used throughout the code
        - Have default parameter values
        - Use pass-by-reference to modify variables

        Functions can be defined using the 'function' keyword followed by:
        - Function name (should be descriptive of the task it performs)
        - Parameters in parentheses
        - Return type declaration (optional but recommended for type safety)
        - Function body enclosed in curly braces
    */

    /*
        The declare directive with strict_types=1

        The declare(strict_types=1) directive enables strict type checking
        for function calls in this file. When enabled:
        
        - PHP will validate that arguments passed to functions exactly match
          the declared parameter types
        - It will throw a TypeError if there's a type mismatch
        - Type declarations become strict contracts rather than suggestions
        - It only affects the current file (file scope)
        - It improves code reliability by catching type errors early
        
        This is especially important in this file as we're demonstrating 
        various function parameter types and return types.
    */
    declare(strict_types=1);

    $value;

    $first_seg;
    $second_seg;
    $third_seg;

    $width;
    $height;

    $result;
    
    echo("<!DOCTYPE html>");
    echo("<html>");
    echo("<head>");
    echo("<title>Creating functions in PHP</title>");
    echo("</head>");
    echo("<body>");
    echo("<h1>Creating functions in PHP</h1>");

    /*
        Simple function with no parameters and no return value
        
        This function simply outputs "Hello world" as a paragraph.
        The void return type indicates that this function doesn't return a value.
    */
    function hello (): void {
        echo("<p>Hello world</p>");
    }

    /*
        Function with one parameter and no return value
        
        This function takes a name as input and outputs a personalized greeting.
        The string type hint ensures the parameter must be a string.
    */
    function custom_hello (string $name): void  {
        echo("<p>Hello $name</p>");
    }

    /*
        Function with multiple parameters and conditional logic
        
        This function provides different greetings based on the person's age:
        - Children (under 12)
        - Teenagers (12-17)
        - Adults (18+)
        
        It demonstrates how functions can contain control structures.
    */
    function grettings (string $name, int $age): void   {
        if ($age < 12)  {
            echo("<p>Hello $name, nice to meet you. You're too young.</p>");
        }   else if ($age > 11 && $age < 18)    {
            echo("<p>Hello $name, nice to meet you. Enjoy your teenage.</p>");
        }   else    {
            echo("<p>Hello $name, nice to meet you. Enjoy your life and have a good day.</p>");
        }
    }

    /*
        Function with default parameter value
        
        This function demonstrates how to set a default value for a parameter.
        If no name is provided when the function is called, it will use "Gabriela".
    */
    function another_custom_hello (string $name = "Gabriela"): void {
        echo("<p>Hello $name</p>");
    }

    /*
        Function that returns a value
        
        This function adds two integers and returns their sum.
        The int return type ensures the function must return an integer.
    */
    function int_add (int $x, int $y): int  {
        return $x + $y;
    }

    /*
        Function using pass-by-reference
        
        This function demonstrates how to modify a variable passed to a function.
        The & symbol before the parameter name indicates pass-by-reference.
        Changes made to the parameter inside the function will affect the original variable.
    */
    function increment (int &$value): void  {
        $value = $value + 1;
    }

    /*
        Function with variable number of arguments
        
        This function accepts any number of arguments and adds them together.
        The ... operator (splat/spread operator) collects all provided arguments into an array.
    */
    function add_all (...$value): int   {
        $result = 0;
        $len = count($value);

        for ($counter = 0; $counter < $len; $counter++) {
            $result = $result + $value[$counter];
        }

        return $result;
    }

    /*
        Function to check if three segments can form a triangle
        
        This function uses the triangle inequality theorem to determine
        if the three provided lengths can form a valid triangle.
        A triangle is valid if the sum of any two sides is greater than the third side.
    */
    function is_triangle (float $a, float $b, float $c): bool   {
        return (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b));
    }

    /*
        Function to check if a rectangle is a square
        
        This function checks if the width and height are equal.
        If they are, the rectangle is a square.
    */
    function is_square (float $a, float $b): bool   {
        return $a == $b;
    }

    /*
        Recursive function to calculate factorial
        
        This function demonstrates recursion - a function calling itself.
        It calculates the factorial of a number, with special cases for:
        - Negative numbers (returns 0)
        - 0 and 1 (returns 1)
        - Other numbers (uses recursion to calculate)
    */
    function factorial (int $value): int    {
        if ($value < 0) {
            return 0;
        }   else if ($value == 0 ^ $value == 1) {
            return 1;
        }   else    {
            return $value * factorial($value - 1);
        }
    }

    /*
        Function to check if a number is prime
        
        This function determines if the given integer is a prime number.
        It uses optimization techniques:
        - Quick checks for even numbers
        - Special cases for 2 and 3
        - For other numbers, checks only odd divisors up to the square root
    */
    function is_prime (int $value): bool    {
        if ($value < 2 || $value % 2 == 0)  {
            return false;
        }   else if ($value == 2 ^ $value == 3) {
            return true;
        }   else    {
            $verifier = true;
            $counter = 3;

            while (($counter <= sqrt($value)) && $verifier)  {
                if ($value % $counter == 0) {
                    $verifier = false;
                }   else    {
                    $counter = $counter + 2;
                }
            }

            return $verifier;
        }
    }

    /*
        Temperature conversion functions
        
        The following six functions convert temperatures between
        Celsius, Fahrenheit, and Kelvin scales using standard formulas.
    */
    function celsius_to_fahrenheit (float $celsius): float  {
        return ($celsius / 5) * 9 + 32;
    }

    function celsius_to_kelvin (float $celsius): float  {
        return $celsius + 273.15;
    }

    function fahrenheit_to_celsius (float $fahrenheit): float   {
        return ($fahrenheit - 32) / 9 * 5;
    }

    function fahrenheit_to_kelvin (float $fahrenheit): float    {
        return ($fahrenheit - 32) / 9 * 5 + 273.15;
    }

    function kelvin_to_celsius (float $kelvin): float   {
        return $kelvin - 273.15;
    }

    function kelvin_to_fahrenheit (float $kelvin): float    {
        return ($kelvin - 273.15) / 5 * 9 + 32;
    }

    // Demonstration of the simple hello function
    hello();
    
    // Demonstration of custom hello function with a name parameter
    custom_hello("Joaquim");
    
    // Demonstration of greetings function with name and age parameters
    grettings("Dennis", 50);

    // Demonstration of function with default parameter
    // First with a custom name, then with the default name
    another_custom_hello("Ferdinand");
    another_custom_hello();

    // Demonstration of function that returns a value
    echo("<p>The sum of 3 and 2 is " . int_add(3, 2) . "</p>");

    // Demonstration of function using pass-by-reference
    // The $value variable will be modified by the function
    $value = 1023;
    echo("<p>The value stored by \$value before the increment: $value</p>");
    increment($value);
    echo("<p>The value stored by \$value after the increment: $value</p>");

    // Demonstration of function with variable number of arguments
    echo("<p>The sum of 1, 2, 3, 4, 5, 6, 7, 8, 9 and 10 is " . add_all(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . "</p>");

    // Demonstration of triangle validation function
    $first_seg = 5;
    $second_seg = 3;
    $third_seg = 2;

    if (is_triangle($first_seg, $second_seg, $third_seg))   {
        echo("<p>The provided straight segments forms a triangle.</p>");
    }   else    {
        echo("<p>The provided straight segments don't form a triangle.</p>");
    }

    // Demonstration of square validation function
    $width = 36;
    $height = 36;

    if (is_square($width, $height)) {
        echo("<p>The provided width and height forms a square.</p>");
    }   else    {
        echo("<p>The provided width and height don't form a square.</p>");
    }

    // Demonstration of factorial function
    $value = 10;
    $result = factorial($value);

    if ((bool) $result) {
        echo("<p>The resultant factorial of $value is $result.</p>");
    }   else    {
        echo("<p>It's not possible to determine a resultant factorial from a value less than zero.</p>");
    }

    // Demonstration of prime number checking function
    if (is_prime(984643))   {
        echo("<p>The value 984643 is prime number.</p>");
    }   else    {
        echo("<p>The value 984643 is not a prime number.</p>");
    }

    // Demonstration of temperature conversion functions
    echo("<p>35 celsius degrees is equal to " . celsius_to_fahrenheit(35) . " fahrenheit degrees.</p>");
    echo("<p>35 celsius degrees is equal to " . celsius_to_kelvin(35) . " kelvin degrees.</p>");
    echo("<p>95 fahrenheit degrees is equal to " . fahrenheit_to_celsius(95) . " celsius degrees.</p>");
    echo("<p>95 fahrenheit degrees is equal to " . fahrenheit_to_kelvin(95) . " kelvin degrees.</p>");
    echo("<p>308.15 kelvin degrees is equal to " . kelvin_to_celsius(308.15) . " celsius degrees.</p>");
    echo("<p>308.15 kelvin degrees is equal to " . kelvin_to_fahrenheit(308.15) . " fahrenheit degrees.</p>");

    echo("</body>");
    echo("</html>");
?>