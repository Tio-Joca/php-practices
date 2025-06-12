<!DOCTYPE html>

<html>
    <head>
        <title>
            Casting in PHP
        </title>
    </head>
    <body>
        <?php
            echo("<h1>Casting in PHP</h1>");

            class Rectangle {
                private int $width;
                private int $height;
                private bool $is_square;

                public function __construct (int $width, int $height)   {
                    $this->width = $width;
                    $this->height = $height;
                    $this->is_square = ($width == $height);
                }

                public function get_width (): int   {
                    return $this->width;
                }
                public function get_height (): int  {
                    return $this->height;
                }
                public function set_width (int $width): void  {
                    $this->width = $width;
                    $this->set_is_square();
                }
                public function set_height (int $height): void  {
                    $this->height = $height;
                    $this->set_is_square();
                }
                public function set_is_square (): void  {
                    $this->is_square = ($this->width == $this->height);
                }
                public function is_square (): bool  {
                    return $this->is_square;
                }
                public function to_string (): string    {
                    return "Width of the rectangle: $this->width<br>Height of the rectangle: $this->height<br>This rectangle is a square: $this->is_square<br>";
                }
            }

            $some_int = 34;
            $some_float = 985.43;
            $some_bool = false;
            $some_string = "6.3 liters";
            $some_array = [12, -43, 53, 0, 12934];
            $some_object = new Rectangle (23, 43);
            $some_null = null;

            $converted_to_int;
            $converted_to_float;
            $converted_to_bool;
            $converted_to_string;
            $converted_to_array;
            $converted_to_object;

            //  Casting to int
            $converted_to_int = (int) $some_int;
            echo("<p>The value of some_int converted to int is: ");
            echo($converted_to_int . "</p>");

            $converted_to_int = (int) $some_float;
            echo("<p>The value of some_float converted to int is: ");
            echo($converted_to_int . "</p>");

            $converted_to_int = (int) $some_bool;
            echo("<p>The value of some_bool converted to int is: ");
            echo($converted_to_int . "</p>");

            $converted_to_int = (int) $some_string;
            echo("<p>The value of some_string converted to int is: ");
            echo($converted_to_int . "</p>");

            $converted_to_int = (int) $some_array;
            echo("<p>The value of some_array converted to int is: ");
            echo($converted_to_int . "</p>");

            $converted_to_int = (int) $some_null;
            echo("<p>The value of some_null converted to int is: ");
            echo($converted_to_int . "</p>");

            //  Casting to float
            $converted_to_float = (float) $some_int;
            echo("<p>The value of some_int converted to float is: ");
            echo($converted_to_float . "</p>");

            $converted_to_float = (float) $some_float;
            echo("<p>The value of some_float converted to float is: ");
            echo($converted_to_float . "</p>");

            $converted_to_float = (float) $some_bool;
            echo("<p>The value of some_bool converted to float is: ");
            echo($converted_to_float . "</p>");

            $converted_to_float = (float) $some_string;
            echo("<p>The value of some_string converted to float is: ");
            echo($converted_to_float . "</p>");

            $converted_to_float = (float) $some_array;
            echo("<p>The value of some_array converted to float is: ");
            echo($converted_to_float . "</p>");

            $converted_to_float = (float) $some_null;
            echo("<p>The value of some_null converted to float is: ");
            echo($converted_to_float . "</p>");

            //  Casting to bool
            $converted_to_bool = (bool) $some_int;
            echo("<p>The value of some_int converted to bool is: ");
            echo($converted_to_bool . "</p>");

            $converted_to_bool = (bool) $some_float;
            echo("<p>The value of some_float converted to bool is: ");
            echo($converted_to_bool . "</p>");

            $converted_to_bool = (bool) $some_bool;
            echo("<p>The value of some_bool converted to bool is: ");
            echo($converted_to_bool . "</p>");

            $converted_to_bool = (bool) $some_string;
            echo("<p>The value of some_string converted to bool is: ");
            echo($converted_to_bool . "</p>");

            $converted_to_bool = (bool) $some_array;
            echo("<p>The value of some_int converted to bool is: ");
            echo($converted_to_bool . "</p>");

            $converted_to_bool = (bool) $some_null;
            echo("<p>The value of some_int converted to bool is: ");
            echo($converted_to_bool . "</p>");

            //  Casting to string
            $converted_to_string = (string) $some_int;
            echo("<p>The value of some_int converted to string is: ");
            echo($converted_to_string . "</p>");

            $converted_to_string = (string) $some_float;
            echo("<p>The value of some_float converted to string is: ");
            echo($converted_to_string . "</p>");

            $converted_to_string = (string) $some_bool;
            echo("<p>The value of some_bool converted to string is: ");
            echo($converted_to_string . "</p>");

            $converted_to_string = (string) $some_string;
            echo("<p>The value of some_string converted to string is: ");
            echo($converted_to_string . "</p>");

            $converted_to_string = (string) $some_array;
            echo("<p>The value of some_array converted to string is: ");
            echo($converted_to_string . "</p>");

            $converted_to_string = (string) $some_null;
            echo("<p>The value of some_null converted to string is: ");
            echo($converted_to_string . "</p>");

            //  Casting to array
            $converted_to_array = (array) $some_int;
            echo("<p>The value of some_int converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_float;
            echo("<p>The value of some_float converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_bool;
            echo("<p>The value of some_bool converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_string;
            echo("<p>The value of some_string converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_array;
            echo("<p>The value of some_array converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_object;
            echo("<p>The value of some_object converted to array is: ");
            echo($converted_to_array . "</p>");

            $converted_to_array = (array) $some_null;
            echo("<p>The value of some_null converted to array is: ");
            echo($converted_to_array . "</p>");

            //  Casting to object
            $converted_to_object = (object) $some_int;
            echo("<p>The value of some_int converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_float;
            echo("<p>The value of some_float converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_bool;
            echo("<p>The value of some_bool converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_string;
            echo("<p>The value of some_string converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_array;
            echo("<p>The value of some_array converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_object;
            echo("<p>The value of some_object converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");

            $converted_to_object = (object) $some_null;
            echo("<p>The value of some_null converted to object is: ");
            var_dump($converted_to_object);
            echo("</p>");
        ?>
    </body>
</html>