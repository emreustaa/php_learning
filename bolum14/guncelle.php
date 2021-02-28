<?php
ob_start();
$sorgu = $db->prepare('UPDATE dersler SET
baslik=?,
icerik=?,
onay=?
WHERE id = ?');

$guncelle = $sorgu->execute([
    'yeni baslik', 'yeni icerik', 1, 3
]);

if ($guncelle) {
    echo 'Güncelleme işlemi başarılı';
} else {
    echo 'Güncelleme işlemi başarısız';
}
?>
