<?php

class AbsoluteNumberCalculator
{

    public function findAbsolute($number)
    {
//        throw new RuntimeException('Error');
        if ($number < 0) {
            return -$number;
        }
        return $number;
    }

}