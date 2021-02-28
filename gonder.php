<?php
// $_POST
//print_r($_POST);
//echo $_POST['ad'];
//strip_tags()
//htmlspeacialchars()
//trim

/*
if(trim($_POST['hakkimda']) == ''){
echo 'lütfen hakkınızda bir şeyler yazın';
}else{
print_r($_POST);
}
 */
//strip_tags -> textaredan gelen html etiketi tehlikesini ortadan kaldırır. Filtreleme yapar
//echo strip_tags($_POST['hakkimda']);
//$hakkimda = htmlspecialchars($_POST['hakkimda']);
//echo htmlspecialchars_decode($hakkimda);


echo post('hakkimda');

?>
