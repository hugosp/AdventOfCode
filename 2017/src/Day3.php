<?php

class Day3 {

    public $input = 312051;

    public function solve()
    {
        $corner = 0;
        $count = 1;

        while($corner <= $this->input) {
            $corner = $count*8 + $corner;
            $count++;
        }

        $diff = $corner - $this->input;

        $x = $diff - $count + 1;
        return $x + $count;
    }

    public function solve2()
    {
        // https://oeis.org/A141481/b141481.txt =D
    }

    public function test($input)
    {
        $this->input = $input;
        return $this->solve();

    }
}



$day = new Day3;

echo '1. ' . $day->solve()  . PHP_EOL;
echo '2. ' . $day->solve2()  . PHP_EOL;
