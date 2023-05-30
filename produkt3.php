<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="Website Icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka">
    <meta name="keywords" content="produkt,projekt,sklad,explore">
    <meta name="description" content="Stránka jednoho z produktů pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Produkt3</title>
</head>
<body>
    <header>
        <img src="" alt="logo">
        <h1>Sklad</h1>
        <?php
            $date = date('d-m-Y');
            echo "<p class='date'>Dnešní datum: $date</p>"
        ?>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="produkt1.php">produkt1</a>
        <a href="produkt2.php">produkt2</a>
        <a href="produkt3.php">produkt3</a>
        <a href="produkt4.php">produkt4</a>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
            <div class="container">
            <article>
                <p>popis</p>
            </article>
            <article>
                <p>popis</p>
            </article>
            </div>
        </section>
        <section class="forms">
            <!-- select + print (2 prvky formuláře) -->
            <form>

            </form>
            <!-- tabulka s výpisem -->
            <!-- TODO -->
        </section>
    </main>
    <footer>
        <?php
            echo "<p class='cpr'>©Ernst Christoph Leschka</p>";
            echo "<p class='date2'>Dnešní datum: $date</p>";
        ?>
    </footer>
</body>