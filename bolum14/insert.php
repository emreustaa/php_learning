
<?php

//$db ->query('INSERT INTO dersler SET baslik ="baslik", icerik = "icerik", onay = 1');

/*
$sorgu = $db->prepare('INSERT INTO dersler SET

baslik=?,
icerik=?,
onay=?');

$ekle = $sorgu->execute([
    'deneme baslik', 'icerik', 1,
]);

if($ekle){
    echo 'Veriler eklendi';
}else{
    $hata = $sorgu->errorInfo();
    echo 'MySQL Hatası' .$hata[2];
}*/

// form gönderilip gönderilmeme kontrolü
if (isset($_POST['submit'])) {

    $baslik = isset($_POST['baslik']) ? $_POST['baslik'] : null;
    $icerik = isset($_POST['icerik']) ? $_POST['icerik'] : null;
    $onay = isset($_POST['onay']) ? $_POST['onay'] : 0;

    if (!$baslik) {
        echo 'Baslik ekleyin';
    } elseif (!$icerik) {
        echo 'İçerik ekleyin';
    } else {
        //ekleme işlemi
        $sorgu = $db->prepare('INSERT INTO dersler SET
            baslik=?,
            icerik=?,
            onay=?');

        $ekle = $sorgu->execute([
            $baslik, $icerik, $onay
        ]);

        if ($ekle) {
            header('Location:/bolum14/index.php');
        } else {
            $hata = $sorgu->errorInfo();
            echo 'MySQL hatası' . $hata[2];
        }
    }
}
?>

<form action="" method="post">

    Başlık <br>
    <input type="text" value="<?php echo isset($_POST['baslik']) ? $_POST['baslik'] : '' ?>" name="baslik"> <br> <br>

    İçerik: <br>
    <textarea name="icerik" value="<?php echo isset($_POST['icerik']) ? $_POST['icerik'] : '' ?>" cols="30" rows="10"></textarea> <br> <br>

    Onay: <br>
    <select name="onay">

        <option value="1">Onaylı</option>
        <option value="0">Onaylı Değil</option>
    </select> <br> <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>
</form>