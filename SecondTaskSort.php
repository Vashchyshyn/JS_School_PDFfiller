<?php

class SecondTaskSort
{

    public function init()
    {
        // Второе задание. Используя двоичный поиск
        return $this->arraySearch([11, 48, 54, 22]);
    }

    // Второе задание
    public function arraySearch($arr)
    {
        $array = [11, 22, 48, 54];
        $arrayDiff = $arr;
        $count = 0;
        foreach ($arrayDiff as $value) {
            if ($this->search($array, $value) === 0 || $this->search($array, $value) > 0) {
                $count++;
            }
        }
        return $count === count($array) ? true : false;
    }

    // Второе задание V2
    public function search(array $array, $value)
    {
        $count = count($array);
        $start = 0;
        $end = $count - 1;
        while (true) {
            $length = $end - $start;
            if ($length > 2) {
                if ($length % 2 != 0) $length++;
                $mid = (int)($length / 2 + $start);
            } elseif ($length >= 0) {
                $mid = $start;
            } else {
                return false;
            }
            if ($array[$mid] == $value) {
                while (($mid != 0) && ($array[$mid - 1] == $value))
                    $mid--;
                return $mid;
            } elseif ($array[$mid] > $value) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }

        return false;
    }
}
