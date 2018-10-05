<?php
class ack_move {
    var $isWin;
    var $isDraw;
    var $slot;
    var $succeed;

    function __construct($isWin, $isDraw, $slot, $succeed) {
        $this -> isDraw = false;
        $this -> isWin = false;
        $this -> slot = 0;
        $this -> succeed = array();
    }
}