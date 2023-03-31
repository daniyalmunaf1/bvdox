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
        @include('admin.header')

        <!-- header-section end  -->

        <!-- inner hero start -->
        <section class="inner-hero bg_img" data-background="assets/images/dashboard.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Hi Admin</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Reward Requests</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <h2 class="section-title text-center pt-5"><span class="font-weight-normal">Reward</span> <b
                class="base--color">Requests</b></h2>
        <div class="row mt-50 mb-50">
            <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                    <table class="table style--two white-space-nowrap">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Total Investment</th>
                                <th>Total Team Investment</th>
                                <th>Reward Name</th>
                                <!-- <th>Requested Withdrawal in USDT</th>
              <th>Requested Withdrawal in PKR</th>
              <th>Withdraw Times</th> -->
                                <!-- <th>Referrals</th> -->
                                <!-- <th>Bank Account</th>
              <th>Account Name</th>
              <th>Account Number</th> -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Date">21/02/2022</td>
                                <td data-label="Email">
                                    <span class="base--color">ahsan@example.com</span>
                                </td>
                                <td data-label="Name">
                                    <span>Ahsan</span>
                                </td>
                                <td data-label="Total Investment">
                                    <span>$2000</span>
                                </td>
                                <td data-label="Total Team Investment">
                                    <span>$5000</span>
                                </td>
                                <td data-label="Reward Name">Laptop</td>

                                <td data-label="Actions">
                                    <button  class="btn-outline-warning btn"data-toggle="modal" data-target="#rewardModal">Send</button>
                                    <button class="btn btn-outline-danger">Delete</button>

                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- row end -->
    </div>

    <div class="modal fade" id="rewardModal" tabindex="-1" role="dialog" aria-labelledby="rewardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="    border: 2px solid gold;
        color: white;
        background: #57502d;">
            <div class="modal-header">
              <h5 class="modal-title" id="rewardModalLabel">Invest in USDT</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
       
              <hr style="    border: 1px solid;">
   
         <div class="container mt-4">
          <div class="form-group">
            <input type="text"style="background:transparent;" class="form-control" id="exampleInputPassword1" placeholder="Send USDT">
          </div>
           <button class="btn btn-warning">Submit</button>
         </div>
        </div>
    
          </div>
        </div>
      </div>
      <!-- MODAL ENDS -->

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