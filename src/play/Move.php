<?php

abstract class MoveStrategy {
    var $board;

    function __construct(Board $board = null) {
        $this->board = $board;
    }

    private function checkPid($pid){
        return (!isset($pid)) ? False : True;
    }

    abstract function pickSlot();


    function user_ipt_slot($x){
        if ($x > 7) {
            return;
        }

    }
        function toJason() {
        return array(‘name’ => get_class($this));
    }

    static function fromJson($obj) {
        $strategy = new self();
        return $strategy;
    }
}
