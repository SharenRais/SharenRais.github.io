<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT title, content, date FROM blog_posts ORDER BY date DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <h1 class="animated-header">Blogs</h1>
        <nav>
            <ul class="nav-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container animated-container">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<section>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</section>";
            }
        } else {
            echo "<p>No blog posts available.</p>";
        }
        $conn->close();
        ?>
    </main>
</body>
</html>
