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
    body{
      overflow-x: hidden;
      z-index: 1;
    }
    .package-card {
      z-index: 333;
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
  <div class="page-wrapper">
      <!-- header-section start  -->
      @include('admin.header')

  <!-- header-section end  -->
    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/invest.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            
            <h2 class="page-title">All Investment Requests</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Investment Requests</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->


    <!-- package section start -->
    <section class="pt-120 pb-120">
      <div class="container">
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
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
            
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Requests</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div><!-- row end -->
<!--    
        <div class="row justify-content-center mb-none-30 my-5 container col-lg-6">
          <div class=" mb-30"style="width: 90%;">
            <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-.png">
                <h4 class="package-card__title base--color mb-2">In USDT TRC20 </h4>
                  
              <div class="package-card__range"> <span class="text-small">Charges : 4%</span></div>
           
                <button  class="cmn-btn mt-4"data-toggle="modal" data-target="#usdModal">Request</button>
            </div>
          </div>
          </div> -->
          <div class="row mt-50 mb-50">
            <div class="col-lg-12">
              <div class="table-responsive--md p-0">
                <table class="table style--two white-space-nowrap">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Email</th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Recieved</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
          
                   @foreach($investmentrequests as $req)
                    <tr>
                      <td data-label="Date">{{$req->created_at->toDateString()}}</td>
                      <td data-label="Email">
                        <span class="base--color">{{$req->email}}</span>
                      </td>
                      <td data-label="Name">
                        <span>{{$req->name}}</span>
                      </td>
                      <td data-label="Name">
                        <span>{{$req->amount}}</span>
                      </td>
                      <td data-label="Name">
                        <span>{{$req->tamount}}</span>
                      </td>
           
                      <td data-label="Actions"> 
                        <a href="{{route('editinvestmentrequest',$req->id)}}" class="btn-outline-warning btn" >View Request</a>
                        <a   onclick="return confirm('Are you sure You Want to delete this Request?')" href="{{route('deleteinvestmentrequest',$req->id)}}" class="btn btn-outline-danger">Delete</a> 
                      </td>
                    </tr>
                    @endforeach
                
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- row end -->
      </div>
    </section>
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <!-- package section end  -->
<style>
  .easypaisa{
    width: 7px;
    height: 10px;
    background-color: greenyellow;
    border-radius: 50%;
    
  }
  .bankTransfer{
    width: 7px;
    height: 10px;
    background-color: blue;
    border-radius: 50%; 
  }
  .jazzCash{
    width: 7px;
    height: 10px;
    background-color: red;
    border-radius: 50%; 
  }
  .uPaisa{
    width: 7px;
    height: 10px;
    background-color: yellow;
    border-radius: 50%; 
  }
</style>
    <h2 class="section-title text-center"><span class="font-weight-normal">Invest In</span> <b class="base--color">P2P</b></h2>
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
         
            <button  class="cmn-btn mt-4"data-toggle="modal" data-target="#buyModal">View Request</button>
          </div><!-- package-card end -->
        </div>
        </div>
    </div>
    @endforeach

    <!-- MOdal Starts -->
    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="true">
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
        
            <div class="page-content page-container" id="page-content">
              <div class="padding">
                  <div class="container d-flex justify-content-center">
          <div class="">
                      <div class="card card-bordered">
                        <div class="card-header">
                          <h4 class="card-title"><strong>Chat with Abdul Qasim</strong> <br>Send only screenshots</h4>
                      
                        </div>
          
          
                        <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                          <div class="media media-chat">
                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <div class="media-body">
                              <p>Hi</p>
                              <p>How are you ...???</p>
                              <p>What are you doing tomorrow?<br> Can we come up a bar?</p>
                              <p class="meta"><time datetime="2018">23:58</time></p>
                            </div>
                          </div>
          
                          <div class="media media-meta-day">Today</div>
          
                          <div class="media media-chat media-chat-reverse">
                            <div class="media-body">
                              <p>Hiii, I'm good.</p>
                              <p>How are you doing?</p>
                              <p>Long time no see! Tomorrow office. will be free on sunday.</p>
                              <p class="meta"><time datetime="2018">00:06</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat">
                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <div class="media-body">
                              <p>Okay</p>
                              <p>We will go on sunday? </p>
                              <p class="meta"><time datetime="2018">00:07</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat media-chat-reverse">
                            <div class="media-body">
                              <p>That's awesome!</p>
                              <p>I will meet you Sandon Square sharp at 10 AM</p>
                              <p>Is that okay?</p>
                              <p class="meta"><time datetime="2018">00:09</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat">
                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <div class="media-body">
                              <p>Okay i will meet you on Sandon Square </p>
                              <p class="meta"><time datetime="2018">00:10</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat media-chat-reverse">
                            <div class="media-body">
                              <p>Do you have pictures of Matley Marriage?</p>
                              <p class="meta"><time datetime="2018">00:10</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat">
                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <div class="media-body">
                              <p>Sorry I don't have. i changed my phone.</p>
                              <p class="meta"><time datetime="2018">00:12</time></p>
                            </div>
                          </div>
          
                          <div class="media media-chat media-chat-reverse">
                            <div class="media-body">
                              <p>Okay then see you on sunday!!</p>
                              <p class="meta"><time datetime="2018">00:12</time></p>
                            </div>
                          </div>
          
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
                
                       <form action=""class="my-4">
                        <div class="d-flex justify-content-between px-5">
                          <p>Send USDT</p>
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="200">
                          </div>
                        </div>
                     <button class="btn btn-warning">Pending</button>
                     <button class="btn btn-success">Submit</button>
                       </form>
                       <div class="container my-5">
                        <h2 class="text-center">Screenshot</h2>
                        <div class="screenshot-box m-auto"></div>
                       </div>
                       <button class="btn btn-danger">Delete</button>
                    </div>
                    </div>
                    </div>
                    </div>
          </div>
  
        </div>
      </div>
    </div>
    <!-- Modal Ends -->
    <link rel="stylesheet" href="assets/css/chat.css">


  <!-- USD Modal -->
  <div class="modal fade" id="usdModal" tabindex="-1" role="dialog" aria-labelledby="usdModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="    border: 2px solid gold;
          color: white;
          background: #57502d;">
        <div class="modal-header">
          <h5 class="modal-title" id="usdModalLabel">Invest in USDT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="justify-content-start">
            <strong class="d-block text-center">User Details</strong>
            <hr class="border">

            <div class="d-flex justify-content-between px-5">
              <p>Amount</p>
              <div class="form-group">
                <input type="text"disabled="disabled"style="background:transparent;" class="form-control" id="exampleInputPassword1" placeholder="E.g.770">
              </div>
            </div>
          
            <div class="d-flex justify-content-between px-5">
              <p>Trx Id</p>
              <div class="form-group">
                <input type="text"disabled="disabled"style="background:transparent;" class="form-control" id="exampleInputPassword1" placeholder="E.g.03535938493">
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
            <div class="screenshot-box m-auto"></div>
          </div>
          <div class="container mt-4">
            <div class="form-group">
              <input type="text"style="background:transparent;" class="form-control" id="exampleInputPassword1" placeholder="Send USDT">
            </div>
            <button class="btn btn-warning">Pending</button>
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
  </body>
</html> 