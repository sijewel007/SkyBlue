<section id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p>First <span>Stage</span> (Section 5)</p>
					<h2>Debit (BDT)</h2>
				</div><!--/.section-header-->
				<div class="new-cars-content">
                    <div class="text-right">Land Value (BDT): {{ $debitFirst }} </div>
                    <div class="text-right">Media Money and Ali Hossain Uncle(BDT): {{ $debitSecond }} </div>
                    <div class="text-right">Survay & Verifiation(BDT): {{ $debitThird }} </div>
                    <div class="text-right">Transport & Refreshment(BDT): {{ $debit4th }} </div>
                    <div class="text-right">Bank Fees(BDT): {{ $debit5th }} </div>
                    <div class="text-right">Total Debit Amounts (BDT): {{ $debitTotal }} </div>

                    <h5 class="text-left">Debit: Land Value(BDT)</h5>
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Remarks</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($debit as $debit)
                          <tr>
                            <td class="text-center">{{ $debit->serial }}</td>
                            <td class="text-left">{{ $debit->deposit_date }}</td>
                            <td class="text-center">{{ $debit->description }}</td>
                            <td class="text-right">{{ number_format((float)$debit->amount,2) }}</td>
                            <td class="text-center">{{ $debit->status }}</td>
                          </tr>
                        @endforeach

                          <tr>
                            <td class="text-center" colspan="3">Total</td>
                            <td class="text-right">{{ $debitFirst }}</td>
                            <td class="text-center">TAKA</td>
                          </tr>
                        </tbody>
                    </table>
                    <br><br>
<!-------------------------------------------------------------------------------------------------------->
                    <h5 class="text-left">Debit: Media Money and Ali Hossain Uncle(BDT)</h5>
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Remarks</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($debit1 as $debit1)
                          <tr>
                            <td class="text-center">{{ $debit1->serial }}</td>
                            <td class="text-left">{{ $debit1->deposit_date }}</td>
                            <td class="text-center">{{ $debit1->description }}</td>
                            <td class="text-right">{{ number_format((float)$debit1->amount,2) }}</td>
                            <td class="text-center">{{ $debit1->status }}</td>
                          </tr>
                        @endforeach

                          <tr>
                            <td class="text-center" colspan="3">Total</td>
                            <td class="text-right">{{ $debitSecond }}</td>
                            <td class="text-center">TAKA</td>
                          </tr>
                        </tbody>
                    </table>
                    <br><br>
<!-------------------------------------------------------------------------------------------------------->

                    <h5 class="text-left">Debit: Survay & Verifiation(BDT)</h5>
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Remarks</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($debit2 as $debit2)
                          <tr>
                            <td class="text-center">{{ $debit2->serial }}</td>
                            <td class="text-left">{{ $debit2->deposit_date }}</td>
                            <td class="text-center">{{ $debit2->description }}</td>
                            <td class="text-right">{{ number_format((float)$debit2->amount,2) }}</td>
                            <td class="text-center">{{ $debit2->status }}</td>
                          </tr>
                        @endforeach

                          <tr>
                            <td class="text-center" colspan="3">Total</td>
                            <td class="text-right">{{ $debitThird }}</td>
                            <td class="text-center">TAKA</td>
                          </tr>
                        </tbody>
                    </table>
                    <br><br>
<!-------------------------------------------------------------------------------------------------------->

                    <h5 class="text-left">Debit: Transport & Refreshment(BDT)</h5>
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Remarks</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($debit3 as $debit3)
                          <tr>
                            <td class="text-center">{{ $debit3->serial }}</td>
                            <td class="text-left">{{ $debit3->deposit_date }}</td>
                            <td class="text-center">{{ $debit3->description }}</td>
                            <td class="text-right">{{ number_format((float)$debit3->amount,2) }}</td>
                            <td class="text-center">{{ $debit3->status }}</td>
                          </tr>
                        @endforeach

                          <tr>
                            <td class="text-center" colspan="3">Total</td>
                            <td class="text-right">{{ $debit4th }}</td>
                            <td class="text-center">TAKA</td>
                          </tr>
                        </tbody>
                    </table>
                    <br><br>
<!-------------------------------------------------------------------------------------------------------->

                    <h5 class="text-left">Debit: Bank Fees(BDT)</h5>
                    <table class="table-fill">
                        <thead>
                        <tr>
                        <th class="text-center">Serial</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Remarks</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($debit4 as $debit4)
                          <tr>
                            <td class="text-center">{{ $debit4->serial }}</td>
                            <td class="text-left">{{ $debit4->deposit_date }}</td>
                            <td class="text-center">{{ $debit4->description }}</td>
                            <td class="text-right">{{ number_format((float)$debit4->amount,2) }}</td>
                            <td class="text-center">{{ $debit4->status }}</td>
                          </tr>
                        @endforeach

                          <tr>
                            <td class="text-center" colspan="3">Total</td>
                            <td class="text-right">{{ $debit5th }}</td>
                            <td class="text-center">TAKA</td>
                          </tr>
                        </tbody>
                    </table>
                    <br><br>
<!-------------------------------------------------------------------------------------------------------->
                    <div class="text-center">
                        <button style="border:2px solid Violet;" class="welcome-btn"><a href="\redirect">Dashboard</a></button>
                        <button style="border:2px solid Violet;" class="welcome-btn"><a href="debit_pdf">Download PDF</a></button>
                    </div>
				</div><!--/.new-cars-content-->
			</div><!--/.container-->

		</section><!--/.new-cars-->