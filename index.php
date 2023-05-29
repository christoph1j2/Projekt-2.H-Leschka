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
    <main>
        <section>
            <div class="container">
                <article>
                    <h2>Co</h2>
                    <p>popis</p>
                </article>
                <article>
                    <h2>Jak</h2>
                    <p>popis</p>
                </article>
                <article>
                    <h2>Proč</h2>
                    <p>popis</p>
                </article>
            </div>
        </section>
        <!-- PRODUKT1 -->
        <section>
            <div class="container">
            <article>
                <p>popis</p>
            </article>
            <article>
                <img src="" alt="produkt1">
            </article>
            </div>
        </section>
        <!-- PRODUKT2 -->
        <section>
            <div class="container">
            <article>
                <img src="" alt="produkt2">
            </article>
            <article>
                <p>popis</p>
            </article>
            </div>
        </section>
        <!-- PRODUKT3 -->
        <section>
            <div class="container">
            <article>
                <p>popis</p>
            </article>
            <article>
                <img src="" alt="produkt3">
            </article>
            </div>
        </section>
        <!-- PRODUKT4 -->
        <section>
            <div class="container">
            <article>
                <img src="" alt="produkt4">
            </article>
            <article>
                <p>popis</p>
            </article>
            </div>
        </section>
        <!-- FORMS UVOD -->
        <section>
            <!-- hodnocení -->
            <form>

            </form>
            <!-- anketa -->
            <form>

            </form>
        </section>
    </main>
    <footer>
        <?php
            echo "<p class='cpr'>©Ernst Christoph Leschka</p>";
            echo "<p class='date'>Dnešní datum: $date</p>";
        ?>
    </footer>
</body>
</html>