<!-- 從edit_admin複製而來 -->
<?php
$row = $Mem->find($_GET['id']);
// $pr = unserialize($row['pr']);
?>
<!-- 從add_admin.php複製 -->
<h2 class="ct">編輯會會員資料</h2>
<!-- table.all>tr*3>td.tt.ct+td.pp>input:text -->
<form action="./api/save_user.php" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><?= $row['acc'] ?></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><?= $row['pw'] ?></td>
        </tr>
         <!--         <tr>
            <td class="tt ct">累積交易額</td>
            <td class="pp"><?php //echo $Order->sum(['acc' => $row['acc']]); 
                            ?></td>
                            </tr> -->
        <tr>
            <td class="tt ct">姓名</td>
            <td class="pp">
                <input type="text" name="name" value="<?= $row['name'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp">
                <input type="text" name="email" value="<?= $row['email'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">地址</td>
            <td class="pp">
                <input type="text" name="addr" value="<?= $row['addr'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">電話</td>
            <td class="pp">
                <input type="text" name="tel" value="<?= $row['tel'] ?>">
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" value="編輯"></input>
        <input type="reset" value="重置"></input>
        <input type="button" value="取消" onclick="location.href='?do=mem'">
    </div>
</form>