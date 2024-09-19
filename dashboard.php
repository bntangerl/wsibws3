<?php
require_once 'Auth.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .container h1 {
            font-size: 26px;
            color: #333;
            margin-bottom: 25px;
        }

        .container p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .container button {
            padding: 12px 25px;
            background-color: #dc3545;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .container button:hover {
            background-color: #c82333;
        }

        .container a {
            display: block;
            margin-top: 20px;
            color: #0072ff;
            text-decoration: none;
        }

        .container a:hover {
            color: #0056b3;
        }

        .icon {
            font-size: 50px;
            color: #0072ff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">👋</div>
        <h1>Welcome, <?= $_SESSION['username']; ?>!</h1>
        <p>You're now logged in to the Dashboard.</p>
        <form action="index.php" method="POST">
            <button type="submit">Log Out</button>
        </form>
    </div>
</body>
</html>
