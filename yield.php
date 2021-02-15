<?php

    // memory_get_usage ()
    // number format ()

    function byteToMB($byte)
    {
        return number_format(($byte /1048576),2);
    }
    
    $sayilar = range (0,1000000);
    echo byteToMB(memory_get_usage()). ' Mb bellek kullanıldı <br>';


    
    function say($baslangic,$limit)
    {

        for($i= $baslangic;$i<=$limit;$i++){   
            yield $i; // büyük işlemlerde belleğin gereksiz biçimde işgal olmaması için yield kullanılır.
        }
     
    }
    $sayilar = say(0,1000000);
    
    echo byteToMB(memory_get_usage()). ' Mb bellek kullanıldı';


?>