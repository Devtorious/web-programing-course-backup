<?php
// require 'function.php'

function extract_email($str){
    $email_pattern = '/[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*\.[a-zA-Z0-9]{2,4}/'; /*teach's pattern*/
    $matches = [];
    if (preg_match($email_pattern, $str, $matches)){
        return $matches[0];
    }
    return false;  
}
?>