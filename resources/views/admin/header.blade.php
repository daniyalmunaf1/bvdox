
<header class="header">
      <div class="header__bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <a class="site-logo site-title" href="{{route('index')}}"><img src="assets/images/logo.png" alt="site-logo"></a>


            <!-- For Mobile -->
            <ul class="account-menu mobile-acc-menu">

              <li>
                <div class="icon" id="bell"> <i class="fa fa-bell"></i> </div>
                <div class="notifications" id="box">
                  <h2>Notifications - <span>2</span></h2>
                  <div class="notifications-item"> <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
                    <div class="text">
                      <h4>Samso aliao</h4>
                      <p>Samso Nagaro Like your home work</p>
                    </div>
                  </div>
                  <div class="notifications-item"> <img src="https://img.icons8.com/flat_round/64/000000/vote-badge.png"
                      alt="img">
                    <div class="text">
                      <h4>John Silvester</h4>
                      <p>+20 vista badge earned</p>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav main-menu m-auto">
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li> <a href="{{route('usermanagement')}}">Users Management</a></li>
                <li> <a href="{{route('investmentrequest')}}">Investment</a></li>
                <li><a href="{{route('withdrawalrequest')}}">Withdrawal</a></li>
                <li><a href="{{route('rewardrequest')}}">Rewards</a></li>
                <li><a href="{{route('investmentaccounts')}}">Investment Accounts</a></li>
                <li class="pass-mobile"><a href="{{route('changepassword')}}">Change Password</a></li>
                <li class="pass-mobile">  <a ><i><form method="POST" action="{{ route('logout') }}">
                            			@csrf
										<button type="Submit" style="color: white;background-color: transparent;padding-left: 0px;">Sign Out</button>
									</form>		</i></a>
                </li>  
              </ul>
              <div class="nav-right">
                <ul class="noti-ul account-menu row">
                 
                  <li class="d-flex align-items-center">
                    <div class="icon" id="bell1"> <i class="fa fa-bell"></i> </div>
                    <div class="notifications" id="box1">
                      <h2>Notifications - <span>2</span></h2>
                      <div class="notifications-item"> <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
                        <div class="text">
                          <h4>Samso aliao</h4>
                          <p>Samso Nagaro Like your home work</p>
                        </div>
                      </div>
                      <div class="notifications-item"> <img
                          src="https://img.icons8.com/flat_round/64/000000/vote-badge.png" alt="img">
                        <div class="text">
                          <h4>John Silvester</h4>
                          <p>+20 vista badge earned</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="icon">
                    <a href="{{route('changepassword')}}"><i>Change Password</i></a>
                  </li>
                  <li class="icon">  <a ><i><form method="POST" action="{{ route('logout') }}">
                            			@csrf
										<button type="Submit" style="color: white;" class="btn">Sign Out</button>
									</form>		</i></a>
                </li>
                </ul>


              </div>
            </div>
          </nav>
        </div>
      </div><!-- header__bottom end -->
    </header>