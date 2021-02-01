<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>ニュース情報確認 | サイト管理システム</title>
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
                <form action="news_completed.php">
                    <table>
                        <tr>
                            <th>タイトル</th>
                            <td><?php echo $_SESSION['title'];?></td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td><?php echo $_SESSION['content'];?></td>
                        </tr>
                        <tr>
                            <td><input type="Submit" value="登録"></td>
                            <td><a href="news_input.php?back=null"><button class="btn-gray" type="button">戻る</button></a></td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
    </div>
</body>
</html>