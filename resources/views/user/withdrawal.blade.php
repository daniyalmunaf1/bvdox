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
  <!-- For Notifications -->
<link rel="stylesheet" href="assets/css/notification.css">
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
    <!-- header-section start  -->
    @include('user.header')

    <!-- header-section end  -->

    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/withdrawal.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Withdrawal</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Withdrawal</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    @if(Session::has('errors'))
    <p class="alert alert-danger m-5">    {{ implode('', $errors->all(':message')) }}
    </p>
    @endif
    @if (Session::has('message'))
            <div class="alert alert-success m-5">{{ Session::get('message') }}</div>
            @endif

    <h2 class="section-title text-center mt-5"><span class="font-weight-normal">Account</span> <b
        class="base--color">Statistics</b></h2>
    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mb-none-30 justify-content-center mb-5">
          
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Available for Withdrawal</span>
                    <h4 class="currency-amount">${{Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
          
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Today USDT price</span>
                    <h4 class="currency-amount">{{$detail->usdtprice}} PKR</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
  
            </div><!-- row end -->
    <!-- dashboard section end -->
    <h2 class="section-title text-center"><span class="font-weight-normal ">Withdraw</span> <b
        class="base--color">Now</b></h2>
    <form action="{{route('submitwithdrawrequest')}}" method="POST" class="mt-4 container mb-4 col-lg-6">
      @csrf
      <div class="form-group">
        <label>Bank Name</label>
        <input name="bank" value="{{old('bank')}}" type="text" class="form-control" placeholder="E.g.Citigroup" required>
      </div>
      <div class="form-group">
        <label>Account Holder Name</label>
        <input type="text" class="form-control" name="accountname" value="{{old('accountname')}}" placeholder="E.g.John Henry" required>
      </div>
      <div class="form-group">
        <label>Account Number</label>
        <input type="text" class="form-control" name="accountnumber" value="{{old('accountnumber')}}" placeholder="E.g.0112345678" required>
      </div>
      <div class="form-group">
        <label>Amount in USDT</label>
        <input type="text" min="0" disabled  class="form-control" oninput="updateLabel()" id="input" name="amountUSDT" value="{{Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus}}" required placeholder="E.g.2000">
      </div>
      @if(Auth::user()->country=='Pakistan'||Auth::user()->country=='pakistan'||Auth::user()->country=='PAKISTAN')
      <div class="form-group">
        <label >Amount in PKR</label>
        <input type="text"  id="display" value="{{(Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus)*$detail->usdtprice}}" disabled name="amountPKR" class="form-control"style="background:transparent;" >
      </div>
      @endif
      <div class="mt-3">
        <button type="submit" class="cmn-btn">Withdraw Now</button>
      </div>
    </form>
          </div>
        </div>
      </div>
    </div>
  <!-- footer section start -->
  <footer class="footer bg_img" data-background="assets/images/footer.jpg">
    <div class="footer__top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <a href="#0" class="footer-logo"><img src="assets/images/logo.png" alt="image"></a>
            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
              <li><a href="#0">Home</a></li>
              <li><a href="#0">Privacy & Policy</a></li>
              <li><a href="#0">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>© 2022 <a href="index.html" class="base--color">BVdox</a>. All rights reserved</p>
          </div>
          <div class="col-md-6">
            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
              <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i
                    class="lab la-facebook-f"></i></a></li>
              <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i
                    class="lab la-twitter"></i></a></li>
              <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i
                    class="lab la-pinterest-p"></i></a></li>
              <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i
                    class="lab la-pinterest-in"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php
      $a = $detail->usdtprice;
      ?>
  </div> <!-- page-wrapper end -->
  <script>
      function updateLabel() {
        var usdtrate = '{{$detail->usdtprice}}';
        var usdtamount = document.getElementById("input").value;
        var amount = parseFloat(usdtamount) * parseFloat(usdtrate);
        
        document.getElementsByName("amountPKR")[0].value = amount;
      }
    </script>
  <!-- footer section end -->
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

  <!-- For Notifications -->
 <script src="assets/js/notification.js"></script>

</body>

</html>