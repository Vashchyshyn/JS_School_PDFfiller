<?php

class FirstTaskTable
{
    public function init($count)
    {
        $this->spiralTransformation($count);
    }

    // Первое задание
    public function spiralTransformation($tableSize)
    {
        $width = (int)$tableSize;
        $height = (int)$tableSize;
        $counter1 = 1;
        $counter2 = 1;
        $counter3 = 1;
        $array = [];
        for ($y = 0; $y < $height; $y++) {
            $array[0][$y] = $counter1;
            $counter1++;
        }
        for ($x = 1; $x < $width; $x++) {
            $array[$x][$height - 1] = $counter1;
            $counter1++;
        }
        for ($y = $height - 2; $y >= 0; $y--) {
            $array[$height - 1][$y] = $counter1;
            $counter1++;
        }
        for ($x = $width - 2; $x > 0; $x--) {
            $array[$x][0] = $counter1;
            $counter1++;
        }

        while ($counter1 < $width * $height) {
            while ($array[$counter2][$counter3 + 1] == 0) {
                $array[$counter2][$counter3] = $counter1;
                $counter1++;
                $counter3++;
            }
            while ($array[$counter2 + 1][$counter3] == 0) {
                $array[$counter2][$counter3] = $counter1;
                $counter1++;
                $counter2++;
            }
            while ($array[$counter2][$counter3 - 1] == 0) {
                $array[$counter2][$counter3] = $counter1;
                $counter1++;
                $counter3--;
            }
            while ($array[$counter2 - 1][$counter3] == 0) {
                $array[$counter2][$counter3] = $counter1;
                $counter1++;
                $counter2--;
            }
        }

        echo "<table cellspacing='0' cellpadding='5' border='1'>";
        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                if ($array[$x][$y] == 0) {
                    $array[$x][$y] = $counter1;
                }
            }
            echo "<tr>";
            for ($y = 0; $y < $height; $y++) {
                echo "<td>" . $array[$x][$y] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
