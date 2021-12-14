<?php

class Day5 {

    public $input;

    public function __construct()
    {
        $this->input = explode("\n",file_get_contents('inputs/day5.txt'));
    }

    public function solve()
    {
        $i     = 0;
        $steps = 0;
        $data  = $this->input;

        while(isset($data[$i])) {
            $data[$i] += 1;
            $i += ($data[$i]-1);
            $steps++;
        }
        return $steps;
    }

    public function solve2()
    {
        $i     = 0;
        $steps = 0;
        $data  = $this->input;

        while(isset($data[$i])) {
            if($data[$i] >= 3) {
                $data[$i] -= 1;
                $i += ($data[$i]+1);
            } else {
                $data[$i] += 1;
                $i += ($data[$i]-1);
            }
            $steps++;
        }
        return $steps;
    }

    public function test($input)
    {
        $this->input = explode("\n", $input);
        return $this->solve();
    }
}



$day = new Day5;

echo '1. ' . $day->solve()   . PHP_EOL;
echo '2. ' . $day->solve2()  . PHP_EOL;
