<?php
require_once 'Auth.php';

// Inisialisasi variabel $error untuk menghindari error "Undefined variable"
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #FFAFBD, #ffc3a0);
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            width: 100%;
            text-align: center;
        }

        .container h2 {
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
            border-color: #FFAFBD;
            box-shadow: 0 0 8px rgba(255, 175, 189, 0.5);
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
            background-color: #FFAFBD;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #ff7c83;
        }

        .form-group a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #FFAFBD;
            text-decoration: none;
        }

        .form-group a:hover {
            color: #ff7c83;
        }

        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
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
                <button type="submit">Login</button>
            </div>
        </form>
        <a href="register.php">Don't have an account? Register</a>
    </div>
</body>
</html>
