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
              <div class="account-card__header bg_img overlay--one" data-background="{{asset('assets/images/bg/bg-6.jpg')}}">
                <h2 class="section-title">Edit user <span class="base--color">Details</span></h2>
                @if(Session::has('errors'))
                <p class="alert alert-danger m-5">    {{ implode('', $errors->all(':message')) }}
                </p>
                @endif
                @if (Session::has('message'))
                <div class="alert alert-success m-5">{{ Session::get('message') }}</div>
                @endif
              </div>
              <div class="account-card__body">
                <form method="POST" action="{{ route('users.update',$user) }}">
                  @csrf
                  {{method_field('PUT')}}
                  <div class="row mb-none-30 justify-content-center">
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Deposit Wallet Balance</span>
                          <div class="form-group">
                            <input type="text" min="0" value="{{$user->investment}}" name="investment" class="form-control border" placeholder="Deposit Wallet Balance" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-dollar-sign"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Lifetime Investment</span>
                          <div class="form-group">
                            <input type="text" min="0" value="{{$user->ltinvestment}}" name="ltinvestment" class="form-control border" id="exampleInputPassword1" placeholder="Lifetime Investment" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-dollar-sign"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Your Profit</span>
                          <div class="form-group">
                            <input type="text" value="{{$user->profit}}" name="profit" class="form-control border" id="exampleInputPassword1" placeholder="Profit" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-wallet"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Current Package</span>
                          <div class="form-group">
                              <select name="package" class="form-control border">
                                <option value="{{$user->package}}">@if($user->package==NULL)No Package Yet @else{{$user->package}}@endif</option>
                                @if($user->package!=NULL)<option value="">Remove Package</option>@endif
                                @foreach($plans as $plan)
                                @if($user->package!=$plan->name)
                                <option value="{{$plan->name}}">{{$plan->name}}</option>
                                @endif
                                @endforeach
                              </select>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-cubes "></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
      
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Lifetime Withdrawal</span>
                          <div class="form-group">
                            <input type="text" value="{{$user->ltwithdrawal}}" name="ltwithdrawal" class="form-control border" id="exampleInputPassword1" placeholder="Lifetime Withdrawal" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-cloud-download-alt"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Reward Income</span>
                          <div class="form-group">
                            <input type="text" min="0" value="{{$user->rewardincome}}" name="rewardincome" class="form-control border" id="exampleInputPassword1" placeholder="Reward Income" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Referral Earnings</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->referralearnings}}" name="referralearnings" class="form-control border" id="exampleInputPassword1" placeholder="Referral Earnings" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
              
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">My Referrals</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->referrals}}" name="referrals" class="form-control border" id="exampleInputPassword1" placeholder="Total Team Members" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>

                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Total team members</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->totalreferrals}}" name="totalreferrals" class="form-control border" id="exampleInputPassword1" placeholder="Total Team Members" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Total team investment</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->teaminvestment}}" name="teaminvestment" class="form-control border" id="exampleInputPassword1" placeholder="Total Team Investment" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Team Profit Bonus</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->teamprofitbonus}}" name="teamprofitbonus" class="form-control border" id="exampleInputPassword1" placeholder="Team Profit Bonus" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Your Ownership(%)</span>
                          <div class="form-group">
                            <input type="text" value="{{$user->ownership}}" name="ownership" class="form-control border" id="exampleInputPassword1" placeholder="Ownership">
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-user-friends"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Lifetime Earnings</span>
                          <div class="form-group">
                            <input type="text"  value="{{$user->ltearnings}}" name="ltearnings" class="form-control border" id="exampleInputPassword1" placeholder="Lifetime Earnings" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-credit-card"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                    <div class="col-xl-12 col-sm-6 mb-30">
                      <div class="d-widget d-flex flex-wrap">
                        <div class="col-8">
                          <span class="caption">Joining Date </span>
                          <div class="form-group">
                            <input type="date" value="{{$user->created_at->toDateString()}}" name="created_at" class="form-control border" id="exampleInputPassword1" placeholder="Joining Date" required>
                          </div>
              
                        </div>
                        <div class="col-4">
                          <div class="icon ml-auto">
                            <i class="las la-credit-card"></i>
                          </div>
                        </div>
                      </div><!-- d-widget-two end -->
                    </div>
                  </div><!-- row end -->
                  <br>

                  <button class="cmn-btn" type="submit">Submit</button>

                </form>
                  <section>
                    <br>
                    <h2 class="text-center my-4"><span class="">Add</span> <b class="base--color">History</b></h2>
                    <div class="row mt-50 overflow-x">
                        <div class="col-lg-12">
                          
                        <form action="{{route('add-history')}}" method="post">
                                    @csrf
                          <div class="table-responsive--lg p-0">
                            <table class="table style--two white-space-nowrap">
                              <thead>
                                <tr>
                                  <th>Date</th>
                                  <th>Amount</th>
                                  <th>Bank Name</th>
                                  <th>Account Name</th>
                                  <th>Account Number</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td data-label="Date">   <div class="form-group">
                                    <input type="date" name="date" class="form-control border" id="exampleInputPassword1" placeholder="Date" required>
                                  </div></td>  
                                  <td data-label="Amount">
                                    <span class="text-success">   <div class="form-group">
                                        <input type="text" name="amount" class="form-control border" id="exampleInputPassword1" placeholder="Amount" required>
                                      </div></span>
                                  </td>
                                  <td data-label="Bank Name">     <div class="form-group">
                                        <input type="text" name="bankname" class="form-control border" id="exampleInputPassword1" placeholder="Bank Name" required>
                                      </div>
                                  </td>
                                  <td data-label="Account Name">   <div class="form-group">
                                    <input type="text" name="accountname" class="form-control border" id="exampleInputPassword1" placeholder="Account HolderName" required>
                                  </div></td>
                                  <td data-label="Account Details">   <div class="form-group">
                                    <input type="text" name="accountnumber" class="form-control border" id="exampleInputPassword1" placeholder="Account Number" required>
                                    <input type="hidden" name="id" value="{{$user->id}}" class="form-control border" id="exampleInputPassword1">
                                  </div></td>
                                </tr>

                              </tbody>
                            </table>

                            <button class="cmn-btn">Add History</button>
                          </div>
                          </form>

                        </div>
                      </div><!-- row end -->
                </section>
                  
<div class="container my-4 ">
<h4 for=""class="text-center">Send Notification</h4>
    <form class="mt-4">
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" placeholder="E.g.Withdrawal Successful">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="E.g.Your withdrawal of 500rs has been successfully send to your account "></textarea>
      
      </div>

      <div class="mt-3">
        <a class="text-white cmn-btn" href="#">Submit</a> 
      </div>
    </form>
</div>

              <form action="" method="post">
                @csrf
                  <section>
                
                    <div class="form-group mt-5">
                        <label for="">Edit Username</label>
                        <input type="text" value="{{$user->name}}" name="name"  class="form-control border" id="exampleInputPassword1" placeholder="Username" required>
                      </div>
                </section>
                  <section>
               
                  <div class="form-group">
                    <label for="">Set Profit Percentage</label>
                    <input type="number" min="0" name="sper" class="form-control border" id="exampleInputPassword1" placeholder="22%">
                  </div>
                </section>
                  <div class="mt-3">
              <a class="text-white cmn-btn" href="">Submit</a> 
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