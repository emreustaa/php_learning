<?php

    function test()
    {
        return "test";
    }

    $a= test();
    //echo $a;

    function topla($sayi1,$sayi2){

        return $sayi1 + $sayi2;
    }

    $toplam = topla(5,12);
    //echo $toplam;

    $ad = 'Emre';

    function adsoyad($soyad)
    {   
        // $GLOBALS['ad']
        global $ad;
        return $ad. ' ' .$soyad;
    }

    //echo adsoyad('usta');

    $yazi  = "emre usta emre usta";
    //echo substr($yazi,0,6). '...';
    
    function kisalt($str,$limit = 10){

        $karakterSayisi  = strlen($str);
        if($karakterSayisi>$limit){
            $str = substr($str,0,$limit) . '..';
        }

        return $str;
    }

    echo kisalt($yazi,5);



?>