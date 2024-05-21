<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <h1 class="animated-header">Contact</h1>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container animated-container">
        <section>
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau komentar, jangan ragu untuk menghubungi kami melalui form di bawah ini. Kami akan segera merespons pesan Anda.</p>
            <form action="submit_form.php" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>
    </main>

</body>
</html>
