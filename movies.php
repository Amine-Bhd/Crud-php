<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.php');
}
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Films</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Bienvenue <?php echo $_SESSION['username']; ?></h2>
            <a href="logout.php" class="logout-btn">Déconnexion</a>
        </div>

        <div class="form-section">
            <h3>Ajouter un nouveau film</h3>
            <form method="POST" action="">
                <input type="text" name="title" placeholder="Titre du film" required>
                <input type="text" name="director" placeholder="Réalisateur" required>
                <input type="number" name="release_year" placeholder="Année de sortie" required>
                <input type="text" name="genre" placeholder="Genre" required>
                <button type="submit" name="add_movie">Ajouter</button>
            </form>
        </div>

        <div class="movies-list">
            <h3>Films disponibles</h3>
            <table>
                <tr>
                    <th>Titre</th>
                    <th>Réalisateur</th>
                    <th>Année</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
                <?php
                $query = "SELECT * FROM movies";
                $result = mysqli_query($conn, $query);
                
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['director'] . "</td>";
                    echo "<td>" . $row['release_year'] . "</td>";
                    echo "<td>" . $row['genre'] . "</td>";
                    echo "<td>
                            <a href='edit_movie.php?id=".$row['id']."'>Modifier</a>
                            <a href='?delete=".$row['id']."'>Supprimer</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['add_movie'])) {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $release_year = $_POST['release_year'];
    $genre = $_POST['genre'];
    
    $query = "INSERT INTO movies (title, director, release_year, genre, status) 
              VALUES ('$title', '$director', '$release_year', '$genre', 'available')";
    mysqli_query($conn, $query);
    header('location: movies.php');
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM movies WHERE id=$id";
    mysqli_query($conn, $query);
    header('location: movies.php');
}
?>