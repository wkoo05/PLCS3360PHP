<?php
/**
 * Created by PhpStorm.
 * User: wkoo0
 * Date: 10/5/2018
 * Time: 10:04 AM
 */

Class Game {

    public $user_stg,
            $pid,
            $response;

    function __construct($stt){
        $this->pid = uniqid();
        $this->response = true;
        $this->user_stg = $stt;
    }

    function getResponse(){
        return $this->response;
    }

    function getPid(){
        return $this->pid;
    }
}

$stt = $_GET['strategy'];

if (!isset($stt)) {
      $stt = "Random";
}

setcookie("userGame", $jfoo, time() + (86400 * 30), "/");
$gm = new Game($stt);
$foo = array("response" => $gm->getResponse(), "pid" => $gm->getPid());
$jfoo = json_encode($foo);
echo $jfoo;
