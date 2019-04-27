<?php

// Define a class
class MyClass
{
    function __construct()
    {
        echo 'destructor check' . '<br>';

        $this->name = "Mahbub";

    }

    function __destruct()
    {
        echo "Strongest Man " . $this->name . "<br>";
    }
}

$obj = new MyClass();
?>