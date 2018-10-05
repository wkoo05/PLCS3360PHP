<?php
/*
GIVEN INPUT = pid=5bb799753e0dc&move=1

DESIRED OUTPUT =  {"response":true,"ack_move":{"slot":0,"isWin":false,"isDraw":false,"row":[]},"move":{"slot":4,"isWin":false,"isDraw":false,"row":[]}}

*/

$jfoo = json_decode($_COOKIE['userGame'], false);
$userPid = $jfoo->pid;

$pid = $_GET['pid'];
$move = $_GET['move'];
$response = false;

$isDraw


if (!isset($pid) || !isset($move)) {
    $response = false;
}

