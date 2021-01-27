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
            <dl>
                <dt>
                    商品名
                </dt>
                <dd>
                    <input type="text" name="menu_name" value="<?php echo $item['menu_name'];?>">
                </dd>
                <dt>
                    値段
                </dt>
                <dd>
                    <input type="text" name="menu_price" value="<?php echo $item['price'];?>">
                </dd>
                <dt>
                    カテゴリー
                </dt>
                <dd>
                    <select name="category">
                        <?php foreach($category_list as $category):?>
                            <?php if($item["category_id"] == $category['category_id']):?>
                                <option value="<?php echo $category["category_id"]?>" selected><?php echo $category["category_name"]?></option>
                            <?php else:?>
                                <option value="<?php echo $category["category_id"]?>"><?php echo $category["category_name"]?></option>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </select>
                </dd>
                <dt>
                    終了日
                </dt>
                <dd>
                    <input type="date" name="endDate" value="<?php echo $item['end_date'];?>">
                </dd>
                <dt>
                    画像
                </dt>
                <dd>
                    <input type="file" name="upload_file">
                </dd>
            </dl>
            <input type="hidden" name="menu_id" value="<?php echo $item['menu_id'];?>">
            <input type="Submit" value="登録">
            <?php endforeach; ?>  
            </form>
        </section>
    </main>
</body>
</html>