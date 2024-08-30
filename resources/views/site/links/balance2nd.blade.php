<section id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> latest cars</p>
					<h2>Credit (BDT)</h2>
				</div><!--/.section-header-->
				<div class="new-cars-content">
                    <div class="text-right">
                      Credit Amounts BDT&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $firstTotal }} 
                      <br>Debit Amounts BDT&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; {{ $firstDebit }}
                      <br><b>Balance BDT&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $firstBalance }} </b>
                    </div>
                    
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Credit/Debit Details</th>
                        <th class="text-center">Amount(BDT)</th>
                        <th class="text-center">Total (BDT)</th>
                        <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                          <td rowspan="3" class="text-center">01</td>
                          <td class="text-left">A. Total Member Deposit Amount BDT</td>
                          <td class="text-right"> {{ $firstCredit }} </td>
                          <td rowspan="3" class="text-right"><b> {{ $firstTotal }} </b></td>
                          <td rowspan="3" class="text-left">Credit</td>
                        </tr>

                        <tr>
                          <td width=55% class="text-left">B. Bank Interest Amount (BDT)</td>
                          <td class="text-right"> {{ $firstInterest }} </td>
                        </tr>

                        <tr>
                            <td>C. Previous Balance (BDT)</td>
                            <td class="text-right"> {{ $balancePrevious }} </td>
                        </tr>

                        <tr>
                          <td rowspan="5" class="text-center">02</td>
                          <td class="text-left">A. Debit: Land Purposes (BDT)</td>
                          <td class="text-right"> {{ $debitLand }} </td>
                          <td rowspan="5" class="text-right"><b> {{ $firstDebit }} </b></td>
                          <td rowspan="5" class="text-center">Debit</td>
                        </tr>

                        <tr>
                          <td >B. Debit: Land Maintenance/Management(BDT)</td>
                          <td class="text-right"> {{ $debitMedia }} </td>
                        </tr>
                        <tr>
                          <td>C. Debit: Survay & Documents/Stationary(BDT)</td>
                          <td class="text-right"> {{ $debitSurvey }} </td>
                        </tr>
                        <tr>
                          <td>D. Debit: Transport & Refreshment(BDT)</td>
                          <td class="text-right"> {{ $debitTransport }} </td>
                        </tr>
                        <tr>
                            <td>E. Debit: Bank Fees BDT</td>
                            <td class="text-right"> {{ $debitBank }} </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><b>Balance Amount BDT: (Credit - Debit)</b></td>
                            <td colspan="2" class="text-right"><b> {{ $firstBalance }} </b></td>
                            <td class="text-center"><b>Balance</b></td>
                        </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div class="text-center">
                        <button style="border:2px solid Violet;" class="welcome-btn"><a href="\redirect">Dashboard</a></button>
                        <button style="border:2px solid Violet; font-color: white;" class="welcome-btn"><a href="balance2nd_pdf">Download PDF</a></button>
                    </div>
					
				</div><!--/.new-cars-content-->
			</div><!--/.container-->

		</section><!--/.new-cars-->