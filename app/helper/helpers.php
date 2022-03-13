<?php

function msgdata( $status, $key, $data)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    $msg['data'] = $data;
    return  $msg;
}

function msg($status, $key)
{
    $msg['status'] = $status;
    $msg['msg'] = $key;
    return $msg;
}
 //$var ==>> the variable which you store the global var
 //$col ==>> the name of the global variable which is stored in config/global.php
 
function SetGlobalVar($var , $col) {
    $var = config('global.'. $col);
}
