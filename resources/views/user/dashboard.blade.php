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

  <!-- graph -->

    <style>
     
      
  
 .b-skills
 {
   border-top: 1px solid #f9f9f9;
   padding-top: 46px;
   text-align: center;
 }
 
 .b-skills:last-child { margin-bottom: -30px; }
 
 .b-skills h2 { margin-bottom: 50px; font-weight: 900; text-transform: uppercase;}
 
 .skill-item
 {
   position: relative;
   max-width: 250px;
   width: 100%;
   margin-bottom: 30px;
   color: #cca354;
 }
 
 .chart-container
 {
   position: relative;
   width: 100%;
   height: 0;
   padding-top: 100%;
   margin-bottom: 27px;
 }
 
 .skill-item .chart,
 .skill-item .chart canvas
 {
   position: absolute;
   top: 0;
   left: 0;
   width: 100% !important;
   height: 100% !important;
 }
 
 .skill-item .chart:before
 {
   content: "";
   width: 0;
   height: 100%;
 }
 
 .skill-item .chart:before,
 .skill-item .percent
 {
   display: inline-block;
   vertical-align: middle;
 }
 
 .skill-item .percent
 {
   position: relative;
   line-height: 1;
   font-size: 40px;
   font-weight: 900;
   z-index: 2;
 }
 
 .skill-item  .percent:after
 {
   content: attr(data-after);
   font-size: 20px;
 }
        
        p{
            font-weight: 900;
        }
  
     
     </style>
  
   
   

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
  <div class="page-wrapper" id="reload">
    <!-- header-section start  -->
    @include('user.header')
    <!-- header-section end  -->

    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/dashboard.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Welcome <span class="base--color">{{$user->name}}</span>  </h2>
            <h4>{{$user->country}}</h4>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Dashboard</li>
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
    <div class="form-group mt-5 container col-lg-6">
      <!-- <label>Amount in PKR</label> -->
      <textarea name="" id="" cols="30" rows="" class="form-control base--color" disabled="disabled"
        style="background:transparent;">@if($announcement->message){{$announcement->message}}@else No Announcement @endif</textarea>

    </div>
    <h2 class="section-title text-center mt-5"><span class="font-weight-normal">Account</span> <b
        class="base--color">Statistics</b></h2>
    <!-- dashboard section start -->
    <div class="pt-120">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12">
            <div class="row mb-none-30 justify-content-center">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Deposit Wallet Balance</span>
                    <h4 class="currency-amount">${{$user->investment}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Lifetime Investment</span>
                    <h4 class="currency-amount">${{$user->ltinvestment}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Your Profit</span>
                    <h4 class="currency-amount">${{$user->profit}}</h4>
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
                    <span class="caption">Current Package</span>
                    <h4 class="currency-amount" style="text-transform: capitalize;">{{$user->package}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Lifetime Withdrawal</span>
                    <h4 class="currency-amount">${{$user->ltwithdrawal}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Reward income</span>
                    <h4 class="currency-amount">${{$user->rewardincome}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Referral Earnings</span>
                    <h4 class="currency-amount">${{$user->referralearnings}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
        
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">My Referrals</span>
                    <h4 class="currency-amount">{{$user->referrals}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total team members</span>
                    <h4 class="currency-amount">{{$user->totalreferrals}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>

              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total team investment</span>
                    <h4 class="currency-amount">${{$user->teaminvestment}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
        
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Team profit Bonus</span>
                    <h4 class="currency-amount">${{$user->teamprofitbonus}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Your Ownership</span>
                    <h4 class="currency-amount">{{$user->ownership}}%</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Lifetime Earnings</span>
                    <h4 class="currency-amount">${{$user->ltearnings}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Joining Date </span>
                    <h4 class="currency-amount">{{$user->created_at->toDateString()}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            
            </div><!-- row end -->
            <div class="container">
              <h2 class="section-title text-center mt-5"><span class="font-weight-normal">Your </span> <b
                  class="base--color">Referral</b> link</h2>
              <div class="form-group mt-5">
                <!-- <label>Amount in PKR</label> -->
                <input type="text" class="form-control" disabled="disabled" value="{{ route('registerbyinvite',$user->email)}}">
              </div>
            </div>
         
        
            <h2 class="section-title text-center pt-5"><span class="font-weight-normal">Transactions</span> <b
                class="base--color">History</b></h2>
            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Withdrawal Amount</th>
                        <th>Bank Account</th>
                        <th>Account Name</th>
                        <th>Account Number</th>
                      </tr>
                    </thead>
                    <tbody>
                          @foreach($withdrawalrequests as $req)
                          <tr>
                            <td data-label="Date">{{$req->created_at->toDateString()}}</td>
                            
                            
                            <td data-label="Name">
                              <span>{{$req->amountUSDT}}$</span>
                            </td>
                            
                            <td data-label="Name">
                              <span>{{$req->bank}}</span>
                            </td>
                            <td data-label="Name">
                              <span>{{$req->accountname}}</span>
                            </td>
                            <td data-label="Name">
                              <span>{{$req->accountnumber}}</span>
                            </td>
                  
                            
                          </tr>
                          @endforeach
                                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- row end -->
          </div>
        </div>
     
      </div>
    </div>
    <!-- Graph -->

    <section id="s-team" class="section pb-5">
			 
			<div class="b-skills">
				<div class="container">
        @if($percent!=101)
          
          <h2 class="section-title text-center pt-5"><span class="font-weight-normal">Plan</span> <b
            class="base--color">Complete Graph</b></h2>
            <form action="{{route('user-dashboard-graph')}}" method="POST">
              <div class="row d-flex justify-content-center">
                @csrf
              <div class="col-3">
                <select name="graph">
                  @foreach($deposits as $deposit)
                  <option value="{{$deposit->id}}">Investment Date : {{$deposit->created_at->toDateString()}}</option>
                  @endforeach
                </select>
              </div>
              </div>
              <div class="row d-flex justify-content-center pt-3">
              <div class="col-4">
                <button class="cmn-btn" type="submit">Update Graph</button>
              </div>
              </div>
            </form>
          </div>
					<div class="row d-flex justify-content-center pt-5">
						<div class="col-xs-12 col-sm-6 col-md-3  d-flex justify-content-center">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{$percent}}" data-bar-color="#edc214">
										<span class="percent" data-after="%">{{$percent}}</span>
									</div>
								</div>

							</div>
						</div>
            @endif

            
					</div>
				</div>
			</div>
		</section>
        
    <section class="container">
    
        <section id="business"class="pt-120 pb-120">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <div class="section-header">
                  <h2 class="section-title text-center mt-5"><span class="font-weight-normal">Our</span> <b
                    class="base--color">Businesses</b></h2>
                  <p>Invest with <span class="base--color"style="font-size: 38px;
                    font-family: emoji;">AS</span>  Group of companies</p>
                </div>
              </div>
            </div><!-- row end -->
            <div class="row justify-content-center mb-none-30">
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/b-1.jpg">
                  <h4 class="package-card__title base--color mb-2">Bitcoin crypto trading</h4>
                  <ul class="package-card__features mt-4">
                    <li>With expert traders</li>
                  </ul>
            
            
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/eventplan.jpg">
                  <h4 class="package-card__title base--color mb-2">AS Events Management</h4>
                  <ul class="package-card__features mt-4">
                    <li>Organize Events</li>
                  </ul>
                 
            
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/pesticides.jpg">
                  <h4 class="package-card__title base--color mb-2">Pesticides Business</h4>
                
                 
            
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/tech.jpg">
                  <h4 class="package-card__title base--color mb-2">AS Tech zone</h4>
          
            
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/food.jpg">
                  <h4 class="package-card__title base--color mb-2">Fast Food Industry</h4>
           
            
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/realestate.jpg">
                  <h4 class="package-card__title base--color mb-2">Real Estate</h4>
           
                </div><!-- package-card end -->
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                <div class="package-card text-center bg_img" data-background="assets/images/bikeindustry.webp">
                  <h4 class="package-card__title base--color mb-2">Bike Industry</h4>
           
                </div><!-- package-card end -->
              </div>
              
              </div>
            </div><!-- row end -->
      
          </div>
        </section>
        <!-- package section end  -->
    </section>
    <!-- dashboard section end -->

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

  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

  <!-- bootstrap js -->
  
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/wow.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/js/app.js"></script>

  <!-- For Notifications -->
  <script src="assets/js/notification.js"></script>

  <!-- GRAPH -->
  <script src="plugins/jquery-2.2.4.min.js"></script>
  <script src="plugins/jquery.appear.min.js"></script>
  <script src="plugins/jquery.easypiechart.min.js"></script> 
  <script>
    var refresh = setInterval(
  function(){
    $('#bell1').load('<?php echo url('/noti');?>').fadeIn("fast");
  },1);
    'use strict';

var $window = $(window);

function run()
{
  var fName = arguments[0],
    aArgs = Array.prototype.slice.call(arguments, 1);
  try {
    fName.apply(window, aArgs);
  } catch(err) {
     
  }
};
 
/* chart
================================================== */
function _chart ()
{
  $('.b-skills').appear(function() {
    setTimeout(function() {
      $('.chart').easyPieChart({
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#369670',
        trackColor: '#fff',
        scaleColor: false,
        lineWidth: 21,
        trackWidth: 21,
        size: 250,
        lineCap: 'round',
        onStep: function(from, to, percent) {
          this.el.children[0].innerHTML = Math.round(percent);
        }
      });
    }, 150);
  });
};
 

$(document).ready(function() {
  
  run(_chart);
  
    
});


    
    </script>
 
</body>

</html>