<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initialization our api
include_once('../core/initialize.php');
//instantiate 
$post = new Post($db);

//blog post query

$result = $post->read();
//get the row count
$num = $result->rowCount();

if($num > 0)
{
    //video 4 6:10

}







?>