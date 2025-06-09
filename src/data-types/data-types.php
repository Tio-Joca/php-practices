<!DOCTYPE html>

<html>
    <head>
        <title>
            PHP data types
        </title>
    </head>
    <body>
        <?php
            echo("<h1>PHP data types</h1>");
            /*
                The data types offered by PHP are listed bellow:

                Integers
                Floats
                Booleans
                Strings
                Arrays
                Objects
                Null
            */

            //  Integers
            $interger = 7;
            echo("<p>" . var_dump($interger) . "</p>");

            //  Floats
            $float = 3.14;
            echo("<p>" . var_dump($float) . "</p>");

            //  Booleans
            $boolean = true;
            echo("<p>" . var_dump($boolean) . "</p>");

            //  Strings
            $string = "Positive";
            echo("<p>" . var_dump($string) . "</p>");

            //  Arrays
            $vector = [10, 20, 30];
            echo("<p>" . var_dump($vector) . "</p>");

            //  Objects
            class Person {
                private string $name;
                private string $sex;
                private int $age;
                private int $height;

                public function __construct (string $name, string $sex, int $age, int $height)  {
                    $this->name = $name;
                    $this->sex = $sex;
                    $this->age = $age;
                    $this->height = $height;
                }

                public function get_name (): string {
                    return $this->name;
                }
                public function get_sex (): string  {
                    return $this->sex;
                }
                public function get_age (): int {
                    return $this->age;
                }
                public function get_height (): int  {
                    return $this->height;
                }

                public function set_name (string $name): void   {
                    $this->name = $name;
                }
                public function set_sex (string $sex): void {
                    $this->sex = $sex;
                }
                public function set_age (int $age): void    {
                    $this->age = $age;
                }
                public function set_height (int $height): void  {
                    $this->height = $height;
                }

                public function to_string (): string    {
                    return "Name: $this->name<br>Sex: $this->sex<br>Age: $this->age<br>Height: $this->height";
                }
            }

            $person = new Person("Joaquim Lucas", "M", 28, 175);
            echo("<p>" . $person->to_string() . "</p>");
            echo("<p>" . var_dump($person) . "</p>");

            //  Nulls
            $person = null;
            echo("<p>" . var_dump($person) . "</p>");

            /*
                Change of data type

                In PHP, you can store a value with different data type
                than the previous assigned value to a variable.
            */

            $change = 5;
            echo("<p>" . var_dump($change) . "</p>");

            $change = [2, 3, 5, 7, 11];
            echo("<p>" . var_dump($change) . "</p>");

            //  Casting
            $casting = 3.765;
            echo("<p>" . var_dump($casting) . "</p>");
            $casting = (int) $casting;
            echo("<p>" . var_dump($casting) . "</p>");
        ?>
    </body>
</html>