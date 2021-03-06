<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopDrop</title>

    <!--Some inbuilt CSS for easy work -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="css/styleold.css" />
    <link type="text/css" rel="stylesheet" href="css/loginform.css" />
</head>
<body>
    <a name="paymentmethod"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

        <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div class="payinput">
                    <div>
                        <H1 class="smallheading2">CHOOSE PAYMENT METHOD</H1>
                    </div>
                    <div>
                        <form action="payment.php" method="POST" class="l_form">
                            <div class="containerform">
                                <label for="amount"><b>Amount</b></label>
                                <input type="tel" class="login_input" placeholder="Enter amount" name="amount" required>
                            <br>
                            <br>
                              <label for="paymentmethod"><b>Payment Method</b></label>
                              <br>
                              <select name = "paymentmethod" required>
                                <option value = "1">Paypal</option>
                                <option value = "2">Direct Debit</option>
                              </select>
                              <br>
                              <button type="submit" class="form_button">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>