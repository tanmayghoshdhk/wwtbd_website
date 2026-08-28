<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTML CSS Test Page</title>
    
    <!-- CSS Internal Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 16px;
        }

        .status-box {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #c8e6c9;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- HTML Body Content -->
    <div class="card">
        <h1>Website Deployment Test</h1>
        <p>এটি একটি টেস্ট পেজ যা HTML, CSS এবং PHP দিয়ে তৈরি।</p>

        <!-- PHP Dynamic Code -->
        <div class="status-box">
            <?php
                echo "PHP is working fine! <br>";
                echo "Server Date & Time: " . date("Y-m-d H:i:s");
            ?>
        </div>
    </div>

</body>
</html>
