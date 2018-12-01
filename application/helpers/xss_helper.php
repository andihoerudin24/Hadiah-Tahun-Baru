<?php
function Cetak($str){
    echo htmlentities($str,ENT_QUOTES,'UTF-8');
    
}

function token(){
    $ci = &get_instance();
    $token= md5(uniqid(rand(),TRUE));
    $ci->session->set_userdata('token',$token);
    return $token;
}

?>