<!DOCTYPE html>
<html>
<head>
    <title>Login - Gestion des Films</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Se connecter</button>
        </form>
        <p>Pas encore de compte? <a href="register.php">S'inscrire ici</a></p>
    </div>
</body>
</html>

<?php
include 'config.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header('location: movies.php');
    } else {
        echo "Invalid credentials";
    }
}
?>