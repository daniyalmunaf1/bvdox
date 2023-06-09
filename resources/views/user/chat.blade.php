<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <style>
    .header .main-menu li a {
padding: 30px 15px 30px 0;
text-transform: capitalize;
font-size: 14px;
color: #ffffff;
position: relative;
}</style>
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
          <div class="modal-content" style="    border: 2px solid #cca354;
      color: white;
      background: #57502d;">
            <div class="modal-header d-flex">
              <!-- <p>Timer Countdown : </p> -->
              <!-- <p class="base--color"> 10:50</p> -->
              <!-- <h5 class="modal-title" id="investModalLabel">Invest using PKR</h5> -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          
              <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="container d-flex justify-content-center">
                      <div class="">
                        <div class="card card-bordered">
                          <div class="card-header">
                            <h4 class="card-title"><strong>Chat with </strong> <br>Send only screenshots</h4>
                        
                          </div>
            
            
                          <div class="ps-container ps-theme-default ps-active-y" id="msg" style="overflow-y: scroll !important; height:400px !important;">
                            
            
                            
            
                          <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div>
            
                          <div class="publisher bt-1 border-light">
                          
                            <input class="publisher-input" type="text" placeholder="Write something">
                            <span class="publisher-btn file-group">
                              <i class="fa fa-paperclip file-browser"></i>
                              <input type="file">
                            </span>
                          
                            <a class="publisher-btn text-info" href="#" data-abc="true"><i class="fa fa-paper-plane"></i></a>
                          </div>
            
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- account section end -->
  </div> <!-- page-wrapper end -->
  
  
    <!-- MOdal Starts -->
    <div class="modal fade" id="investModal" tabindex="-1" role="dialog" aria-labelledby="investModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="    border: 2px solid #cca354;
      color: white;
      background: #57502d;">
  
          
  
        </div>
      </div>
    </div>
    <link rel="stylesheet" href="assets/css/chat.css">
    <!-- Modal Ends -->

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
  <script>
   
    var refresh = setInterval(
  function(){
    $('#msg').load('<?php echo url('/rchat');?>').fadeIn("slow");
  },1);
  </script>
  </body>
</html>