<?php
function func_sec(){
    exec("python3 /home/pi/python_code/slack_sec.py");
    return;
}

if($_POST['text'] == "security"):
    func_sec();
endif;
?>
