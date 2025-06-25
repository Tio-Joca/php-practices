<?php
    declare(strict_types=1);

    /*
        Vectors in Programming and PHP
        
        In programming, a vector (or a one-dimensional array) is a data structure 
        that stores a collection of elements in a linear sequence. Each element 
        can be accessed using a numeric index.
        
        In PHP, vectors are implemented using indexed arrays. PHP arrays are 
        highly flexible and can:
        - Store elements of different data types in the same array
        - Be dynamically resized (no need to declare size in advance)
        - Have indexes that are not necessarily sequential
        - Start with index 0 (zero-based indexing)
        
        Common vector operations include:
        1. Creation - Initializing a new vector
        2. Insertion - Adding elements at the beginning, middle, or end
        3. Access - Retrieving elements by index
        4. Update - Modifying elements at specific positions
        5. Deletion - Removing elements from different positions
        6. Traversal - Iterating through all elements
        
        PHP provides numerous built-in functions to manipulate arrays efficiently.
    */

    echo("<!DOCTYPE html>");
    echo("<html>");
    echo("<head>");
    echo("<title>Vectors in PHP</title>");
    echo("</head>");
    echo("<body>");
    echo("<h1>Vectors in PHP</h1>");

    $vector;

    $output;
    $counter;
    $length;

    /*
        Helper function to format and display vector contents
        
        This function converts an array to a readable string representation
        with special handling for boolean values.
    */
    function vector_output (array $vector): string  {
        $output = "[";

        for ($counter = 0, $length = count($vector); $counter < $length; ++$counter)    {
            if ($counter !== ($length - 1)) {
                if ($vector[$counter] === true) {
                    $output = $output . "true, ";
                }   else if ($vector[$counter] === false)   {
                    $output = $output . "false, ";
                }   else    {
                    $output = $output . $vector[$counter] . ", ";
                }
            }   else    {
                if ($vector[$counter] === true) {
                    $output = $output . "true]";
                }   else if ($vector[$counter] === false)   {
                    $output = $output . "false]";
                }   else    {
                    $output = $output . $vector[$counter] . "]";
                }
            }
        }

        return $output;
    }

    class Rectangle {
        private float $width;
        private float $height;
        private float $area;
        private float $perimeter;
        private bool $is_square;

        public function __construct (float $width, float $height)   {
            $this->width = $width;
            $this->height = $height;
            $this->set_area();
            $this->set_perimeter();
            $this->set_is_square();
        }

        public function get_width (): float {
            return $this->width;
        }

        public function get_height (): float    {
            return $this->height;
        }

        public function get_area (): float  {
            return $this->area;
        }

        public function get_perimeter (): float {
            return $this->perimeter;
        }

        public function get_is_square (): bool  {
            return $this->is_square;
        }

        public function set_width (float $width): void  {
            $this->width = $width;
            $this->set_area();
            $this->set_perimeter();
            $this->set_is_square();
        }

        public function set_height (float $height): void    {
            $this->height = $height;
            $this->set_area();
            $this->set_perimeter();
            $this->set_is_square();
        }

        private function set_area (): void  {
            $this->area = $this->width * $this->height;
        }

        private function set_perimeter (): void {
            $this->perimeter = ($this->width + $this->height) * 2;
        }

        private function set_is_square (): void {
            $this->is_square = ($this->width === $this->height);
        }

        public function __toString (): string   {
            return "Rectangle width: $this->width<br>Rectangle height: $this->height<br>Rectangle area: $this->area<br>Rectangle perimeter: $this->perimeter<br>Is this rectangle a square? " . (($this->is_square) ? "Yes" : "No");
        }
    }

    /*
        VECTOR CREATION - Method 1: Direct initialization with values
        Creating a vector with integer elements using array literal 
        syntax
    */
    $vector = [2, 3, 5, 7, 11, 13, 17, 19, 23];

    $output = "<p>Resultant vector created with different values per index: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        VECTOR CREATION - Method 2: Fill with same value
        Creating a vector with 10 elements, all initialized to 0
        array_fill(start_index, count, value) creates an array filled 
        with the specified value
    */
    $vector = array_fill(0, 10, 0);

    $output = "<p>Resultant vector created with a default value for all indexes: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        VECTOR CREATION - Method 3: String elements
        Creating a vector with string elements
    */
    $vector = ["Tschaikowsky", "Bach", "Mozart"];

    $output = "<p>Vector before the addition of an element with \"Chopin\" as its value at the beginning: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        INSERTION - Adding element at the beginning
        array_unshift() adds one or more elements to the beginning of 
        an array
    */
    array_unshift($vector, "Chopin");

    $output = "<p>Vector after the addition of an element with \"Chopin\" as its value at the beginning: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        INSERTION - Adding element at a specific position (middle)
        array_splice() removes a portion of the array and replaces it 
        with something else
        When count of removed elements is 0, it just inserts without 
        removing anything
    */
    $output = "<p>Vector before the addition of an element with \"Beethoven\" as its value at the index 1: " . vector_output($vector) . "</p>";
    echo($output);

    array_splice($vector, 1, 0, ["Beethoven"]);

    $output = "<p>Vector after the addition of an element with \"Beethoven\" as its value at the index 1: " . vector_output($vector) . "</p>";
    echo($output);
    
    /*
        INSERTION - Adding element at the end
        array_push() adds one or more elements to the end of an array
    */
    $output = "<p>Vector before the addition of an element with \"Brahms\" as its value at the ending: " . vector_output($vector) . "</p>";
    echo($output);

    array_push($vector, "Brahms");

    $output = "<p>Vector after the addition of an element with \"Brahms\" as its value at the ending: " . vector_output($vector) . "</p>";
    echo($output);

    //  VECTOR WITH OBJECTS - Creating a vector that stores Rectangle objects
    //  Demonstrates how vectors can store complex data types like objects
    $vector = [new Rectangle (2, 3), new Rectangle (4, 4), new Rectangle (16, 16), new Rectangle (32, 100)];

    //  TRAVERSAL - Iterating through vector elements with a condition
    //  Using a for loop to iterate and check a condition on each element
    $output = "<p>Rectangle objects that are squares:<br><br>";
    
    for ($counter = 0, $length = count($vector); $counter < $length; $counter++)    {
        if ($vector[$counter]->get_is_square()) {
            $output = $output . $vector[$counter]->__toString() . "<br><br>";
        }
    }

    if (str_ends_with($output, "<br><br>")) {
        $output = rtrim($output, "<br><br>");
    }

    $output = $output . "</p>";
    
    echo($output);

    //  TRAVERSAL - Another example of filtered iteration
    $output = "<p>Rectangle objects that aren't squares:<br><br>";
    
    for ($counter = 0, $length = count($vector); $counter < $length; $counter++)    {
        if (! $vector[$counter]->get_is_square()) {
            $output = $output . $vector[$counter]->__toString() . "<br><br>";
        }
    }

    if (str_ends_with($output, "<br><br>")) {
        $output = rtrim($output, "<br><br>");
    }

    $output = $output . "</p>";
    
    echo($output);

    //  VECTOR CREATION - Float elements
    $vector = [0.2, 0.3, 0.5, 0.7, 1.1, 1.3, 1.7, 1.9, 2.3];

    //  UPDATE - Modifying the first element (beginning)
    //  Direct index access to update a value
    $output = "<p>Vector before the update of an element at the beginning: " . vector_output($vector) . "</p>";
    echo($output);
    
    $vector[0] = $vector[0] + 2.34;

    $output = "<p>Vector after the update of an element at the beginning: " . vector_output($vector) . "</p>";
    echo($output);

    //  UPDATE - Modifying an element in the middle
    $output = "<p>Vector before the update of an element at the index 5: " . vector_output($vector) . "</p>";
    echo($output);

    $vector[6] = $vector[6] - 34;

    $output = "<p>Vector after the update of an element at the index 5: " . vector_output($vector) . "</p>";
    echo($output);
    
    /*
        UPDATE - Modifying the last element (end)
        Using count() to dynamically find the last index
    */
    $output = "<p>Vector before the update of an element at the ending: " . vector_output($vector) . "</p>";
    echo($output);
    
    $vector[count($vector) - 1] = $vector[count($vector) - 1] * -2;

    $output = "<p>Vector after the update of an element at the ending: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        VECTOR CREATION - Boolean elements
    */
    $vector = [false, true, true, true, false, false, false, true];

    /*
        DELETION - Removing the first element
        array_shift() removes the first element from an array and 
        returns it
    */
    $output = "<p>Vector before the removal of an element at the beginning: " . vector_output($vector) . "</p>";
    echo($output);

    array_shift($vector);

    $output = "<p>Vector after the removal of an element at the beginning: " . vector_output($vector) . "</p>";
    echo($output);

    /*
        DELETION - Removing an element from the middle
        array_splice() can remove elements without replacement
    */
    $output = "<p>Vector before the removal of an element at the index 5: " . vector_output($vector) . "</p>";
    echo($output);

    array_splice($vector, 5, 1);

    $output = "<p>Vector after the removal of an element at the index 5: " . vector_output($vector) . "</p>";
    echo($output);
    
    /*
        DELETION - Removing the last element
        array_pop() removes the last element from an array and returns it
    */
    $output = "<p>Vector before the removal of an element at the ending: " . vector_output($vector) . "</p>";
    echo($output);

    array_pop($vector);

    $output = "<p>Vector after the removal of an element at the ending: " . vector_output($vector) . "</p>";
    echo($output);

    echo("</body>");
    echo("</html>");
?>