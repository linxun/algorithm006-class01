<?php

$fab = new Fab();
echo $fab->fib(1); // 1
echo "\n";
echo $fab->fib(3); // 2
echo "\n";
echo $fab->fib(5); // 5
echo "\n";
echo $fab->fib(30); // 5
echo "\n";

class Fab {
    public function fib($N)
    {
        if ($N <= 1) {
            return $N;
        }

        return $this->fib($N-1) + $this->fib($N-2);
    }
}