<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報登録完了 | サイト管理システム</title>
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
            <h2>登録しました</h2>
            <section>
                <ul>
                    <li><?php echo $_SESSION['menu_name'];?></li>
                    <li><?php echo $_SESSION['menu_price'];?></li>
                    <li><?php echo $_SESSION['category'];?></li>
                    <li><?php echo $_SESSION['endDate'];?></li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>