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
  <!-- Poppins Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
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
  <style>
    body {
      overflow-x: hidden;
      z-index: 1;
    }

    .package-card {
      z-index: 333;
    }
  </style>
</head>

<body>
  <!-- <div class="preloader">
    <div class="preloader-container">
      <span class="animated-preloader"></span>
    </div>
  </div> -->

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
    <section class="inner-hero bg_img" data-background="assets/images/invest.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">All Investment Plans</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Invest</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <div class="form-group mt-5 container col-lg-6">
    @if(Session::has('errors'))
    <p class="alert alert-danger m-5">    {{ implode('', $errors->all(':message')) }}
    </p>
    @endif
    @if (Session::has('message'))
            <div class="alert alert-success m-5">{{ Session::get('message') }}</div>
            @endif
      <!-- <label>Amount in PKR</label> -->
      <textarea name="" id="" cols="30" rows="" class="form-control base--color" disabled="disabled"
        style="background:transparent;">Announcements for investment</textarea>

    </div>
      @if($data>0)
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h2 class="section-title text-center mb-2"><span class="font-weight-normal">Pending</span> <b
                  class="base--color">Request</b></h2>
              <div class="table-responsive--md p-0">
              
                <table class="table style--two white-space-nowrap">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
          
                  @foreach($investmentrequests as $req)
                    <tr>
                      <td data-label="Date">{{$req->created_at->toDateString()}}</td>
                      
                      <td data-label="Name">
                        <span>{{$req->amount}}$</span>
                      </td>
                      <td data-label="Name">
                        <span>Pending</span>
                      </td>
           
                      
                    </tr>
                    @endforeach
                
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      @endif
    <!-- package section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b
                  class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for
                you.</p>
            </div>
          </div>
        </div><!-- row end -->

        <div class="row justify-content-center mb-none-30 my-5 container col-lg-6">
          <div class=" mb-30" style="width: 90%;">
            <div class="package-card text-center bg_img" data-background="assets/images/">
             
              <h4 class="package-card__title base--color mb-2">Invest in USDT TRC20</h4>
              <div class="package-card__range mt-2 text-small">Charges {{$charge->trcCharge}}%</div>
              <form enctype="multipart/form-data" method="POST" action="{{ route('investusdt') }}"id="" >
              @csrf
              <div class="form-group mt-3" style="max-width:220px;margin:auto;">
                <input type="text" name="amount" class="form-control" id="input" oninput="updateLabel()"
                  placeholder="Amount in USDT" required>
                  <div class="row">
              <label  class=" mt-4 ">Including Tax you have to Pay : $</label>
              <label id="display" class=" mt-4 "> </label>
              </div>
              </div>

              
              <button class="cmn-btn ">Invest Now</button>
              </form>
            </div><!-- package-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- package section end  -->
    <style>
      .easypaisa {
        width: 7px;
        height: 10px;
        background-color: greenyellow;
        border-radius: 50%;

      }

      .bankTransfer {
        width: 7px;
        height: 10px;
        background-color: blue;
        border-radius: 50%;
      }

      .jazzCash {
        width: 7px;
        height: 10px;
        background-color: red;
        border-radius: 50%;
      }

      .uPaisa {
        width: 7px;
        height: 10px;
        background-color: yellow;
        border-radius: 50%;
      }
      .sell-btn{
        padding: 12px;
    padding-right: 30px;
    padding-left: 30px;
color: white;
      }
      .sell-btn:hover{
background-color: #cca354;
color: black;
      }
    </style>
    <h2 class="section-title text-center"><span class="font-weight-normal">Buy and Sell -</span> <b
        class="base--color">P2P</b></h2>
        <p class="text-center">It is only for users in Pakistan</p>
       <!-- buy and sell button -->
        <!-- <div class="container col-6 mt-3"style="display: flex;
        justify-content: center;">
          <button class="cmn-btn">Buy</button>
          <button class="btn sell-btn ml-2">Sell</button>
        </div> -->
        @foreach($ptpaccounts as $ptpaccount)
        <div class="container col-lg-6">
          <div class="row justify-content-center mb-none-30 my-5">
            <div class=" mb-30"style="width: 90%;">
              <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-png">
                <h4 class="package-card__title base--color mb-2">{{$ptpaccount->accountname}} <span class="text-small">	
                @if($ptpaccount->stars==1)<i class="fa fa-star"></i> @endif
                @if($ptpaccount->stars==2)<i class="fa fa-star"></i> <i class="fa fa-star"></i>@endif
                @if($ptpaccount->stars==3)<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>@endif
                @if($ptpaccount->stars==4)<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>@endif
                @if($ptpaccount->stars==5)<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>@endif
                </span></h4>
                
                <div class="package-card__range"> <span class="text-small">Price:</span>  <span class="base--color"style="font-size: 30px;"> {{$ptpaccount->amountpkr}}</span> <span class="text-small">PKR</span> </div>
                <div class="package-card__range mt-2 text-small">Available USDT {{$ptpaccount->usdt}}</div>
                <div class="package-card__range mt-2 text-small">Limit PKR {{$ptpaccount->min}} - PKR {{$ptpaccount->max}}</div>
                <div class="package-card__range mt-2 text-small">
                  @if($ptpaccount->easypaisa=='yes')<span class="easypaisa mx-1"></span>Easypaisa @endif
                  @if($ptpaccount->banktransfer=='yes')<span class="bankTransfer mx-1"></span>Bank Transfer @endif
                  @if($ptpaccount->jazzcash=='yes')<span class="jazzCash mx-1"></span>jazzCash @endif
                  @if($ptpaccount->upaisa=='yes')<span class="uPaisa mx-1"></span>U Paisa @endif
              </div>

                @if($ptpaccount->status=='1')
                @if($ptpaccount->userid==Auth::user()->id)
                <a href="{{route('viewptop',$ptpaccount->id)}}" class="cmn-btn mt-4">View</a>
                @else
                <a class="cmn-btn mt-4">Busy</a>
                @endif
                @else
                <a href="{{route('investptop',$ptpaccount->id)}}" class="cmn-btn mt-4">Buy Now</a>
                @endif
              </div><!-- package-card end -->
            </div>
            </div>
        </div>
        @endforeach

    <!-- MOdal Starts -->
    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="    border: 2px solid #cca354;
      color: white;
      background: #57502d;">
          <div class="modal-header">
            <h5 class="modal-title" id="buyModalLabel">Invest using PKR</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
              </div>
              <div class="d-flex justify-content-between px-5">
                <p>Account Number</p>
                <p>213210423232</p>
              </div>
              <div class="d-flex justify-content-between px-5">
                <p>Limit</p>
                <p>Rs 10,000 - Rs 100,000</p>
              </div> -->

            </div>

            <hr style=" border: 1px solid;">
            <form action="" method="post">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Amount in PKR</label>
                <input style="background: transparent;" type="number" oninput="update()" class="form-control" name="amountPKR" id="input_" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Amount in USDT</label>
                <input style="background: transparent;"  disabled="disabled" type="number" class="form-control"
                   name="amountUSDT">
              </div>
                <button type="submit" class="cmn-btn">Submit</button>


            </form>
            <hr>

          </div>

        </div>
      </div>
    </div>
    <link rel="stylesheet" href="assets/css/chat.css">
    <!-- Modal Ends -->



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
    <!-- footer section end -->
      <?php
      $a = $charge->trcCharge;
      ?>
  </div> <!-- page-wrapper end -->
  <script>
      function updateLabel() {
        var charge = '{{$charge->trcCharge}}';
        var amount = document.getElementById("input").value;
        var tax = ((document.getElementById("input").value)*charge)/100;
        var total = parseFloat(amount) + parseFloat(tax);
        document.getElementById("display").innerHTML = total;
      }
    </script>
    
  <script src="assets/js/chat.js"></script>
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
  <script src="assets/js/notification.js"></script>
  <script>
    var refresh = setInterval(
  function(){
    $('#bell1').load('<?php echo url('/noti');?>').fadeIn("slow");
  },1);

  </script>
</body>

</html>