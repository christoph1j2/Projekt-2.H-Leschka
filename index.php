<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka">
    <meta name="keywords" content="home,projekt,sklad,uvod">
    <meta name="description" content="Úvodní stránka pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="produkt1.php">produkt1</a></li>
        <li><a href="produkt2.php">produkt2</a></li>
        <li><a href="produkt3.php">produkt3</a></li>
        <li><a href="produkt4.php">produkt4</a></li>
        </ul>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
            <div class="container">
                <article>
                    <h2>Co</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
                </article>
                <article>
                    <h2>Jak</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
                </article>
                <article>
                    <h2>Proč</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
                </article>
            </div>
        <hr>
        </section>
        <!-- PRODUKT1 -->
        <section>
            <div class="container">
            <article>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
            </article>
            </div>
        </section>
        <!-- PRODUKT3 -->
        <section>
            <div class="container">
            <article>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sapien. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Sed convallis magna eu sem. Integer pellentesque quam vel velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean id metus id velit ullamcorper pulvinar. Phasellus et lorem id felis nonummy placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam faucibus mi quis velit. Etiam neque.</p>
            </article>
            </div>
        </section>
        <!-- FORMS UVOD -->
        <section class="forms">
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