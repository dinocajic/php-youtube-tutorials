<?php

function fibonacci($num)
{
    if ($num <= 2) {
        return 1;
    }

    return fibonacci($num - 1) + fibonacci($num - 2);
}

var_dump(fibonacci(0));
var_dump(fibonacci(1));
var_dump(fibonacci(2));
var_dump(fibonacci(3));
var_dump(fibonacci(4));
var_dump(fibonacci(5));