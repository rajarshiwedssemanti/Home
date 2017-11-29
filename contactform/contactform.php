<?php
function mailMe(){
    //$data = $_GET;
    $msg = $_GET['name']."\n".$_GET['email']."\n".$_GET['message'];
    //mail("rajarshimitra71@gmail.com",$_GET['subject'],$msg);
    mail("rajarshimitra71@gmail.com",$_GET['subject'],$msg,$headers);
    echo 'OK';
}

mailMe();
?>