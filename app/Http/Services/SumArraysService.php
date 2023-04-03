<?php

namespace App\Http\Services;

class SumArraysService
{
    public function getSum (Array $arr1, Array $arr2): int
    {
        return $this->sumArray($arr1) + $this->sumArray($arr2);
    }

    public function sumArray(Array $arr) :int
    {
        $result = 0;

        foreach ($arr as $value) {
            $result += $value;
        }

        return $result;
    }
}
