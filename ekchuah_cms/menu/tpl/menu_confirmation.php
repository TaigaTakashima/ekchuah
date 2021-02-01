<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報確認 | サイト管理システム</title>
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
            <section id="confirmation">
                <h2>こちらで登録してよろしいですか？</h2>
                <form action="menu_completed.php">
                    <table>
                        <tr>
                            <th>商品名</th>
                            <td><?php echo $_SESSION['menu_name'];?></td>
                        </tr>
                        <tr>
                            <th>価格</th>
                            <td><?php echo $_SESSION['menu_price'];?></td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td><?php echo $_SESSION['category_name'];?></td>
                        </tr>
                        <tr>
                            <th>終了日</th>
                            <td><?php echo $_SESSION['endDate'];?></td>
                        </tr>
                        <tr>
                            <td><input type="Submit" value="登録"></td>
                            <td><a href="menu_input.php"><button class="btn-gray" type="button">戻る</button></a></td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
    </div>
</body>
</html>