<?php

class Day4 {

    public $input;

    public function __construct()
    {
        $this->input = explode("\n",file_get_contents('inputs/day4.txt'));
    }

    public function solve()
    {
        $count = 0;
        foreach ($this->input as $row) {
            $values = preg_split('/\s+/', $row);
            if(count($values) == count(array_unique($values))) {
                $count++;
            }
        }
        return $count;
    }

    public function solve2()
    {
        $count = 0;
        foreach ($this->input as $row) {
            $values = preg_split('/\s+/', $row);
            if(count($values) == count(array_unique($values))) {
                $good = true;
                foreach ($values as $key => $val) {
                    foreach ($values as $k => $v) {
                        if(count_chars($val, 1) == count_chars($v, 1) && $key != $k){
                            $good = false;
                            break 2;
                        }
                    }
                }
                if($good) {
                    $count++;
                }
            }
        }
        return $count;
    }

    public function test($input)
    {
        $this->input = $input;
        return $this->solve();

    }
}



$day = new Day4;

echo '1. ' . $day->solve()  . PHP_EOL;
echo '2. ' . $day->solve2()  . PHP_EOL;
