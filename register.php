<?php
require_once 'Auth.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (register($username, $password)) {
        $success = "Registration successful! You can now log in.";
    } else {
        $error = "Username already exists.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #6B73FF, #000DFF);
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            width: 100%;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            padding-left: 40px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6B73FF;
            box-shadow: 0 0 8px rgba(107, 115, 255, 0.5);
        }

        .form-group input::placeholder {
            color: #999;
        }

        .form-group .icon {
            position: absolute;
            left: 15px;
            top: 12px;
            color: #999;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #6B73FF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #000DFF;
        }

        .form-group a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #6B73FF;
            text-decoration: none;
        }

        .form-group a:hover {
            color: #000DFF;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?= $success ?></div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <span class="icon">👤</span>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <span class="icon">🔒</span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <a href="login.php">Already have an account? Login</a>
    </div>
</body>
</html>
