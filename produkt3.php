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
        <img src="logo.png" alt="logo" id="logo">
        <h1>Sklad™</h1>
        <?php
            $date = date('d-m-Y');
            echo "<p class='date date-right'>Dnešní datum: $date</p>"
        ?>
    </header>
    <nav>
        <ul>
        <li><a href="index.php"><img src="home.png"></a></li>
        <li><a href="produkt1.php"><img src="sneakers.png"></a></li>
        <li><a href="produkt2.php"><img src="smartphone-call.png"></a></li>
        <li><a href="produkt3.php"><img src="sweatshirt.png"></a></li>
        <li><a href="produkt4.php"><img src="headphones.png"></a></li>
        </ul>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
            <div class="container">
            <article>
                <p>Mikiny jsou oblíbeným a praktickým oděvem pro různé příležitosti. V Skladu™ chápeme, že kvalitní prezentace mikin je klíčová pro přitahování zákazníků a přesvědčování je o jejich stylu, pohodlí a kvalitě. Naše skladové prostory jsou navrženy tak, aby vytvářely prostředí, které nejen vizuálně přitažlivě prezentuje mikiny, ale také umožňuje zákazníkům si je vyzkoušet a posoudit jejich materiál, střih a pohodlí. S pomocí Skladu™ můžete vystavit různé styly mikin, barevné kombinace a kolekce, aby zákazníci měli široký výběr a mohli si vybrat ty, které nejlépe vyhovují jejich vkusu a potřebám.</p>
            </article>
            <article>
                <p>V Skladu™ chceme, aby vaše mikiny zaujaly a oslovily zákazníky na první pohled. Proto jsme vytvořili prostor, který vám umožňuje vytvořit stylové a přehledné prezentace mikin, aby zákazníci měli snadný přístup k různým značkám, vzorům, materiálům a velikostem. Skladové prostory jsou pečlivě organizované a nabízejí optimální osvětlení a prostor pro každou mikinu, abyste mohli ukázat všechny její detaily. Díky tomu zákazníci mohou snadno najít a vybrat si svou oblíbenou mikinu z vašeho širokého sortimentu. Využijte potenciál našeho skladu a přesvědčte zákazníky.</p>
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