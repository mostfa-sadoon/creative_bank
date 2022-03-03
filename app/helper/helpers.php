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