<?php
$str = "chung toi la sinh vien truong dai hoc mo dai chat";
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == 'h') {
        $count++;
    }
}
    echo "Chuoi tren co " . $count. " chu 'h'";
?>