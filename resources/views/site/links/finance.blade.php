<section id="service" class="service">
			<div class="container">
				<div class="section-header">
					<h2>Finance</h2>
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
									<h2>Debit (BDT)</h2>
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
									<h2>Balance (BDT)</h2>
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
		