<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報追加 | サイト管理システム</title>
</head>
<body>
    <header>
        <?php include '../header.html';?>
    </header>
    <div id="wrapper">
        <aside>
            <?php include '../nav.html';?>
        </aside>
    <main>
        <h2>メニュー追加</h2>
        <section id="form">
            <form action="menu_confirmation.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>商品名</th>
                    <td><input type="text" name="menu_name" value="<?php echo $menu_name;?>"></td>
                </tr>
                <tr>
                    <th>価格</th>
                    <td><input type="text" name="menu_price" value="<?php echo $menu_price;?>"></td>
                </tr>
                <tr>
                    <th>カテゴリー</th>
                    <td>
                        <select name="category">
                            <?php foreach($category_list as $item): ?>
                                <?php if($item["category_id"] == $category):?>
                                    <option value="<?php echo $item["category_id"]?>" selected><?php echo $item["category_name"];?></option>
                                <?php else:?>
                                    <option value="<?php echo $item["category_id"]?>"><?php echo $item["category_name"];?></option>
                            <?php endif;?>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>終了日</th>
                    <td><input type="date" name="endDate" value="<?php echo $endDate;?>"></td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td><input type="file" name="upload_file"></td>
                </tr>
                <tr class="table-btn">
                    <td><input type="Submit" value="登録"></td>
                    <td><a href="../menu.php"><button class="btn-gray" type="button">戻る</button></a></td>
                </tr>
            </table>
            <input type="hidden" name="category_name" value="<?php echo $category["category_name"]?>">
            </form>
        </section>
    </main>
</body>
</html>