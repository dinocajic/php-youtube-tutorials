<?php

try
{
    echo 10 / 0;
}
catch( DivisionByZeroError $error )
{
    echo "Dear idiot user. You cannot divide by zero";
}
catch( TypeError $error )
{
    echo "Dear idiot user. You must use a number";
}
catch( Error $error )
{
    echo "Dear idiot user. I have no idea how you got here but I caught it";
}
finally {
    echo "Dear idiot user. This code always executes.";
}