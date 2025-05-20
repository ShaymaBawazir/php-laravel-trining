<?php
// Check if name is provided via URL parameter or form submission (GET)
$name = isset($_GET['name']) ? trim($_GET['name']) : '';
$name = htmlspecialchars($name);

if (!empty($name)) {
    $greeting = "Hello, $name! Welcome to our website!";
} else {
    $message = "Please enter your name below.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Greeting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }

        .greeting {
            color: #2c3e50;
            background-color: pink;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .prompt {
            color: #e74c3c;
            text-align: center;
            margin: 20px 0;
        }

        form {
            background: palevioletred;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 70%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <?php if (!empty($name)): ?>
        <div class="greeting"><?php echo $greeting; ?></div>
    <?php else: ?>
        <?php if (!empty($message)): ?>
            <div class="prompt"><?php echo $message; ?></div>
        <?php endif; ?>
    <?php endif; ?>

    <form action="greeting.php" method="GET">
        <center>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="submit" value="Get Greeting">
        </center>
    </form>
</body>

</html>