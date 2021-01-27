<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報編集完了 | サイト管理システム</title>
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
            <h2>メニュー編集完了</h2>
            <section>
                <ul>
                    <li><?php echo $menu_name;?></li>
                    <li><?php echo $menu_price;?></li>
                    <li><?php echo $category;?></li>
                    <li><?php echo $endDate;?></li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>