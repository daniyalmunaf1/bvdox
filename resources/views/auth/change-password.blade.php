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
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
              @if(Session::has('errors'))
    <p class="alert alert-danger m-5">    {{ implode('', $errors->all(':message')) }}
    </p>
    @endif
    @if (Session::has('message'))
            <div class="alert alert-danger m-5">{{ Session::get('message') }}</div>
            @endif  
              <h2 class="section-title">Welcome to <span class="base--color">BVdox</span></h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio deserunt impedit similique debitis voluptatum enim.</p>
              </div>
              <div class="account-card__body">
                <h3 class="text-center">Change Password</h3>
                <form method="POST" action="{{route('change_password')}}" class="mt-4">
                  @csrf
                  <div class="form-group">
                    <label>New Password</label>
                    <input id="password" class="form-control pass-show" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                  </div>
                  <div class="form-group">
                    <label>New Password</label>
                    <input id="password_confirmation" placeholder="Repeat Password" class="form-control pass-show" type="password" name="password_confirmation" required />
                    <input type="checkbox" onclick="myFunction()"> <span style="font-size: 12px;">Show Password</span> 
<script>function myFunction() {
  var x = document.getElementsByClassName("pass-show");
  Array.from(x).forEach((x)=>{
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  })
}</script>
                  </div>
               
                  <div class="mt-3">
              <button type="submit" class="text-white cmn-btn">Submit</button> 
                  </div>
                </form>
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