<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class OverloadingTest
{
    private bool $userHasAccess = false;

    public function __construct($userHasAccess)
    {
        $this->userHasAccess = $userHasAccess;
    }

    public function __call($function_name, $args)
    {
        if ( $this->userHasAccess && method_exists($this, $function_name) ) {
            $this->$function_name($args[0]);
        } else {
            $callback = $args[0];

            if (is_callable($callback)) {
                $callback_argument = $args[1];
                $callback($callback_argument);
            }
        }
    }

    private function cantAccess(string $name)
    {
        echo "Hello " . $name . ". ";
    }

    private function cantAccessTwo(int $age)
    {
        echo "You are " . $age . " years old. ";
    }
}

$test = new OverloadingTest(true);
$test->cantAccess("Dino Cajic");
$test->cantAccessTwo(25);

$test->randomCallbackFunction( function($email) {
    echo "Your email is " . $email;
}, "dino@example.com" );