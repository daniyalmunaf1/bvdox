<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="BVdox is a Investment Website, Here you can earn unlimited Money by just investing and developing a network">
  <meta name="keywords" content="Investment,Network Marketing,Online Earnig,Earning,Marketing,Work From Home,Make Your Network,Invite,Invite Friends,BVdox,BVdox.com,bvdox,bvdox.com">
  <meta name="author" content="BVdox">

  <title>BVdox</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/dots.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
  
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">

    <!-- account section start -->
    <div class="account-section bg_img" data-background="assets/images/login.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one d-flex flex-column" data-background="assets/images/bg/bg-67.jpg"style="padding: 10px 30px;">
                <!-- <p>Complete your transaction within 15min</p>
            <p>Timer Countdown:</p>
            <p class="base--color">10:50</p>
            <br> -->
            <p>You have requested {{$amount}} USD , There is {{$charge}} USD Charges. Please pay {{$amount+$charge}} USD for successful payment


                Please Send Describes Amount to our wallet and attach a ScreenShot. We will verify your amount and add balance to deposit wallet
                
                
                Send to Our Wallet address </p>
           
              </div>
              <div class="account-card__body">
               
              
                    <div class="justify-content-start">
                        <strong class="d-block text-center">Send Here</strong>
                        <hr class="border">
                        <!-- <div class="d-flex justify-content-between px-5">
                          <p>Bank Account</p>
                          <p>Mezan</p>
                        </div>
                        <div class="d-flex justify-content-between px-5">
                          <p>Account Name</p>
                          <p>Hafiz Usman</p>
                        </div> -->
                        <div class="d-flex justify-content-between px-1 flex-wrap">
                            <p>Wallet Address:</p>
                          <textarea class="base--color form-control"  rows="2" cols="50" disabled="disabled"  style="background: transparent;">{{$detail->wallet}}</textarea>
                        </div>
                        <div class="d-flex justify-content-between px-1 flex-wrap flex-column align-items-center">
                            <p class="my-2">OR scan QR code:</p>
                         <img class="my-2" src="{{asset('/storage/'.$detail->qrcode)}}" alt="qrcode"style="width: 40%;">
                        </div>
                        <!-- <div class="d-flex justify-content-between px-5">
                          <p>Limit</p>
                          <p>Rs 10,000 - Rs 100,000</p>
                        </div> -->
            
                      </div>
                      <hr class="border">
                    <div class="justify-content-start">
                        <strong class="d-block text-center">Your Details</strong>
                        <hr class="border">
                        <div class="d-flex justify-content-between px-5">
                          <p>Your Amount</p>
                          <p>{{$amount}} USDT</p>
                        </div>
                        <div class="d-flex justify-content-between px-5">
                          <p>Amount inc Charges</p>
                          <p>{{$charge+$amount}} USDT</p>
                        </div>
                      
                      
                      </div>
                      <form enctype="multipart/form-data" method="POST" action="{{ route('appeal') }}" >
                        @csrf
                        <div class="form-group">
                            <label>Transaction Id</label>
                            <input type="hidden" class="form-control" name="tamount" value="{{$amount+$charge}}">
                            <input type="hidden" class="form-control" name="amount" value="{{$amount}}">
                            <input type="text" class="form-control" name="tid" placeholder="E.g.32842932042349" required>
                          </div>
                          <div class="form-group">
                            <label>Screenshot</label>
                            <input type="file" class="form-control" name="ss" placeholder="Screenshot of transaction" required>
                          </div>
            
                        <button type="submit" class="cmn-btn" >
                          Appeal
                        </button>
                      </form>
                <!-- Button trigger modal -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- account section end -->
  </div> <!-- page-wrapper end -->
  
  


    <!-- jQuery library -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/wow.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/js/app.js"></script>
  </body>
</html>