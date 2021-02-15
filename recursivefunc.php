<?php

    function say($sayi){

        echo $sayi;
        if($sayi<10){
            say($sayi+1);
        }

    }
    //say(1);

    $kategoriler=[
        [    
            'id'=>1,
            'parent' =>0,
            'ad'=>'Dersler'
        ],

        [    
            'id'=>2,
            'parent' =>0,
            'ad'=>'Güncel'
        ],
        [    
            'id'=>3,
            'parent' =>0,
            'ad'=>'Blog'
        ],

        [    
            'id'=>4,
            'parent' =>1,
            'ad'=>'Php Dersleri'
        ],
        [    
            'id'=>5,
            'parent' =>1,
            'ad'=>'Css Dersleri'
        ],

        [    
            'id'=>6,
            'parent' =>4,
            'ad'=>'Fonksiyonlar'
        ],
        [    
            'id'=>7,
            'parent' =>4,
            'ad'=>'Değişken kullanımı'
        ],

        [    
            'id'=>8,
            'parent' =>6,
            'ad'=>'Recursive Fonksiyonlar'
        ],
    ];

    function kategoriListele($kategoriler, $parent= 0){
        
        $html = '';
        $html.= '<ul>';
    
            foreach($kategoriler as $kategori){
                if($kategori['parent'] == $parent){
                    $html.='<li>' .$kategori['ad'];
                    $html.= kategoriListele($kategoriler,$kategori['id']);
                    $html.= '</li>';
                    
                }
                
            }
            $html.='</ul>';
            return $html;
    
    }

   //echo kategoriListele($kategoriler);

   $arr =[
       'ad'=>'emre',
       'soyad'=> 'usta',
       'sporlar'=>[
           'yuzme'=>'evet',
           'kosma'=>'evet',
           'savunma_sporlari'=>[
               'jeetkundo'=>'evet',
               'judo'=>'hayir'
           ]
        ]
    ];

    function dizideBul($dizi,$anahtar){
        foreach ($dizi as $key=>$val)
        {
            if($key==$anahtar){
                
                return $val;
            }
            if(is_array($val)){
                $sonuc  = dizideBul($val,$anahtar);
                if($sonuc){
                    return $sonuc;
                }
            }
            
        }
        return false;
    }

    print_r( dizideBul($arr,'savunma_sporlari'));
?>