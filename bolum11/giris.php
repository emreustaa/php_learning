<?php

if (isset($_POST['submit'])) {

    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    if (!$kullanici_adi && !$sifre) {
        $hata = 'Lütfen kullanıcı adı ya da şifrenizi giriniz';
    } else if ($kullanici_adi != $uye['kullanici_adi']) {
        $hata = 'Kullanıcı adınız hatalı.';
    } else if ($sifre != $uye['sifre']) {
        $hata = 'Şifreniz hatalı.';
    } else {

        $_SESSION['zaman'] = time() + 20;
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        //$_SESSION['sifre'] = $uye['sifre'];

        //header() -> yönlendirme işlemi için kullanılan fonksiyon
        header('Location:/bolum11');

    }
}

?>
<?php if (isset($hata)): ?>
   <div style="border: 1px solid red">
        <?php echo $hata ?>
   </div>
	<?php endif;?>
<form action="" method="post">

Kullanıcı adı: <br>
<input type="text" name="kullanici_adi">
<hr>
Şifre: <br>
<input type="password" name="sifre"> <br>
<input type="hidden" name="submit" value="1">
<button type="submit" style="margin-top: 15px;">Giriş Yap</button>


</form>
