<!DOCTYPE html>

<html>
    <head>
        <title>
            For each
        </title>
    </head>
    <body>
        <?php
            echo("<h1>For each</h1>");

            /*
                Repeating loops - For each

                Unlike the previous repeating loops presented
                here, the for each executes a well defined cycle
                of iterations. This occurs because the purpose
                of a for each loop is to provide a way to access
                data from iterable sources of data. In PHP,
                arrays and objects are considered iterable
                sources of data. This kind of repeating loop
                works performing one iteration per each data
                related to a iterable source of data.
            */

            $vector;

            $object;

            $index;
            $key;

            $value;

            $ref;

            $investment;
            $interest_rate;
            $years;

            $next_value;

            $vector = [12, 24, 48, 96, 192, 384, 768, 1536];

            /*
                For each loop use case to display values from a
                standard array
            */

            foreach ($vector as $value) {
                echo("<p>\$value: $value</p>");
            }

            /*
                For each loop use case to display index/value
                pairs from a standard array
            */

            foreach ($vector as $index => $value)   {
                echo("<p>\$index: $index, \$value: $value</p>");
            }

            $vector = ["Jim" => 1.90, "Dwight" => 1.83, "Pam" => 1.60, "Angela" => 1.50, "Michael" => 1.75, "Holly" => 1.65];

            /*
                For each loop use case to display values from a
                associative array
            */

            foreach ($vector as $value) {
                echo("<p>\$value: $value</p>");
            }

            /*
                For each loop use case to display key/value
                pairs from a associative array
            */

            foreach ($vector as $key => $value) {
                echo("<p>\$key: $key, \$value: $value</p>");
            }

            class Vehicle   {
                private string $name;
                private int $year;
                private string $plate;
                private float $price;
                private float $km;

                public function __construct (string $name, int $year, string $plate, float $price, float $km)   {
                    $this->name = $name;
                    $this->year = $year;
                    $this->plate = $plate;
                    $this->price = $price;
                    $this->km = $km;
                }

                public function getName (): string  {
                    return $this->name;
                }
                public function getYear (): int {
                    return $this->year;
                }
                public function getPlate (): string {
                    return $this->plate;
                }
                public function getPrice (): float  {
                    return $this->price;
                }
                public function getKm (): float {
                    return $this->km;
                }

                public function setName (string $name): void    {
                    $this->name = $name;
                }
                public function setYear (int $year): void   {
                    $this->year = $year;
                }
                public function setPlate (string $plate): void  {
                    $this->plate = $plate;
                }
                public function setPrice (float $price): void   {
                    $this->price = $price;
                }
                public function setKm (float $km): void {
                    $this->km = $km;
                }

                public function __toString (): string   {
                    return "Name: $this->name<br>Year: $this->year<br>Plate: $this->plate<br>Price: $this->price<br>Kilometers: $this->km";
                }

                /*
                    For each loop use case to display properties
                    values from an Vehicle object
                */

                public function iterateValues (): string    {
                    $output = "";

                    foreach ($this as $value)   {
                        $output = $output . "\$value: $value<br>";
                    }

                    $output = rtrim($output, "<br>");

                    return $output;
                }

                /*
                    For each loop use case to display key/value
                    pairs related to properties from an Vehicle
                    object
                */

                public function iterateKeysValues (): string    {
                    $output = "";

                    foreach ($this as $key => $value)   {
                        $output = $output . "\$key: $key, \$value: $value<br>";
                    }

                    $output = rtrim($output, "<br>");

                    return $output;
                }
            }

            $object = new Vehicle ("C class", 2025, "AMG2S45", 445.900, 0.0);

            echo("<p>" . $object->iterateValues() . "</p>");
            echo("<p>" . $object->iterateKeysValues() . "</p>");
            
            $vector = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43];

            foreach ($vector as $index => $value)   {
                echo("<p>\$index: $index, \$value: $value</p>");
            }

            /*
                Usage of references in for each loops

                Usually, for each loops can't be used to make
                changes in the value stored by an array. But, in
                PHP, we can use a variable to handle a reference
                to each value inside an array. With this
                reference to the current element in the array,
                we can update the value from the current index
                to a value of our choice. But we have to keep in
                mind the fact that this reference stored by the
                variable used for this purpose will be updated
                to the next value of the array each time the for
                each loop iterates until it reaches the final
                iteration.
            */

            foreach ($vector as &$ref)  {
                if ($ref % 2 !== 0) {
                    $ref = $ref + 1;
                }
            }

            foreach ($vector as $index => $value)   {
                echo("<p>\$index: $index, \$value: $value</p>");
            }

            /*
                Simple composite interest calculator algorithm

                The next example demonstrates one of many
                possibilities of for each loops. The purpose of
                the algorithm below is to calculate the return
                value from a investment based in a composite
                interest, without monthly contributions. The
                algorithm below uses a for each loop to store
                the respective value returned per year by the
                investiment in correspondent index of the array.
                This for each loop also make an arithmetical
                operation to determine the value to be stored
                for the next year.
            */

            $investment = 1000.0;
            $interest_rate = 12.0;
            $years = 30;

            $vector = [];
            $vector = array_fill(0, ($years + 1), 0.0);

            $next_value = $investment;

            foreach ($vector as &$ref)  {
                $ref = $next_value;
                $next_value = $next_value * (1.0 + (0.01 * $interest_rate));
            }

            foreach ($vector as $index => $value)   {
                echo("<p>Year: $index, Value: $value</p>");
            }
        ?>
    </body>
</html>