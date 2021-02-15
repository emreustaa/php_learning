<?php


function filtrele($val){
    return $val*2;
}
$arr = [1,2,3,4,5,6,7,8,9,10];
$arr2 =  array_map('filtrele',$arr);

//print_r($arr2);
$arr = ['','emre','','usta'];
//print_r($arr);
$arr = array_filter($arr); //değerleri boş olan elemanları kaldırıyor.
//print_r($arr);

$arr = [1,2,3,4,5];
$arr2 = array_filter($arr,function($item){
    return $item>2&& $item<5;
});
//$arr2 = array_map();
//print_r($arr2);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr = array_merge($arr1,$arr2);
//print_r($arr);

$arr = [
    'ad '=> 'emre',
    'soyad'=> 'usta',
    'yas' => 24,
    'site'=> 'inovatif.com'
];
$random = array_rand($arr,2);
$values = array_map(function($key) use ($arr){
    return $arr[$key];
},$random);

//print_r($values);

$arr = [1,2,3,4,5];
//print_r($arr);
$arr = array_reverse($arr);
//print_r($arr);

$arr = [
    'ad'=>'emre',
    'soyad'=>'usta',
    'a'=>[
        'b'=>[
            'c' => 'd'
        ]
    ]
];
$test = array_search('d',$arr);

function _array_search($cur_val,$arr){
    foreach($arr as $key=>$val){

        if($val == $cur_val){
            return true;
        }
        if(is_array($val)){
            return _array_search($cur_val,$val);
        }
    }
    return false;
}

$test = _array_search('d',$arr);
//echo $test;

$arr = [1,2,3,4];
if(in_array('3',$arr)){
    echo '3 degeri var';
}else{
    echo '3 degeri yok';
}
?>