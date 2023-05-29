<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka">
    <meta name="keywords" content="home,projekt,sklad,uvod">
    <meta name="description" content="Úvodní stránka pro webovou aplikaci neexistujícího skladu.">
    <title>Home</title>
</head>
<body>
    <header>
        <img>
        <h1>Sklad</h1>
        <?php
            $date = date('d-m-Y');
            echo "<p class='date'>Dnešní datum: $date</p>"
        ?>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="produkt1.php">produkt1</a>
        <a href="produkt2.php">produkt2</a>
        <a href="produkt3.php">produkt3</a>
        <a href="produkt4.php">produkt4</a>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main></main>
    <footer>
        <?php
            echo "<h6 class='cpr'>©Ernst Christoph Leschka</h6>";
            echo "<p class='date'>Dnešní datum: $date</p>";
        ?>
    </footer>
</body>
</html>