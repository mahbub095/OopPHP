<?php


class Myclass{
    // Add property statements here
    // Add the methods here
    public $fontsize="18px";
    public $fontname="Mahbub";
    public $fontcolor="red";

    public function allprint()
    {
        echo "<p style=font-size:".$this->fontsize.";color:".$this->fontcolor.";>".$this->fontname."</p>";
    }

}
$myclass= new Myclass;
//$myclass->fontname = "Object Oriented Programming";
//var_dump($myclass);
echo $myclass->allprint();
 ?>