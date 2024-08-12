<style>
    .item {
        display: flex;
        border: 2px solid white;
    }

    .item .img {
        width: 40%;
        padding: 20px;
        border: 1px solid white;
    }

    .item .info {
        width: 60%;
    }

    .item .info div {
        padding: 5px;
        min-height: 25px;
        border-top: 2px solid white;
    }

    .item div .img {
        /* height: 179px; */
        width: 100%;
    }

    .item div:nth-child(1) img {
        width: 100%;
        height: 160px;
    }
</style>
<?php
$type = $_GET['type'] ?? 0;
$nav = '全部商品';
if ($type == 0) {
    $rows = $Goods->all(['sh' => 1]);
} else {
    $tmp = $Type->find($type);
    if ($tmp['big_id'] == 0) {
        // 大分類
        $rows = $Goods->all(['sh' => 1, 'big' => $type]);
        $nav = $tmp['name'];
    } else {
        // 中分類
        $rows = $Goods->all(['sh' => 1, 'mid' => $type]);
        $nav = $big['name'] . '>' . $tmp['name'];
    }
}

//dd($rows);
?>
<h2><?= $nav ?></h2>
<?php
foreach ($rows as $row) {
?>
    <!-- .item>.img+.info>div*4 -->
    <div class="item">
        <div class="img pp">
            <a href='?do=intro&id=<?= $row['id']; ?>'>
                <img src="./images/<?= $row['img']; ?>" alt="">
            </a>
        </div>
        <div class="info">
            <div class="tt ct"><?= $row['name'] ?></div>
            <div class="pp">
                價錢:<?= $row['price'] ?>
                <img src="./icon/0402.jpg" style="float:right">
            </div>
            <div class="pp">規格:<?= $row['spec'] ?></div>
            <div class="pp">簡介:<?= mb_substr($row['intro'], 0, 30) ?>...</div>
        </div>
    </div>
<?php
}
?>