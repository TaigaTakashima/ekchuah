<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>ニュース削除確認 | サイト管理システム</title>
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
                <form action="news_delete_completed.php">
                    <li><?php echo $_SESSION['title'];?></li>
                    <li><?php echo $_SESSION['content'];?></li>
                    <input type="Submit" value="戻る" name="back">
                    <input type="Submit" value="<?php echo $display;?>">
                </form>
            </section>
        </main>
    </div>
</body>
</html>