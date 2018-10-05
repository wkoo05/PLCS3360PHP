<?php
/*
GIVEN INPUT = pid=5bb799753e0dc&move=1

DESIRED OUTPUT =  {"response":true,"ack_move":{"slot":0,"isWin":false,"isDraw":false,"row":[]},"move":{"slot":4,"isWin":false,"isDraw":false,"row":[]}}

*/
require ("board.php");

if (!isset($pid) || !isset($move)) {
    $response = false;
}

$jfoo = json_decode($_COOKIE['userGame'], false);

$pid = $_GET['pid'];
$moveInput = $_GET['move'];
$response = True;

if (!isset($_COOKIE['gamePlay'])) {
    $ack_move = array();
    $move = array();
    $gamePlay = array("response"=> $response, $ack_move, $move);
    $boardLog = $board;
    setcookie("gamePlay", $gamePlay, time() + (86400 * 30), "/");
    setcookie("boardLog", $boardLog, time() + (86400 * 30), "/");
}

$slot_h = $board[0][0] = 1;
$slot_c = $board[0][1] = 2;


print_r($board);


