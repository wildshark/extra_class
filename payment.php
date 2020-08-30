<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels-122x122.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  
  <title>payment</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
  <section class="menu cid-s4H6GBMhIm" once="menu" id="menu1-1q">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="home.php">
                         <img src="assets/images/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">EXTRA CLASS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="sample.php" aria-expanded="false">Sample Worksheet</a></li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="contact.php" aria-expanded="false">
                        Contact Us
                    </a></li></ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="?logoff">
                <span class="mobi-mbri mobi-mbri-arrow-up mbr-iconfont mbr-iconfont-btn"></span>
                Exit</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/e">make your own site</a></section><section class="header1 cid-s95vTdyHf1" id="header16-1t">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Start Classes
                </h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    To get all Classes, you are requested to subscription.<br>
                    Note: Processing Fee will be included to your payment by our payment provider
                </p>
                
            </div>
        </div>
    </div>

</section>

<section class="services2 cid-s95vDyXFPM" id="services2-1s">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="assets/images/6594289-preview-579x589.png" alt="Mobirise" title="">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        Subscription
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">
                            <h3>Reciept # <?=$q['fname']?> <?=$q['lname']?></h3>
                            <h5>Ref # <?=$txref ="ECL-".time()?></h5>
                            Email <?=$q['email']?><br>
                            Mobile <?=$q['mobile']?>
                        </p>
                        <p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-2">
                            20.00 GHs <!--span class="cost">$890</span-->
                        </p>
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left">
                    <form>
                        <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                        <button type="button" onClick="payWithRave()" class="btn btn-warning-outline display-4">Pay Now</button>
                    </form>
                        <script>
                            const API_publicKey = "FLWPUBK_TEST-f3182c49e15e6d57532e348a0a9d2b2a-X";

                            function payWithRave() {
                                var x = getpaidSetup({
                                    PBFPubKey: API_publicKey,
                                    custom_logo:"",
                                    custom_title: "Extra Class",
                                    customer_firstname: "<?=$q['fname']?>",
                                    customer_lastname: "<?=$q['lname']?>",
                                    customer_email: "<?=$q['email']?>",
                                    amount: 20,
                                    customer_phone: "<?=$q['mobile']?>",
                                    currency: "GHS",
                                    txref: "<?=$txref?>",
                                    meta: [{
                                        metaname: "flightID",
                                        metavalue: "AP1234"
                                    }],
                                    onclose: function() {},
                                    callback: function(response) {
                                        var txref = response.data.txRef; // collect txRef returned and pass to a                    server page to complete status check.
                                        console.log("This is the response returned after a charge", response);
                                        if (
                                            response.data.chargeResponseCode == "00" ||
                                            response.data.chargeResponseCode == "0"
                                        ) {
                                            // redirect to a success page
                                            window.location.href = "http://localhost/extra_class/index.php?_page=verification&p=1&txref=for-<?=$_SESSION['cart']?>";
                                        } else {
                                            // redirect to a failure page.
                                            window.location.href = "http://localhost/food_order/index.php?_page=verification&p=0&txref=for-<?=$_SESSION['cart']?>";
                                        }

                                        x.close(); // use this to close the modal immediately after payment.
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-s8XAcsATZz" id="footer6-1r">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>