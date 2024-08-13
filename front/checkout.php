<h2 class="ct">填寫資料</h2>
<?php
$mem = $Mem->find(['acc' => $_SESSION['Mem']]);
?>
<table class="all">
    <tr>
        <td class="tt ct">登入帳號</td>
        <td class="pp"><?= $_SESSION['Mem'] ?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">連絡電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
</table>
<table class="all ct">
    <tr class="tt">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <tr class="pp">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<div class="tt ct all">總價:</div>