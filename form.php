<!DOCTYPE html>
 <html lang="ja">
     <!--社員情報入力フォームを作成しよう-->
 <!--https://terakoya.sejuku.net/practices/01H1TSTTJ25FP19VBNSPW1W49F/body-->
 <head>
     <meta charset="UTF-8">
     <title>社員情報入力フォーム</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <!--formタグでフォームを作成し、その中に各入力項目を定義する-->
    <!--formタグには、action属性・method属性を指定する-->
    <!--action属性・method属性は、フォームの入力内容をサーバー側へ渡すために必要です。
    それぞれ以下のように指定してください。-->
    <!--action属性：送信先のPHPファイルを指定-->
    <!--method属性：「post」を指定-->
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <!--各入力項目には、name属性を設定する（PHPでの値の取得時に必要）-->
                    <input type="text" name="employee_name" value="<?php echo isset($_COOKIE['employee_name']) ? $_COOKIE['employee_name'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age" value="<?php echo isset($_COOKIE['employee_age']) ? $_COOKIE['employee_age'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                        <!--選択式の入力項目には、value属性で各選択肢を指定する-->
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>
