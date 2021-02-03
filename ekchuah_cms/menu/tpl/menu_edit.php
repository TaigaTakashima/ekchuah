<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報編集 | サイト管理システム</title>
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
        <h2>メニュー編集</h2>
        <section id="form">
            <form action="menu_edit_completed.php" method="POST" enctype="multipart/form-data">
            <?php foreach($menu_list as $item): ?>
            <table>
                <tr>
                    <th>商品名</th>
                    <td><input type="text" name="menu_name" value="<?php echo $item['menu_name'];?>"></td>
                </tr>
                <tr>
                    <th>価格</th>
                    <td><input type="text" name="menu_price" value="<?php echo $item['price'];?>"></td>
                </tr>
                <tr>
                    <th>カテゴリー</th>
                    <td>
                        <select name="category">
                            <?php if($item["category_id"] == 0):?>
                            <option value="0" disabled selected>未選択</option>
                            <?php endif;?>
                            <?php foreach($category_list as $category):?>
                                <?php if($item["category_id"] == $category['category_id']):?>
                                    <option value="<?php echo $category["category_id"]?>" selected><?php echo $category["category_name"]?></option>
                                <?php else:?>
                                    <option value="<?php echo $category["category_id"]?>"><?php echo $category["category_name"]?></option>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>終了日</th>
                    <td><input type="date" name="endDate" value="<?php echo $item['end_date'];?>"></td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td><input type="file" name="upload_file"></td>
                </tr>
                <tr class="table-btn">
                    <td><input type="Submit" value="登録"></td>
                    <td><a href="menu_list.php"><button class="btn-gray" type="button">戻る</button></a></td>
                </tr>
            </table>
            <input type="hidden" name="menu_id" value="<?php echo $item['menu_id'];?>">
            <?php endforeach; ?>  
            </form>
        </section>
    </main>
</body>
</html>