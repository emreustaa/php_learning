<?php

$arr=[
    'ad'=>'emre',
    'soyad'=>'usta',
    'yas'=>24,
];

//print_r($arr);
//var_dump($arr);

$test='emre,usta,udemy';
$arr = explode(',',$test);
//print_r($arr);

$string = implode('|',$arr);
//echo $string;

//echo count($arr);

/*
if(is_array($string)){
    echo 'bu bir dizidir';
}else{
    echo 'bu bir dizi değildir';
}*/

$arr = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr);
//print_r($arr);

$keys =['ad','soyad'];
$values = ['emre','usta'];

$arr = array_combine($keys,$values);
//print_r($arr);

$arr = ['emre','emre','udemy','usta','udemy'];
$arr2 = array_count_values($arr);

//print_r($arr2);

$arr=[
    'ad'=>'emre',
    'soyad'=>'usta',
    'yas'=>24,
];

$arr2 = array_flip($arr);
//print_r($arr2);

$arr = [
    'ad'=>'emre',
    'a' =>[
        'b'=>[
            'c'=>[
                'd'=>'e'
            ]
        ]
    ]
];

/*
if(array_key_exists('ad',$arr)){
    echo 'ad anahtarı var';
}else{
    echo 'ad anahtarı yok';
}
*/

function _array_key_exists($cur_key,$arr){

    foreach($arr as $key=>$val){
        
        if($key == $cur_key){
            return true;
        }
        if(is_array($val)){
            return _array_key_exists($cur_key,$val);
        }
       
        
        
    }
    return false;
}

if(_array_key_exists('d',$arr)){
    echo 'ad anahtarı var';
}else{
    echo 'ad anahtarı yok';
}

?>