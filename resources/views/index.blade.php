<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="{{route('index')}}"><img src="assets/images/logo.png" alt="site-logo"></a>
          <ul class="account-menu mobile-acc-menu">
            <li class="icon">
              <a href="{{route('login')}}"><i>Login</i></a>
              <a href="{{route('register')}}"><i>SignUp</i></a>
            </li>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li> <a href="#">Home</a></li>
              <li> <a href="#plans">Plans</a></li>
              <li><a href="#faqs">FAQs</a></li>
              <!-- <li class="menu_has_children"><a href="#0">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog Posts</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
              </li> -->
         
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                <li class="icon">
                  @if(Auth::guest())
                  <a href="{{route('login')}}"><i>Login</i></a>
                  <a href="{{route('register')}}"><i>SignUp</i></a>
                  @else
                  <a href="{{route('dashboard')}}"><i>Dashboard</i></a>
                  @endif
                </li>
              </ul> 
              <!-- <select class="select d-inline-block w-auto ml-xl-3">
                <option>Eng</option>
                <option>Ban</option>
                <option>Hin</option>
              </select> -->
            </div>
          </div> 
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    <!-- hero start -->
    <section class="hero bg_img" data-background="assets/images/orcs.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-8">
            <div class="hero__content">
              <h2 class="hero__title"><span class="text-white font-weight-normal">Invest for Future in Stable Platform</span> <b class="base--color">and Make Fast Money</b></h2>
              <p class="text-white f-size-18 mt-3">Invest in an Industry Leader, Professional, and Reliable Company. We provide you with the most necessary features that will make your experience better. Not only we guarantee the fastest and the most exciting returns on your investments, but we also guarantee the security of your investment.</p>
              <a href="#0" class="cmn-btn text-uppercase font-weight-600 mt-4">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->



    <!-- about section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/orcs1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
              <p>We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.</p>
              <p class="mt-4">Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.</p>
              <a href="#0" class="cmn-btn mt-4">MORE INFO</a>
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- package section start -->
    <section id="plans"class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Payment</span> <b class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          @foreach($plans as $plan)
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="{{asset('/storage/'.$plan->image)}}">
              <h4 class="package-card__title base--color mb-2">{{$plan->name}}</h4>
              <ul class="package-card__features mt-4">
                <li>Profit Percentage {{$plan->tper}}% - {{$plan->eper}}%</li>
                <li>Every Month</li>
                <li>For {{$plan->months}} Months</li>
                <li>Total {{$plan->total}}% </li>
              </ul>
              <div class="package-card__range mt-5 base--color">${{$plan->min}} - @if($plan->max==100000000) Unlimited @else ${{$plan->max}} @endif</div>
        
            </div><!-- package-card end -->
          </div>
          @endforeach
         
          
          </div>
        </div><!-- row end -->
        <!-- <div class="row mt-50">
          <div class="col-lg-12 text-center">
            <a href="#0" class="cmn-btn">View All Packages</a>
          </div>
        </div> -->
      </div>
    </section>
    <!-- package section end  -->

    <!-- choose us section start -->
    <section class="pt-120 pb-120 overlay--radial bg_img" data-background="assets/images/bg/bg-3.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b class="base--color">BVdox</b></h2>
              <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="lar la-copy"></i>
                </div>
                <h4 class="choose-card__title base--color">Legal Company</h4>
              </div>
              <p>Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-lock"></i>
                </div>
                <h4 class="choose-card__title base--color">High reliability</h4>
              </div>
              <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-user-lock"></i>
                </div>
                <h4 class="choose-card__title base--color">Anonymity</h4>
              </div>
              <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-shipping-fast"></i>
                </div>
                <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
              </div>
              <p>You will get your withdrawal within 24 Hours.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-users"></i>
                </div>
                <h4 class="choose-card__title base--color">Referral Program</h4>
              </div>
              <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-headset"></i>
                </div>
                <h4 class="choose-card__title base--color">24/7 Support</h4>
              </div>
              <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty..</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-server"></i>
                </div>
                <h4 class="choose-card__title base--color">Dedicated Server</h4>
              </div>
              <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="fab fa-expeditedssl"></i>
                </div>
                <h4 class="choose-card__title base--color">SSL Secured</h4>
              </div>
              <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
            </div><!-- choose-card end -->
          </div>
          <div class="col-xl-4 col-md-6 mb-30">
            <div class="choose-card border-radius--5">
              <div class="choose-card__header mb-3">
                <div class="choose-card__icon">
                  <i class="las la-shield-alt"></i>
                </div>
                <h4 class="choose-card__title base--color">DDOS Protection</h4>
              </div>
              <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
            </div><!-- choose-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- choose us section end  -->

   

    <!-- how work section start -->
    <section class="pt-120 pb-120 bg_img" data-background="assets/images/orcs2.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color">BVdox</b> <span class="font-weight-normal">Works</span></h2>
              <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-user base--color"></i>
                <span class="step-number">01</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Create Account</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-hand-holding-usd base--color"></i>
                <span class="step-number">02</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Invest To Plan</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-wallet base--color"></i>
                <span class="step-number">03</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Get Profit</h4>
              </div>
            </div><!-- work-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- how work section end  -->

    
    <!-- faq section start -->
    <section id="faqs" class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Frequently Asked</span> <b class="base--color">Questions</b></h2>
              <p>We answer some of your Frequently Asked Questions regarding our platform. If you have a query that is not answered here, Please contact us.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion cmn-accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="las la-question-circle"></i>
                      <span>When can I deposit/withdraw from my Investment account?</span>
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Deposit and withdrawal are available for at any time. Be sure, that your funds are not used in any ongoing trade before the withdrawal. The available amount is shown in your dashboard on the main page of Investing platform.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="las la-question-circle"></i>
                      <span>How do I check my account balance?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    You can see this anytime on your accounts dashboard.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="las la-question-circle"></i>
                      <span>I forgot my password, what should I do?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Visit the password reset page, type in your email address and click the `Reset` button. Visit the password reset page, type in your email address and click the `Reset` button.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <i class="las la-question-circle"></i>
                      <span>How will I know that the withdrawal has been successful?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    You will get an automatic notification once we send the funds and you can always check your transactions or account balance. Your chosen payment system dictates how long it will take for the funds to reach you.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <i class="las la-question-circle"></i>
                      <span>How much can I withdraw?</span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    You can withdraw the full amount of your account balance minus the funds that are used currently for supporting opened positions and minimum withdrawal amount is $15 according to BVdox market price
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- faq section end -->


    <!-- testimonial section start -->
    <!-- <section class="pt-120 pb-120 bg_img overlay--radial" data-background="assets/images/bg/bg-77.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b class="base--color">About Us</b></h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia? Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.</p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="assets/images/testimonial/1.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Fahaddevs</h6>
                      <span class="designation">CEO of fahaddevs</span>
                      <div class="ratings">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.</p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="assets/images/testimonial/2.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Alina</h6>
                      <span class="designation">CTO of fahaddevs</span>
                      <div class="ratings">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                      </div>
                    </div>
                  </div>
                </div>              </div>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.</p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="assets/images/testimonial/3.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Amir Khan</h6>
                      <span class="designation">COO of fahaddevs</span>
                      <div class="ratings">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="testimonial-card__content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.</p>
                  </div>
                  <div class="testimonial-card__client">
                    <div class="thumb">
                      <img src="assets/images/testimonial/4.jpg" alt="image">
                    </div>
                    <div class="content">
                      <h6 class="name">Zohir Khan</h6>
                      <span class="designation">Manager of fahaddevs</span>
                      <div class="ratings">
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- testimonial section end -->

    <!-- team section start -->
    <!-- <section class="pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-5.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Our Expert</span> <b class="base--color">Team Members</b></h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia? Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/1.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Fahad Bin Faiz</h4>
                <span class="designation">CEO</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/2.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Danial K.</h4>
                <span class="designation">CTO</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/3.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Lew Son</h4>
                <span class="designation">Marketing Head</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/4.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Tend z Joe</h4>
                <span class="designation">Designer</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/5.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Sam Joe</h4>
                <span class="designation">Developer</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/6.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Alex Joe</h4>
                <span class="designation">UX Expert</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/7.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Juna Sun</h4>
                <span class="designation">SEO Expert</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="team-card">
              <div class="team-card__thumb">
                <img src="assets/images/investor/8.jpg" alt="image">
              </div>
              <div class="team-card__content">
                <h4 class="name mb-1">Profed Laun</h4>
                <span class="designation">Manager</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- team section end -->


    <!-- data section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Our Latest</span> <b class="base--color">Transaction</b></h2>
              <p>Here is the log of the most recent transactions including withdraw and deposit made by our users.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="deposit-tab" data-toggle="tab" href="#deposit" role="tab" aria-controls="deposit" aria-selected="true">Latest Deposit</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">Latest Withdraw</a>
              </li>
            </ul>

            <div class="tab-content mt-4" id="transactionTabContent">
              <div class="tab-pane fade show active" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                <div class="table-responsive--sm">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Gateway</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/1.jpg" alt="image"></div>
                            <span>fahaddevs</span>
                          </div>
                        </td>
                        <td data-label="Date">Nov 22, 2022</td>
                        <td data-label="Amount">$ 5000</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/2.jpg" alt="image"></div>
                            <span>Jon Tulsa</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 11, 2022</td>
                        <td data-label="Amount">$ 1000</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/3.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 10000</td>
                        <td data-label="Gateway">Stripe Storefront</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/6.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/7.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/8.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                <div class="table-responsive--md">
                  <table class="table style--two">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Gateway</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/1.jpg" alt="image"></div>
                            <span>fahaddevs</span>
                          </div>
                        </td>
                        <td data-label="Date">Nov 22, 2022</td>
                        <td data-label="Amount">$ 5000</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/2.jpg" alt="image"></div>
                            <span>Jon Tulsa</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 11, 2022</td>
                        <td data-label="Amount">$ 1000</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/3.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 10000</td>
                        <td data-label="Gateway">Stripe Storefront</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/6.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/7.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                      <tr>
                        <td data-label="Name">
                          <div class="user">
                            <div class="thumb"><img src="assets/images/investor/8.jpg" alt="image"></div>
                            <span>Thomas Okeyson</span>
                          </div>
                        </td>
                        <td data-label="Date">Dec 12, 2022</td>
                        <td data-label="Amount">$ 6500</td>
                        <td data-label="Gateway">Stripe Hosted</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- tab-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- data section end -->


    <!-- top investor section start -->
    <!-- <section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Our Top</span> <b class="base--color">Investor</b></h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia? Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/1.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Fahad Bin Faiz</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/2.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Danial K</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/3.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Lew Son</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/4.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Tend z Joe</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/5.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Sam Joe</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/6.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Alex Joe</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/7.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Juna Sun</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="investor-card border-radius--5">
              <div class="investor-card__thumb bg_img background-position-y-top" data-background="assets/images/investor/8.jpg"></div>
              <div class="investor-card__content">
                <h6 class="name">Profed Laun</h6>
                <span class="amount f-size-14">Investment - $1,500,355</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- top investor section end -->

    <!-- payment brand section start -->
    <!-- <section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Payment We</span> <b class="base--color">Accept</b></h2>
              <p>We accept all major cryptocurrencies and fiat payment methods to make your investment process easier with our platform.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="payment-slider">
              <div class="single-slide">
                <div class="brand-item d-flex flex-column">
                  <img src="assets/images/btcicon.webp" alt="image">
                  Bitcoin
                </div>
              </div>
              <div class="single-slide">
                <div class="brand-item  d-flex flex-column">
                  <img src="assets/images/usdtrc20icon.png" alt="image">
                  USDT TRC20
                </div>
              </div>
          
              <div class="single-slide">
                <div class="brand-item  d-flex flex-column">
                  <img src="assets/images/etheriumicon.png" alt="image">
                  Etherium
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- payment brand section end -->



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
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
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
  </body>
</html> 