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
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.min.css')}}">
  <!-- slick slider css -->
  <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/vendor/dots.css')}}">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
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
    <div class="account-section bg_img" data-background="{{asset('assets/images/login.jpg')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              
              <div class="modal-content" style="    border: 2px solid gold;
          color: white;
          background: #57502d;">
        <div class="modal-header">
          <h5 class="modal-title" id="usdModalLabel">Invest in USDT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="justify-content-start">
          @if(Session::has('errors'))
            <p class="alert alert-danger">    {{ implode('', $errors->all(':message')) }}
            </p>
            @endif
            @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('issue'))
            <div class="alert alert-danger">{{ Session::get('issue') }}</div>
            @endif  
            <strong class="d-block text-center">User Details</strong>
            <hr class="border">

            <div class="d-flex justify-content-between px-5">
              <p>Amount</p>
              <div class="form-group">
                <input type="text"disabled="disabled"style="background:transparent;" class="form-control" value="{{$investmentrequest->amount}}" id="exampleInputPassword1" placeholder="E.g.770">
              </div>
            </div>
          
            <div class="d-flex justify-content-between px-5">
              <p>Trx Id</p>
              <div class="form-group">
                <input type="text"disabled="disabled"style="background:transparent;" value="{{$investmentrequest->tid}}" class="form-control" id="exampleInputPassword1" placeholder="E.g.03535938493">
              </div>
            </div>
          
          
          </div>
          <hr style="    border: 1px solid;">
            <style>
              .screenshot-box{
                width: 100%;

                height: 500px;
                border:1px solid #cca354;
              }
            </style>
              <hr>
          <div class="container">
            <h2 class="text-center">Screenshot</h2>
            <div class="screenshot-box m-auto">
              <img src="{{asset('/storage/'.$investmentrequest->ss)}}" class="screenshot-box" alt="">
            </div>
          </div>
          <form action="{{route('submitinvestmentrequest',$investmentrequest->id)}}" method="POST">
            @csrf
          <div class="container mt-4">
            <div class="form-group">
              <input type="number" min="0" style="background:transparent;" class="form-control" name="Amount" id="exampleInputPassword1" placeholder="Send USDT" required>
            </div>
            <a href="{{route('investmentrequest')}}" class="btn btn-warning">Pending</a>
            <button type="submit" class="btn btn-warning">Submit</a>
          </div>
          </form>
        </div>

      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->

  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
  <!-- slick slider js -->
  <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <!-- dashboard custom js -->
  <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>