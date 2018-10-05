<?php
 class GameInfo {
    public $width;
    public $height;
    public $strategies;
    function __construct($width, $height, $strategies) {
       $this->width= $width;
       $this->height= $height;
       $this->strategies= $strategies;
     }
 }

$info = new GameInfo(7,6, array("Random", "Smart"));
echo(json_encode($info));