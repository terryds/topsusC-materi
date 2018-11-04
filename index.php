<?php

$judul = "Hello World";
$topik1 = "Medan Elektromagnetika";
$artikel1 = "Medan elektromagnetika adalah mata kuliah yang menyenangkan";

$topik2 = "Matematika Rekayasa I";
$artikel2 = "Isinya kalkulus dan teman-temannya.";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halo semua!</h1>
    <main>
        <section>
            <h2><?php echo $topik1; ?></h2>
            <p class="red"><?php echo $artikel1; ?></p>
        </section>
        <section>
            <img src="https://loremflickr.com/320/240" />
            <h2 class="red"><?php echo $topik2; ?></h2>
            <p><?php echo $artikel2; ?></p>
            <ul>
                <li class="red">Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </section>
    </main>
    <footer class="red">
        <p>Copyright &copy; 2018.</p>
    </footer>
</body>
</html>