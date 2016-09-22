<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */

include('webserver.php');

function start_web_server(){
    $web_server = new WebServer();
    $web_server->start_service(); 
}