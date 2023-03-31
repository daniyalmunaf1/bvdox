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
              <li>Users Management</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    @if (Session::has('message'))
            <div class="alert alert-success m-5">{{ Session::get('message') }}</div>
            @endif
    <div class="form-group mt-5 container col-lg-6">
      <label>Search by email</label>
      <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="E.g.asim@gmail.com">
    </div>
        
            <h2 class="section-title text-center pt-5"><span class="font-weight-normal">Users</span> <b
                class="base--color">list</b></h2>
            <div class="row mt-50 mb-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap" id="myTable">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Name</th>
                  
                        <th>Investment</th>
                        <th>Plan</th>
                        <th>Profit</th>
                        <th>Referrals</th>
                       
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td data-label="Date">{{$user->created_at->toDateString()}}</td>
                        <td data-label="Email">
                          <span class="base--color">{{$user->email}}</span>
                        </td>
                        <td data-label="Name">
                          <span>{{$user->name}}</span>
                        </td>
                 
                        <td data-label="Investment">
                          <span class="text-success"> ${{$user->investment}}</span>
                        </td>
                        <td data-label="Plan">{{$user->package}}</td>
                          <td data-label="Profit">
                          <span class="text-success">${{$user->profit}}</span>
                        </td>
                        <td data-label="Referrals">{{$user->referrals}}</td>
                      
                        <td data-label="Actions"> 
                        <a href="{{route('users.edit',$user->id)}}" style="float: left;"> <button class="btn btn-outline-warning">Edit</button></a> 
                        <form method="POST" action="{{ route('users.destroy',$user) }}" class="" novalidate="novalidate" id="" >
															@csrf
                              {{method_field('DELETE')}}
                              <button class="btn btn-outline-danger"  onclick="return confirm('Are you sure You Want to delete this User?')">Delete</button> 
															</form>  
                        </td>
                      </tr>
                      @endforeach
                      
                  
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- row end -->
          </div>
    

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