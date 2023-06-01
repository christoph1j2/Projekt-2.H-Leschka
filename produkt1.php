<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="Website Icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka, Matěj Horešovský, Adam Kolerus">
    <meta name="keywords" content="produkt,projekt,sklad,explore">
    <meta name="description" content="Stránka jednoho z produktů pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Boty</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="logo" id="logo">
        <h1>Sklad™</h1>
        <?php
            $date = date('d-m-Y');
            echo "<p class='date date-right'>Dnešní datum: $date</p>"
        ?>
    </header>
    <nav>
        <ul>
        <li><a href="index.php"><img src="home.png" alt="home"></a></li>
        <li><a href="produkt1.php"><img src="sneakers.png" alt="sneakers"></a></li>
        <li><a href="produkt2.php"><img src="smartphone-call.png" alt="smartphone"></a></li>
        <li><a href="produkt3.php"><img src="sweatshirt.png" alt="sweatshirt"></a></li>
        <li><a href="produkt4.php"><img src="headphones.png" alt="headphones"></a></li>
        </ul>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
            <h2 id="product_header">Boty</h2>
            <div class="container product">
            <article>
                <p>Boty jsou základním a nezbytným prvkem ve světě módy. V Skladu™ chápeme, jak důležité je mít širokou a kvalitní nabídku bot, která osloví různé vkusy a preference zákazníků. Naše skladové prostory vám umožňují prezentovat boty v jejich plné kráse a zajistit, aby každý detail byl viditelný a dostupný pro prohlížení. Bez ohledu na to, zda nabízíte tenisky, kozačky, sandály nebo elegantní obuv, Sklad™ vám poskytuje prostředí, ve kterém můžete maximálně vyniknout a přitáhnout zákazníky.</p>
            </article>
            <article>
                <p>V Skladu™ víme, že boty jsou mnohem víc než jen obuv. Jsou to módní doplňky, které vyjadřují osobnost a styl. Proto dáváme velký důraz na to, aby vaše boty byly prezentovány tak, aby zákazníci měli přesnou představu o jejich designu, materiálech a detailu. Díky našim skladovým prostorům budou boty pečlivě uspořádány a vystaveny tak, aby zákazníci mohli prozkoumat každý pár a ocenit jeho jedinečnost. Bez ohledu na to, zda jsou vaše boty sportovní, elegantní nebo odvážné, v Skladu™ najdete ideální místo pro jejich prezentaci a zaujetí zákazníků.</p>
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
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sklad";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

?>