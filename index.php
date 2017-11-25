<?php
function func_sec(){
    exec("python3 /home/pi/python_code/slack_sec.py");
    return;
}

function func_set_msg($msg){
    $filename = '/home/pi/work/msg.txt';
    file_put_contents($filename, $msg);
    return;
}

function func_send_msg(){
    exec("python3 /home/pi/python_code/slack_msg.py");
    $filename = '/home/pi/work/msg.txt';
    file_put_contents($filename, '');

    return;
}

if($_POST['text'] == "set_msg"):
    func_set_msg($_POST['msg']);
endif;

if($_POST['text'] == "send_msg"):
    func_send_msg();
endif;

if($_POST['text'] == "security"):
    func_sec();
endif;
?>

