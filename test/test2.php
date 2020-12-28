<?php

$db = new SQLite3("db02.db")
      or die(mb_convert_encoding("db.02が開けませんでした．", "UTF8"));

$r = $db -> query("SELECT * FROM 品種 WHERE 毛足 = '長毛'")
     or die(mb_convert_encoding("クエリーエラー", "UTF8"));

while($array = $r -> fetchArray()){
    $str = "|".$array[0]."|".$array[1]."|\r\n";
    echo mb_convert_encoding($str, "UTF8", "UTF-8, AUTO");
}

$db -> close();

?>
