<!-- 從backend/admin.php複製 -->
<div class="ct">
    <button onclick="location.href='?do=add_admin'">會員管理</button>
</div>

<!-- table.all>(tr.tt.ct>td*3)+(tr.pp.ct>td*3) -->
<table class="all">
    <tr class="tt ct">
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $row) {
    ?>
        <tr class="tt ct">
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>修改</button>
                <button>刪除</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>