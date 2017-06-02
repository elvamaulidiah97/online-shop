<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$name = 'Nama Olshop';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Situs Jual Beli Online Kekinian | nextProject</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Situs jual beli kekinian untuk anak muda, jangan ngaku muda kalau belum beli di sini" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>

<?php include('header.php') ?>

<style type="text/css">
    form {
        text-align: center;
    }
</style>

<br>
<br>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart" />
    <input type="hidden" name="add" value="1" />
    <input type="hidden" name="business" value="example@minicartjs.com" />
    <input type="hidden" name="item_name" value="Test Product" />
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="amount" value="1.00" />
    <input type="hidden" name="currency_code" value="USD" />
    <input type="hidden" name="shipping" value="1.00">
    <strong>Baju Muslim Elva</strong>
    <br>
    <strong>Baju Muslim Hendra</strong>
    <br>
    <strong>Baju Muslim Kurnia</strong>
    <br>
    <br>
    <br>
    <br>
    <input type="submit" name="submit" value="Continue to Payment" />
</form>

<?php include('footer.php') ?>

    <script src="js/minicart.js"></script>
    <script>
        // w3ls1.render();
        // w3ls1.cart.on('checkout', function (evt) {
        // 	var items, len, i;
        // 	if (this.subtotal() > 0) {
        // 		items = this.items();
        //         console.log(items);
        //         for (i = 0, len = items.length; i < len; i++) {
        //             console.log(items[i]);
        // 			items[i].set('shipping', 0);
        // 			items[i].set('shipping2', 0);
        // 		}
        // 	}
        // });

        paypal.minicart.render();
        paypal.minicart.cart.on('checkout', function (evt) {
            var items, len, i;
            if (this.subtotal() > 0) {
                items = this.items();
                for (i = 0, len = items.length; i < len; i++) {
                    items[i].set('shipping', 0);
                    items[i].set('shipping2', 0);
                }
            }
        });
    </script>
</body>
</html>