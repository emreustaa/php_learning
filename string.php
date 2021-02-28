<?php 


$str = 'emre usta';
//$str2 = 'EMRE USTA';
//echo strlen($str);
//echo strstr('emre usta','u'); // bir ifade içerisinde değer aranmasını sağlayan fonksiyon.
//echo strpos('emre usta','u');  aranılan karakterin hangi karakter pozisyonundan sonra geldiğini gösterir. Output -> 5

//echo ucwords($str); // her kelimenin baş harfinin büyütülmesini sağlar.
//echo ucfirst($str); // cümlenin ilk harfinin büyütülmesini sağlar.
//echo strtolower($str2) .'<br>';  // büyük yazılan karakterleri küçüğe çevirir
//echo strtoupper($str); // küçük yazılan karakterleri büyüğe çevirir


//$str2 = "       \t\t\temreusta     \t     \t";
//echo trim($str2);
//echo rtrim($str2);
//echo ltrim($str2);
//echo substr($str,3,7);

$str3 = 'emre usta arda usta';

//echo str_replace('usta','u',$str3);
/*echo str_replace(
    ["emre",'arda','usta'],
    ['e','a','u'],
    $str3
);*/

for($i=1;$i<=10;$i++){
    $repeat_count = ($i<=5?$i : (10-$i));
    echo str_repeat('-*',$repeat_count) . '<br>';
}

?>