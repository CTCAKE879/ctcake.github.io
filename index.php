<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>名字查询</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: skyblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            text-align: center;
        }

        .result-content {
            margin-top: 30px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .result-content a {
            text-decoration: none;
            color: lightgreen;
        }

        .result-content p {
            margin-bottom: 10px;
        }
		
		h2{
			color: red;
		}
    </style>
</head>
<body>
    <div class="container">
        <h1>名字查询</h1><h2> 仅供查询自己信息是否泄露，切勿用于非法用途！！<br>仅供查询自己信息是否泄露，切勿用于非法用途！！<br>仅供查询自己信息是否泄露，切勿用于非法用途！！<br></h2>
        <form method="GET" action="">
            <input type="text" name="input_text" placeholder="请输入名字">
            <button type="submit" name="submit">查询</button>
        </form>

        <?php
        if (isset($_GET['submit'])) {
            // 获取输入框内容
            $input_text = $_GET['input_text'];

            // 构建完整链接
            $url = "https://skey.live/infoSearch.php?id=3&search=" . $input_text;

            // 加载链接页面
            $content = file_get_contents($url);
            echo '<div class="result">';
            echo '<div class="result-content">' . $content . '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
