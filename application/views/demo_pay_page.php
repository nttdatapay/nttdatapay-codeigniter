<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atom Paynetz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h3 class="">Merchant Shop</h3>
        <p>Transaction Id: <?= $transactionId; ?></p>
        <p>Atom Token Id: <?= $atomTokenId ? $atomTokenId : "No Token" ?></p>
        <p>Pay Rs. <?= $amount; ?></p>
        <a name="" id="" class="btn btn-primary" href="javascript:openPay()" role="button">Pay Now</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!--Atom payment cdn-->
    <script src="https://pgtest.atomtech.in/staticdata/ots/js/atomcheckout.js"></script>
    
    <script>
        function openPay() {
            const options = {
                "atomTokenId": "<?= $atomTokenId ?>",
                "merchId": "8952",
                "custEmail": "sagar.gopale@atomtech.in",
                "custMobile": "8976286911",
                "returnUrl": "http://localhost/kits/Codeigniter/Codeigniter_3/welcome/response"
            }
            let atom = new AtomPaynetz(options, 'uat');
        }
    </script>
</body>

</html>
