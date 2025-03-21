# nttdatapay-codeigniter

## Prerequisites
- PHP 7.3 to 8.4
- UAT MID and keys will be provided by the NTT DATA Payment Services.

## Installation
1. Add the library files below to the application/libraries folder. No need to make any changes to these files.
    - AtomAES.php (This will handle the encryption and decryption)
    - AtompayRequest.php (This will handle the request part)
    - AtompayResponse.php (This will help to handle the response part)
    - cacert.pem (certificate file)

2. Refer the code from controller to create the payment request and handle the response section.

3. Replace the necessary data in the index function(payurl, amount, login, password, product ID, returnurl etc.)

4. In the views folder in demo_pay_pages.php we call openPay() which will open the payment page.

5. Configure the atomcheckout.js in accordance with UAT and Production environments. Also, change all the necessary information.

