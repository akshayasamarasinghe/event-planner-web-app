<?php
session_start();
require_once '../config/database.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
    } else {
        echo "Invalid credentials!";
    }
}
?>

<section class="auth-section">
    <h2>Login to Your Account</h2>
    <form action="../public/login.php" method="POST" class="auth-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn-primary">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Sign Up Here</a></p>
</section>


<?php include '../includes/footer.php'; ?>

