<?php
include "base.php";

$table = $_GET['table'];
unset($_GET['table']);

if ($$table->count($_GET)) {
    echo 1;
    // $table會是Admin或Mem
    $_SESSION[$table] = $_GET['acc'];
} else {
    echo 0;
}
// echo $$table->count($_GET);
// echo $chk = $Mem->count($_GET);
// $chk是0或>0，所以不需要再寫判斷式即可判斷帳號是否已存在
