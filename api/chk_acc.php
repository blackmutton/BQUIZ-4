<?php
include "base.php";

echo $chk = $Mem->count($_POST);
// $chk是0或>0，所以不需要再寫判斷式即可判斷帳號是否已存在
