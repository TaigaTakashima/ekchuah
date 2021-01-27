<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー削除確認 | サイト管理システム</title>
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
            <section>
                <form action="menu_delete_completed.php">
                    <li><?php echo $_SESSION['menu_name'];?></li>
                    <li><?php echo $_SESSION['menu_price'];?></li>
                    <li><?php echo $_SESSION['category'];?></li>
                    <li><?php echo $_SESSION['endDate'];?></li>
                    <input type="Submit" value="戻る" name="back">
                    <input type="Submit" value="削除">
                </form>
            </section>
        </main>
    </div>
</body>
</html>