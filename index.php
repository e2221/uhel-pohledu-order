<?php
session_start();
include_once __DIR__ . '/php/Order.php';

$order = new Order();
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Objednávka | Úhel pohledu</title>
</head>

<body>
<?php
if (!$order->makeOrder()) {
    ?>
    <div class="container">
        <div class="centered">
            <p>Objednávky do <b>zahraničí</b>, v počtu <b>více než X ks</b>, nebo s <b>osobním převzetím v Mladé
                    Boleslavi</b>
                vyřizujeme <b>s individuálním přístupem</b>. Kontaktujte nás prosím na
                <a href="mailto:objednavky@uhel-pohledu.cz">objednavky@uhel-pohledu.cz</a>.</p>
            <div class="form">
                <form method="post">
                    <div class="transport">
                        <div class="transport__left">
                            <label for="radio">
                                <input type="radio" name="order-transport" id="radio" class="radio__first" value="150" checked>
                            </label>
                            <img src="images/book.jpg" alt="Kniha">
                            <p>Cena za kus</p>
                            <p>Poštovné</p>
                            <p>Přepravce</p>
                        </div>
                        <div class="transport__right">
                            <label for="radio">
                                <input type="radio" name="order-transport" id="radio" class="radio__second" value="0">
                            </label>
                            <img src="images/book.jpg" alt="Kniha">
                            <p>Cena za kus</p>
                            <p>Poštovné</p>
                            <p>Přepravce</p>
                        </div>
                    </div>
                    <div class="quantity">
                        <label for="quantity">
                            <input type="number" name="book-quantity" class="form-item" id="quantity" min="1" max="100" required value="">
                        </label>
                        <p>Celkem:</p>
                        <p>999999</p>
                        <p>Kč</p>
                    </div>
                    <div class="form-text-inputs">
                        <p>Fakturační a dodací adresa:</p>
                        <p>Jméno:</p>
                        <label for="first-name">
                            <input type="text" name="order-first-name" class="form-item" id="first-name" min="2" max="20" required value="">
                        </label>
                        <p>Příjmení:</p>
                        <label for="last-name">
                            <input type="text" name="order-last-name" class="form-item" id="last-name" min="2" max="20" required value="">
                        </label>
                        <p>Ulice a číslo:</p>
                        <label for="street">
                            <input type="text" name="order-street" class="form-item" id="street" min="4" max="70"
                                   required value="">
                        </label>
                        <p>Město:</p>
                        <label for="town">
                            <input type="text" name="order-town" class="form-item" id="town" min="2" max="70" required value="">
                        </label>
                        <p>PSČ:</p>
                        <label for="zip-code">
                            <input type="number" name="order-zip-code" class="form-item" id="zip-code" required min="5" value="">
                        </label>
                        <p>Telefon:</p>
                        <label for="phone-number">
                            <input type="number" name="order-phone-number" class="form-item" id="phone-number" min="8" required value="">
                        </label>
                        <p>E-mail:</p>
                        <label for="email">
                            <input type="text" name="order-email" class="form-item" id="email" min="4" max="50" required value="">
                        </label>
                    </div>
                    <label for="terms">
                        <input type="checkbox" class="form-item" id="terms" required value="/checkbox">
                    </label>
                    <p>Souhlasím s <a href="<?php //terms.html ?>">obchodními podmínkami a zpracováním údajů pro účely vyřízení objednávky</a>.</p>
                    <input type="submit" name="submit" class="submit-button__true" value="Odeslat objednávku">
                </form>
                <button class="submit-button__false">Odeslat objednávku</button>
            </div>
        </div>
    </div>
    <?php
}
?>
<script src="scripts/script.js"></script>
</body>
