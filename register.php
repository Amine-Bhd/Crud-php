<!DOCTYPE html>
<html>
<head>
    <title>Register - Gestion des Films</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>S'inscrire</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="register">S'inscrire</button>
        </form>
        <p>Déjà un compte? <a href="login.php">Se connecter ici</a></p>
    </div>
</body>
</html>

<?php
include 'config.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if(mysqli_query($conn, $query)) {
        header('location: login.php');
    } else {
        echo "Registration failed";
    }
}
?>