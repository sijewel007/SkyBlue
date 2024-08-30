<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  color: white;
  font-weight: bold;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: blue;
  padding: 2px;
  font-size: 14px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.circular--square 
{ 
	border-radius: 50%;
	padding: 25px 0px;
}

</style>


<section id="home" class="welcome-hero">
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="container">

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="{{ url('/') }}">SKyBlue<span></span></a>
				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->
				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="{{ url('/') }}">home</a></li>
				                    <li class=""><a href="{{ route('login') }}">Finance</a></li>
				                    <li class="scroll"><a href="#featured-cars">featured cars</a></li>
				                    <li class="scroll"><a href="#new-cars">new cars</a></li>
				                    <li class="scroll"><a href="#brand">brands</a></li>
				                    <li class="scroll"><a href="#contact">contact</a></li>

									

									@if (Route::has('login'))
									@auth       
										<div class="dropdown">
											<img class="circular--square" width="25px" src="admin/assets/images/profile/{{ Auth::user()->profile_photo_path }}" alt="image"> {{ Auth::user()->name }}
											<div class="dropdown-content">
												<a class="dropdown" href="#">Profile</a>
												<a class="dropdown" href="#">Settings</a>
												<a class="dropdown" href="#">Accounts</a>
												<form method="GET" action="{{ route('logout') }}" x-data>
                                                @csrf
                                                <a class="nav-link dropdown-toggle" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                    
                                            
                                                        {{ __('Log Out') }}
                                                    
                                                </a>
                                            </form>
													@else
														<a class="dropbtn" href="{{ route('login') }}">Login</a> 
														@endauth
													@endif
											</div>
										</div>
												
									
									
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

			<div class="container">
				<div class="welcome-hero-txt">
					<h2>skyblue</h2>
					<p>
					Get Your Desired home in Resonable Price 
					</p>
					<button class="welcome-btn" onclick="window.location.href='#'">contact us</button>
				</div>
			</div>
</section><!--/.welcome-hero-->