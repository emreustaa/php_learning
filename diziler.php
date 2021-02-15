<?php
/*
$kimlik = array(
    'ad' =>"EMRE",
    'soyad' => "USTA",
    'unvan' => "GELİŞTİRİCİ",
    'yas' =>24);
    echo $kimlik['ad'];
    print_r($kimlik);*/

    /* iç içe dizilier */

    $kategoriler=[
        'siteler'=> [
            'e-ticaret'=>[
                'sahibinden',
                'n11',
                'hepsiburada'

            ],
            'egitim'=>[
                'udemy',
                'prototurk'
            ]
        ]
    ];
    
    //echo $kategoriler['siteler']['e-ticaret'][2];
    //print_r($kategoriler);

    define('UYE',[
        'ad' => 'Emre',
        'soyad' => 'Usta',
        'meslek' => 'Android Developer',
        'yas'=> 24,
        'sporlar'=>[
                'jet kune do',
                'bisiklet sürmek',
        ],

    ]);
    echo UYE['sporlar'][1];
?>