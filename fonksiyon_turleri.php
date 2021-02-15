<?php

    /*
        func_num_args() // kaç tane argüman gelmiş o bulunabilir
        func_get_args() // parametrelerin liste olarak geri döndürülmesini sağlar.
        func_get_arg() // index numarasını vererek o parametrenin değerine ulaşılmasını sağlar.
    */

    function test($par1,$par2)
    {
        echo func_num_args() . '<br>';
        print_r(func_get_args()). '<br>';
        echo func_get_arg(2);
    }

    test('emre','usta','pl');
?>