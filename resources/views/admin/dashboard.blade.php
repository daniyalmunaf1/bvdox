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
    
    <!-- header-section end  -->
@include('admin.header')
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/dashboard.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Hi Admin</h2>
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
      <form enctype="multipart/form-data" method="POST" action="{{ route('update-announcement') }}"id="" >
        @csrf
      <textarea name="message" id="" cols="30" rows="" class="form-control" style="background:transparent;"
        placeholder="Write Announcements">{{$announcement->message}}</textarea>
        <div class="mt-3 col text-center">
        <button class="text-white cmn-btn" >Submit</button>
      </div>
      </form>

    </div>
    
    <div class="container my-4">
      <h2 class="section-title text-center"><span class="font-weight-normal">Edit USDT </span> <b class="base--color">
          Price</b></h2>
      <form enctype="multipart/form-data" method="POST" action="{{ route('update-usdtprice') }}"id="" >
        @csrf
      <div class="form-group my-4 col-lg-12">
        <input type="number" class="form-control mx-auto" min='0' name="usdtprice" placeholder="Enter Value" value="{{$detail->usdtprice}}" style="max-width:300px">
      </div>
      <div class="mt-3 col text-center">
        <button class="text-white cmn-btn" >Submit</button>
      </div>
      </form>
    </div>
    <div class="form-group my-4 col-lg-12">
      <label style="font-size: 20px;" class="text-center d-block my-4" for="minim">Edit Minimum Withdrawal</label>
      <form enctype="multipart/form-data" method="POST" action="{{ route('update-minwithdrawal') }}"id="" >
        @csrf
      <div class="form-group my-4 col-lg-12">
        <input type="number" class="form-control mx-auto" min='0' name="minwithdrawal" placeholder="Enter Value" value="{{$detail->minwithdrawal}}" style="max-width:300px">
      </div>
      <div class="mt-3 col text-center">
        <button class="text-white cmn-btn" >Submit</button>
      </div>
      </form>
    <!-- <div class="mt-3 col text-center">
      <div class="form-group my-4 col-lg-12">
        <label style="font-size: 20px;" class="text-center d-block my-4" for="minim">Edit Minimum Withdrawal</label>
        <input type="number" id="minim" class="form-control mx-auto" placeholder="240" style="max-width:300px">
      </div>
      <a class="text-white cmn-btn" href="#">Submit</a> -->
      <div class="form-group my-4 col-lg-12">
        <label style="font-size: 20px;" class="text-center d-block my-4" for="minim">Set company turnover</label>
        <form enctype="multipart/form-data" method="POST" action="{{ route('update-companyTO') }}"id="" >
        @csrf
      <div class="form-group my-4 col-lg-12">
        <input type="number" class="form-control mx-auto" min='0' name="companyTO" placeholder="Enter Value" value="{{$detail->companyTO}}" style="max-width:300px">
      </div>
      <div class="mt-3 col text-center mb-3">
        <button type="submit" class="text-white cmn-btn" >Submit</button>
      </div>
      </form>
    <div class="container my-4 col m-auto d-block">
      <h2 class="section-title text-center" style="font-size:24px;"><span class="font-weight-normal">Withdrawal times
        </span> <b class="base--color"> before Referral</b></h2>
        <form enctype="multipart/form-data" method="POST" action="{{ route('update-wtbr') }}"id="" >
        @csrf
      <div class="form-group my-4 col-lg-12">
        <input type="number" min="0" name="wtbr" value="{{$detail->wtbr}}" class="form-control mx-auto"  style="max-width:300px">
      </div>
      <div class="mt-3 col text-center mb-3">
        <button type="submit" class="text-white cmn-btn" >Submit</button>
      </div>
      </form>
      @if($detail->activate==1)
      <div class="mt-3 col text-center">
        <button class="text-white btn btn-outline-warning">Activated</button> 
        <a href="{{ route('deactivate') }}" class="btn btn-outline-danger">Deactivate</a>
      </div>
      @else
      <div class="mt-3 col text-center">
        <a href="{{ route('activate') }}" class="text-white btn btn-outline-warning">Activate</a>  
        <button class="btn btn-outline-danger">Deactivated</button>
      </div>
      @endif
    </div>
    <h2 class="section-title text-center mt-5"><span class="font-weight-normal">Accounts</span> <b
        class="base--color">Statistics</b></h2>
    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12">
            <div class="row mb-none-30 justify-content-center">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Users</span>
                    <h4 class="currency-amount">{{$total}}</h4>
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
                    <span class="caption">Users in bronze</span>
                    <h4 class="currency-amount">{{$bronze}}</h4>
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
                    <span class="caption">Users in Silver</span>
                    <h4 class="currency-amount">{{$silver}}</h4>
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
                    <span class="caption">Users in Gold</span>
                    <h4 class="currency-amount">{{$gold}}</h4>
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
                    <span class="caption">Users in Platinum</span>
                    <h4 class="currency-amount">{{$platinum}}</h4>
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
                    <span class="caption">Users in Ruby</span>
                    <h4 class="currency-amount">{{$ruby}}</h4>
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
                    <span class="caption">Users in Diamond</span>
                    <h4 class="currency-amount">{{$diamond}}</h4>
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
                    <span class="caption">Investment Requests</span>
                    <h4 class="currency-amount">{{$investmentrequests}}</h4>
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
                    <span class="caption">Withdrawal Requests</span>
                    <h4 class="currency-amount">{{$withdrawalrequests}}</h4>
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
                    <span class="caption">Total Investment</span>
                    <h4 class="currency-amount">{{$detail->totalInvestment}}</h4>
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
                    <span class="caption">Total
                      Withdrawal</span>
                    <h4 class="currency-amount">{{$detail->totalWithdrawal}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            </div><!-- row end -->
            <!--         
            <h2 class="section-title text-center pt-5"><span class="font-weight-normal">Transactions</span> <b
                class="base--color">History</b></h2> -->
            <!-- <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Details</th>
                        <th>Post Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2022</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>row end -->
          </div>
        </div>
      </div>
    </div>
    <!-- dashboard section end -->

    <div class="container mb-4">
      <h2 class="section-title text-center"><span class="font-weight-normal">Send</span> <b class="base--color">
          notification</b> to all</h2>
      <form class="mt-4">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="E.g.Withdrawal Successful">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="" id="" cols="30" rows="5" class="form-control"
            placeholder="E.g.Your withdrawal of 500rs has been successfully send to your account "></textarea>

        </div>

        <div class="mt-3">
          <a class="text-white cmn-btn" href="#">Submit</a>
        </div>
      </form>
    </div>


    <div class="container my-4">
      <!-- package section start -->
      <section id="business" class="pt-120 pb-120">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <div class="section-header">
                <h2 class="section-title text-center"><span class="font-weight-normal">Edit </span> <b
                    class="base--color"> Plans</b></h2>
              </div>
            </div>
          </div><!-- row end -->
          <style>
                          input[type='number'] {
                  -moz-appearance:textfield;
              }

              input::-webkit-outer-spin-button,
              input::-webkit-inner-spin-button {
                  -webkit-appearance: none;
              }
          </style>
          <div class="row justify-content-center mb-none-30">
          @foreach($plans as $plan)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
              <div class="package-card text-center bg_img" data-background="{{asset('/storage/'.$plan->image)}}">
                <h4 class="package-card__title base--color mb-2">{{$plan->name}}</h4>
                <ul class="package-card__features mt-4">
                  <form action="{{route('submitplan',$plan->id)}}" method="POST">
                    @csrf
                    <li>
                      <div class=" px-5">
                        <p>Profit Percentage</p>
                        <div class="form-group d-flex justify-content-between">
                          <input type="number" min="0" class="form-control" id="" value="{{$plan->tper}}" placeholder="%" name="tper" required>

                          <input type="number" min="0" class="form-control" id="" value="{{$plan->eper}}" placeholder="%" name="eper" required>
                        </div>
                        </div></li>
                    <li>Every Month</li>
                    <li> For Months <div class="form-group d-flex justify-content-between">
                        <input type="number" min="0" value="{{$plan->months}}" name="months" class="form-control" id="" placeholder="Enter Months" required>
                      </div>
                    </li>
                    <li>Total {{$plan->total}}% </li>
                    <li>
                      <p class="my-2">Set profit Percentage</p>
                      <input type="number" min="0" class="form-control" id="" value="{{$plan->sper}}" placeholder="%" name="sper" required>
                    <li>
                      <Button type="submit" class="cmn-btn">Submit</Button>
                    </li>
                  </form>
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
  </div>
  <section>

    <h2 class="text-center my-4"><span class="">Edit Team Referral </span> <b class="base--color">Percentage</b></h2>
    <div class="row mt-50 overflow-x container">
      <div class="col-lg-12">
        <div class="table-responsive--lg p-0">
          <form enctype="multipart/form-data" method="POST" action="{{ route('update-rp') }}"id="" >
            @csrf
          <table class="table style--two white-space-nowrap">
            <thead>
              <tr>
                <th>Level 1</th>
                <th>Level 2</th>
                <th>Level 3</th>
                <th>Level 4</th>
                <th>Level 5</th>
                <th>Level 6</th>
                <th>Level 7</th>
                <th>Level 8</th>
                <th>Level 9</th>
                <th>Level 10</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Level 1">
                  <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl1" value="{{$rp->lvl1}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 2">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl2" value="{{$rp->lvl2}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 3">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl3" value="{{$rp->lvl3}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 4">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl4" value="{{$rp->lvl4}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 5">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl5" value="{{$rp->lvl5}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 6">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl6" value="{{$rp->lvl6}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 7">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl7" value="{{$rp->lvl7}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 8">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl8" value="{{$rp->lvl8}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 9">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl9" value="{{$rp->lvl9}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 10">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl10" value="{{$rp->lvl10}}" placeholder="Enter Value" required>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
          <button class="cmn-btn my-3">Submit</button>
          </form>
        </div>
      </div>
    </div><!-- row end -->
  </section>
  <section>

    <h2 class="text-center my-4"><span class="">Edit Team Profit Share</span> <b class="base--color">Percentage</b></h2>
    <div class="row mt-50 overflow-x container">
      <div class="col-lg-12">
        <div class="table-responsive--lg p-0">
          <form enctype="multipart/form-data" method="POST" action="{{ route('update-psp') }}"id="" >
                            @csrf
          <table class="table style--two white-space-nowrap">
            <thead>
              <tr>
                <th>Level 1</th>
                <th>Level 2</th>
                <th>Level 3</th>
                <th>Level 4</th>
                <th>Level 5</th>
                <th>Level 6</th>
                <th>Level 7</th>
                <th>Level 8</th>
                <th>Level 9</th>
                <th>Level 10</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Level 1">
                  <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl1" value="{{$psp->lvl1}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 2">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl2" value="{{$psp->lvl2}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 3">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl3" value="{{$psp->lvl3}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 4">
                    <div class="form-group">
                    <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl4" value="{{$psp->lvl4}}" placeholder="Enter Value" required>
                    </div>
                  </span>
                </td>
                <td data-label="Level 5">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl5" value="{{$psp->lvl5}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 6">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl6" value="{{$psp->lvl6}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 7">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl7" value="{{$psp->lvl7}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 8">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl8" value="{{$psp->lvl8}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 9">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl9" value="{{$psp->lvl9}}" placeholder="Enter Value" required>
                  </div>
                </td>
                <td data-label="Level 10">
                  <div class="form-group">
                  <input type="text" class="form-control border" id="exampleInputPassword1" name="lvl10" value="{{$psp->lvl10}}" placeholder="Enter Value" required>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <button class="cmn-btn my-3">Submit</button>
          </form>
        </div>
      </div>
    </div><!-- row end -->
  </section>

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


