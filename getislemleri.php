<?php

// arama kısmında -> get kullanılır
// üye kaydı gibi işlemlerde post kullanılır.
// uye-duzenle.php?id=5
//key = value & key = value
//kelime = emre&id=5

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}
$_GET = array_map('form_filtrele', $_GET);
$_REQUEST = array_map('form_filtrele', $_REQUEST);

function get($name)
{
    if (isset($_GET[$name])) {
        return $_GET[$name];
    }
}

function request($name)
{
    if (isset($_REQUEST[$name])) {
        return $_REQUEST[$name];
    }
}
/*
$id = (int) get('id');
if (!is_int($id) || !$id) {
    echo 'id sadece integer değer alabilir!';
    exit;
}
*/
//echo get('deneme');
echo request('kelime');

print_r($_REQUEST);
?>

<form action="getislemleri.php?id=5" method="post">

    Arama: <input type="text" name="kelime" value="<?php echo get('kelime') ?>">
    <hr>
</form>