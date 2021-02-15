<?php

function test(){
    return 'test';
}

if(function_exists('test')){
    echo 'test fonksiyonu var';
}else{
    echo 'test fonksiyonu yok';
}

?>