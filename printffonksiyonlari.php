<?php

$yer = 'Afrikada';
$sayi = 5;
$tur  = 'maymun';
//echo $yer . ' ' . $sayi .' tane ' . $tur .' var.';
//echo '<br>';

$yer2 = 'Africa';
$sayi2 = 5;
$tur2 = 'monkeys';

//echo 'There are '. $sayi .' '.$tur.' in '.$yer.'.';

//printf('%s %d tane %s var',$yer,$sayi,$tur);
//echo '<br>';
//printf('There are %1$d %s in %s',$sayi2,$tur2,$yer2);
$tarih = '2018-7-6';
echo vsprintf('%d-%02d-%02d',explode('-',$tarih));
echo '<br>';
printf('Pi %.2f tür.',3.14);
?>