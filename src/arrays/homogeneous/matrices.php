<?php
    declare(strict_types=1);

    echo("<!DOCTYPE html>\n<html><head><title>Vectors in PHP</title></head><body><h1>Vectors in PHP</h1>");

    $matrix;

    $x_counter;
    $y_counter;

    $lin_length;
    $col_length;

    $output;
    
    function matrix_output (array $matrix): string  {
        $output = "[";
        
        for ($x_counter = 0, $lin_length = count($matrix); $x_counter < $lin_length; ++$x_counter)  {
            $output = $output . "[";

            for ($y_counter = 0, $col_length = count($matrix[$x_counter]); $y_counter < $col_length; ++$y_counter)  {
                if ($y_counter < ($col_length - 1)) {
                    if ($matrix[$x_counter][$y_counter] === true)   {
                        $output = $output . "true, ";
                    }   else if ($matrix[$x_counter][$y_counter] === false) {
                        $output = $output . "false, ";
                    }   else    {
                        $output = $output . $matrix[$x_counter][$y_counter] . ", ";
                    }
                }   else    {
                    if ($matrix[$x_counter][$y_counter] === true)   {
                        $output = $output . "true]";
                    }   else if ($matrix[$x_counter][$y_counter] === false) {
                        $output = $output . "false]";
                    }   else    {
                        $output = $output . $matrix[$x_counter][$y_counter] . "]";
                    }
                }
            }

            if ($x_counter < ($lin_length - 1)) {
                $output = $output . ", ";
            }   else    {
                $output = $output . "]";
            }
        }

        return $output;
    }

    $matrix = [[23, 46], [69, 92], [105, 128]];

    $output = "<p>Resultant matrix created with different integer values per indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [array_fill(0, 4, 0), array_fill(0, 4, 0), array_fill(0, 4, 0), array_fill(0, 4, 0)];

    $output = "<p>Resultant matrix created with a default integer value for all indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [[0.0, 0.1, 0.2], [0.1, 0.0, 0.1], [0.2, 0.1, 0.0]];

    $output = "<p>Resultant matrix created with different float values per indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [array_fill(0, 6, 0.0), array_fill(0, 6, 0.0), array_fill(0, 6, 0.0)];

    $output = "<p>Resultant matrix created with a default float value for all indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [[false, false, true], [false, true, false], [true, false, false]];

    $output = "<p>Resultant matrix created with different boolean values per indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [array_fill(0, 6, false), array_fill(0, 6, false), array_fill(0, 6, false)];

    $output = "<p>Resultant matrix created with a default boolean value for all indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [["Lewis Hamilton", "George Russell"], ["Fernando Alonso, Carlos Sainz Junior"], ["Pierre Gasly", "Esteban Ocon"]];

    $output = "<p>Resultant matrix created with different string values per indexes: " . matrix_output($matrix) . "</p>";
    echo($output);

    $matrix = [array_fill(0, 4, ""), array_fill(0, 4, ""), array_fill(0, 4, ""), array_fill(0, 4, ""), array_fill(0, 4, ""), array_fill(0, 4, "")];

    $output = "<p>Resultant matrix created with a default string value for all indexes: " . matrix_output($matrix) . "</p>";
    echo($output . "</body></html>");
?>