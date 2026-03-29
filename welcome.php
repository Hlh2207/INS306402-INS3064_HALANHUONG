<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INS3064 Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0; padding: 20px; min-height: 100vh;
            display: flex; justify-content: center; align-items: center;
        }
        .container {
            background: white; padding: 40px; border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); text-align: center;
        }
        .info { background: #f0f0f0; padding: 20px; border-radius: 5px; margin-top: 20px; }
        .label { font-weight: bold; color: #667eea; }
        p { text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to INS3064</h1>
        
    <div class="info">
    <?php
        // 1. THIẾT LẬP MÚI GIỜ VIỆT NAM (Thêm dòng này vào đầu)
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        // 2. Khai báo biến
        $name = "Hà Lan Hương"; 
        $studentId = "22070572"; 
        $class = "INS306402";
        $email = "22070572@vnu.edu.vn";

        // 3. Hiển thị thông tin
        echo "<p><span class='label'>Name:</span> $name</p>";
        echo "<p><span class='label'>Student ID:</span> $studentId</p>";
        echo "<p><span class='label'>Class:</span> $class</p>";
        echo "<p><span class='label'>Email:</span> $email</p>";

        // 4. Hiển thị ngày giờ (Lúc này sẽ khớp với đồng hồ máy tính của bạn)
        echo "<p><span class='label'>Date:</span> " . date("l, F d, Y") . "</p>";
        echo "<p><span class='label'>Time:</span> " . date("H:i:s") . "</p>";
    ?>
    </div>
    </div>
</body>
</html>