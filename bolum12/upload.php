<?php

    //mime_content_type
    //echo mime_content_type('upload.php');
?>

<form action="sonuc2.php" method="post" enctype="multipart/form-data">

    Dosya Seçin: <br>
    <input style="margin-top: 15px;" type="file" name="dosya[]" multiple > <br>
    <button style="margin-top: 15px;" type="submit">Yükle</button>

</form>
