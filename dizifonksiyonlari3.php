<?php

$arr =['emre','usta'];
array_push($arr,'udemy','deger1','deger2');
$arr['anahtar']='yeni deger';

//print_r($arr);
$arr =['emre','usta'];
array_unshift($arr,'udemy');
//print_r($arr);
$arr2=[
    'site'=>'udemy'
    ];
$arr = array_merge($arr2,$arr);
//print_r($arr);
$arr=[
    'ad'=>'emre',
    'soyad'=>'usta',
    'a'=>[
        'b'=>'c',
        'd'=>[
            'e'=>'f'
        ]
    ]
];
$keys = array_keys($arr);
//print_r($keys);

function _array_keys($arr)
{   
    static $keys=[];
    foreach($arr as $key=>$val){
        array_push($keys,$key);
        if(is_array($val)){
            return _array_keys($val);
        }
    }
    return $keys;
}

$keys = _array_keys($arr);
//print_r($keys);

$arr =['emre','usta','arda','tugfe','udemy','php'];

/*
echo current($arr) . '<br>';
echo next($arr) . '<br>';
echo next($arr) . '<br>';
echo prev($arr) . '<br>';
echo next($arr) . '<br>';
reset($arr);
echo next($arr) . '<br>';
//echo end($arr);
*/

$arr=[
    'ad'=>'emre',
    'soyad'=>'usta',
];
extract($arr); // dizideki anahtarların değişken gibi kullanılmasını sağlar.
//echo $ad;

$arr =[3,1,6,4];

//print_r($arr);
//asort($arr); -> değere göre küçükten büyüğe sıralama
//arsort($arr); -> değere göre büyükten küçüğe sıralama
//print_r($arr);

$arr = [
    'c' => 'deger 3',
    'a' => 'deger 1',
    'b' => 'deger 2',
];
//ksort($arr); //anahtara göre küçükten büyüğe sıralama
krsort($arr); //anahtara göre büyükten küçüğe sıralama
print_r($arr); 
?>