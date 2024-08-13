<?php
$directory = './'; // 设置你的文件夹路径
$files = array_diff(scandir($directory), array('..', '.')); // 排除 . 和 ..
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download IPTV Files</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #007bff;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        p {
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px 0;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
        .file-list {
            list-style-type: none;
            padding: 0;
        }
        .file-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Download IPTV Files</h1>
        <p>Click the links below to download the IPTV files:</p>
        <ul class="file-list">
            <?php foreach ($files as $file): ?>
                <?php if (is_file($directory . $file)): ?>
                    <li><a href="<?php echo htmlspecialchars($file); ?>" download>Download <?php echo htmlspecialchars($file); ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
