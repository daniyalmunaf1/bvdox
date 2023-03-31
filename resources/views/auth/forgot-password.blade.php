

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
                <h2 class="section-title">Forgot Password ?</h2>
                <p>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
              </div>
              <div class="account-card__body">
				<form  method="POST" action="{{ route('password.email') }}" class="form w-100" novalidate="novalidate" id="kt_password_reset_form"  >
                	            @csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<!--end::Title-->
									<!--begin::Link-->
									<!--end::Link-->
                                    
                                    <!-- Session Status -->
                                    @if(Session::has('status'))
                                    <p class="alert alert-success">{{ Session::get('status') }}</p>
                                    @endif
                                    <!-- Validation Errors -->
                                    @if(Session::has('errors'))
                                    <p class="alert alert-danger">    {{ implode('', $errors->all(':message')) }}
													</p>
                                    @endif
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
                                    <input id="email" placeholder="Email" class="form-control bg-transparent" type="email" name="email"  required autofocus />

									<!--end::Email-->
								</div>
								<!--begin::Actions-->
								<div class="d-flex flex-wrap justify-content-center">
									<button type="submit" id="" class="text-white cmn-btn m-3">
										<!--begin::Indicator label-->
										<span class="indicator-label">Email Password Reset Link</span>
										
									</button>
									<a href="{{ route('login') }}" class="text-white cmn-btn m-3">Cancel</a>
								</div>
								<!--end::Actions-->
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


