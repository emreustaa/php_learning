<?php

$test= function(){

    return 'test';
};

// echo $test();

function test($par){
    return 'test' .$par;
};
// echo test('emre');

$arr = [
    function(){
        return '1. fonksiyon';
    },
    function(){
        return '2. fonksiyon';
    },
    function(){
        return '3. fonksiyon';
    }
];

//echo $arr[rand(0,2)]();

$soyad = 'Usta';
function filtrele($isim){

    global $soyad;
    return $isim .$soyad;
}
$arr = ['Emre','Şenay','Şaban','Arda','Tuğfe'];

/*
$arr = array_map(function($isim){
    return $isim .' USTA';
},$arr);
print_r($arr);*/

$arr = array_map(function($isim) use($soyad){
    return $isim .' '.$soyad;
},$arr);
print_r($arr);
?>