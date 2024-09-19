<?php
session_start();
require_once 'db.php';

// Function to register a new user
function register($username, $password) {
    global $pdo;
    $hashed_password = md5($password);  // Hashing the password with MD5
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    
    try {
        $stmt->execute([$username, $hashed_password]);
        return true;
    } catch (PDOException $e) {
        return false;
    }
}

// Function to login
function login($username, $password) {
    global $pdo;
    $hashed_password = md5($password);  // Hashing the password with MD5
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $hashed_password]);
    
    $user = $stmt->fetch();
    
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
    } else {
        return false;
    }
}

// Function to check if the user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Function to log out the user
function logout() {
    session_destroy();
    header('Location: login.php');
    exit;
}
