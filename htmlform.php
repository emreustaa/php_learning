<?php

function form_filtrele($post)
{
    return is_array($post) ?  array_map('form_filtrele',$post): htmlspecialchars(trim($post));
}
$_POST = array_map('form_filtrele', $_POST);
//$_GET = array_map('form_filtrele', $_GET);
//print_r($_POST);

function post($name){
    if(isset($_POST[$name])){
        return $_POST[$name];
    }
}

if(post('submit')){
    print_r($_POST);
}
?>

<form action="" method="post" enctype="multipart/form-data">

    <!-- enctype="multipart/form-data" -> file olan bir input kullanılacaksa mutlaka belirtilmelidir... -->
    <!--

    input
    textarea
    file
    select
    radio
    checkbox
    multiple select
    button

 -->

    Ad: <br>
    <input type="text" readonly value="emre usta" name="ad">
    <hr>
    Hakkımda: <br>
    <textarea name="hakkimda" required id="" cols="50" placeholder="hakkında bir şeyler yaz" rows="5"><?php echo post('hakkimda')?></textarea>
    <hr>
    Meslek:<br>
    <select name="meslek">
        <option> -- seç -- </option>
        <option <?php echo post('meslek') == 'android-developer' ? 'selected' : null ?>value="android-developer"> Android Developer</option>
        <option <?php echo post('meslek') == 'ios-developer' ? 'selected' : null ?> value="ios-developer"> iOS Developer</option>
        <option <?php echo post('meslek') == 'web-developer' ? 'selected' : null ?> value="web-developer"> Web Developer</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" name="cinsiyet" value="erkek">
        erkek
    </label>
    <label>
        <input type="radio" name="cinsiyet" value="kadın">
        kadın
    </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" <?php echo post('ilgi-alani') && in_array('php',post('ilgi-alani')) ? ' checked' : null ?> name="ilgi-alani[]" value="php">PHP
    </label>
    <label>
        <input type="checkbox" <?php echo post('ilgi-alani') && in_array('html',post('ilgi-alani')) ? ' checked' : null ?> name="ilgi-alani[]" value="html">HTML
    </label>
    <label>
        <input type="checkbox" <?php echo post('ilgi-alani') && in_array('css',post('ilgi-alani')) ? ' checked' : null ?>  name="ilgi-alani[]" value="css">CSS
    </label>
    <hr>
    <!-- birden fazla seçeneği gönderilmek için [ ] dizi olarak gönderilmiş olması gerekmektedir.-->
    Fotoğraf: <br>
    <input type="file" name="fotograf" id="">
    Meslek:<br>
    <select name="meslek2[]" multiple size="5">
        <option> -- seç -- </option>
        <option value="android-developer"> Android Developer</option>
        <option value="ios-developer"> iOS Developer</option>
        <option value="web-developer"> Web Developer</option>
    </select>
    <hr>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>
    <input type="submit" value="Gönder">

    <!--<label for="input">buraya tıkla</label>
    <input type="text" id="input">-->
</form>