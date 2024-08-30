<!doctype html>
<html class="no-js" lang="en">

        <!-- head Start -->
            @include('site.links.head')
        <!-- head End -->
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
	
		<!--welcome-hero start -->
            @include('site.links.hero')
		<!--welcome-hero end -->

		<!--service start -->
		<section id="service" class="service">
		<div class="container">
				<div class="section-header">
					<h2>Finance (2nd Stage)</h2>
				</div><!--/.section-header-->
				<br>
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/credit2nd') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car"></i>
									</div>
									<h2>Credit (BDT): {{ $total2nd }} </h2>
									<p>
										Member Deposit and Bank Interest Included.  
									</p>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/debit2nd') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car-repair"></i>
									</div>
									<h2>Debit (BDT): {{ $debit2ndTotal }} </h2>
									<p>
										All Debits are Included with Bank Accounts service.  
									</p>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/balance2nd') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car-1"></i>
									</div>
									<h2>Balance (BDT): {{ $balance2ndFinal }} </h2>
									<p>
										Total Balance with Credits and Debits. Second Step>><br> 
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><!--/.container-->

			<div class="container">
				<div class="section-header">
					<h2>Finance (1st Stage)</h2>
				</div><!--/.section-header-->
				<br>
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/credit') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car"></i>
									</div>
									<h2>Credit (BDT): {{ $total }}</h2>
									<p>
										Member Deposit and Bank Interest Included.  
									</p>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/debit') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car-repair"></i>
									</div>
									<h2>Debit (BDT): {{ $debitTotal }}</h2>
									<p>
										All Debits are Included with Bank Accounts service.  
									</p>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6">
							<a href="{{ url('/balance') }}">
								<div class="single-service-item">
									<div class="single-service-icon">
										<i class="flaticon-car-1"></i>
									</div>
									<h2>Balance (BDT): {{ $balanceFinal }} </h2>
									<p>
										Total Balance with Credits and Debits. Second Step>><br> 
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		</section><!--/.service-->
		<!--service end-->

		<!--service start -->
			
		<!--service end-->

		<!--new-cars start -->
		    
		<!--new-cars end -->

		<!--featured-cars start -->
		    
		<!--featured-cars end -->
            
		<!-- clients-say strat -->
            @include('site.links.clients')
		<!-- clients-say end -->

		<!--brand strat -->
            
		<!--brand end -->

		<!--blog start -->
		    @include('site.links.blog')
		<!--blog end -->

		<!--Footer start-->
            @include('site.links.footer')
		<!--Footer end-->

        <!--Scripts start-->
        @include('site.links.script')
		<!--Scripts end-->

    </body>
	
</html>