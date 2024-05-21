<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <h1 class="animated-header">Gallery</h1>
        <nav>
            <ul class="nav-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container animated-container">
        <div class="gallery">
            <?php
            // Array of images (assuming images are stored in an 'images' directory)
            $images = [
                'images/sharen1.jpg',
                'images/sharen2.jpeg',
                // Add more image paths as needed
            ];

            // Loop through the images and display them
            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $image . '" alt="Gallery Image">';
                echo '</div>';
            }
            ?>
        </div>
    </main>
</body>
</html>
