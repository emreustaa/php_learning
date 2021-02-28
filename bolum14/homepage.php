<?php require 'header.php' ?>
<h3>Ders Listesi</h3>
<?php

//query
//fetch / fetchAll()
//prepare-execute

$dersler = $db->query('SELECT * FROM dersler')->fetchAll(PDO::FETCH_ASSOC);
//$dersler = $db-> query('SELECT * FROM dersler WHERE id=3')->fetch(PDO::FETCH_ASSOC);

/*
$sorgu = $db->prepare("SELECT * FROM dersler WHERE id=?");
$sorgu->execute([
    3
]);
$dersler = $sorgu->fetchAll(PDO::FETCH_ASSOC);*/


?>

<ul>

    <?php

    foreach ($dersler as $ders) : ?>

        <li>
            <?php echo $ders['baslik'] ?>
            <?php if ($ders['onay'] == 1) : ?>
                <a href="index.php?sayfa=oku&id=<?php echo $ders['id'] ?>">[OKU]</a>
            <?php endif; ?>
            <a href="">[DÜZENLE]</a>
            <a href="">[SİL]</a>
        </li>
    <?php endforeach; ?>
</ul>