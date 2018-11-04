<?php

// Koneksi Database
try {
    $pdo = new PDO("mysql:host=localhost;dbname=blogsaya", "root", "1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die($e);
}

$artikel = [];

// Kueri
try {
    $stmt = $pdo->query("SELECT * FROM artikel");
    $rows = $stmt->fetchAll();
    // var_dump($rows);
}
catch(PDOException $e) {
    die($e);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halo semua!</h1>
    <main>
        <?php foreach($rows as $row): ?>
        <div>
            <h2><?php echo $row['judul'] ?></h2>
            <p class="red"><?php echo $row['artikel'] ?></p>
        </div>
        <?php endforeach; ?>
    </main>
    <footer class="red">
        <p>Copyright &copy; 2018.</p>
    </footer>
</body>
</html>