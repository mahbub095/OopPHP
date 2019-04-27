<?php

class  Dad
{

    public $var = "Call Me Daddy";

    function my_method()
    {
        echo $this->var;
    }
}
    class Son extends Dad{

        public $var = "Call Me I am Mahbub";
        function my_method()
        {
            echo $this->var;
        }
}
$parent =new Dad;
$parent ->my_method();

$child=new Son;
$child->my_method();




?>