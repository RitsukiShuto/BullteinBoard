<?php
$db = new SQLite3("hoge.db")
      or die(mb_convert_encoding("データベースファイルが開けません．", "UTF8"));

echo mb_convert_encoding("データベースファイルが開けました．", "UTF8");

$db -> close();
?>
