<!DOCTYPE html>

<html>
    <head>
        <title>
            Gerador de jogos para a Mega Sena
        </title>
    </head>
    <?php
        function game (int $seed): array   {
            $numbers = [];
            for ($value = 1; $value < 61; $value++) {
                $numbers[$value - 1] = $value;
            }

            $array = [0, 0, 0, 0, 0, 0];

            for ($counter = 0; $counter < count($array); $counter++)   {
                mt_srand(time() * $seed);

                $generated_random = mt_rand(0, (59 - $counter));
                
                if ($counter == 0)    {
                    $array[$counter] = $generated_random;
                    unset($numbers[$generated_random]);
                }   else    {
                    $verifier = false;
                    $another_counter = 0;
                    while (($another_counter < $counter) && (! $verifier))    {
                        if ($generated_random == $array[$another_counter])  {
                            $verifier = true;
                        }
                        $another_counter++;
                    }
                    if ($verifier)  {
                        $counter--;
                    }   else    {
                        $array[$counter] = $generated_random;
                        unset($numbers[$generated_random]);
                    }
                }
            }
            return $array;
        }
        
        function lotto_games (int $seed): array  {
            $lotto_games = [[], [], [], [], [], []];

            for ($counter = 0; $counter < count($lotto_games); $counter++)   {
                $sequence = game($seed);
                
                if ($counter == 0)    {
                    $lotto_games[$counter] = $sequence;
                }   else    {
                    $verifier = false;
                    $another_counter = 0;
                    while (($another_counter < $counter) && (! $verifier))    {
                        if ($sequence == $lotto_games[$another_counter])  {
                            $verifier = true;
                        }
                        $another_counter++;
                    }
                    if ($verifier)  {
                        $counter--;
                    }   else    {
                        $lotto_games[$counter] = $sequence;
                    }
                }
            }
            return $lotto_games;
        }

        echo("<h1>Gerador de jogos para a Mega Sena</h1>");
        echo("<p>Os jogos gerados estão listador abaixo:</p><br>");

        $generated_lotto_games = lotto_games(37);

        for ($counter = 0; $counter < 6; $counter++)    {
            echo("<p>");
            for ($another_counter = 0; $another_counter < 6; $another_counter++)    {
                echo($generated_lotto_games[$counter][$another_counter] . " ");
            }
            echo("</p>");
        }
    ?>
</html>