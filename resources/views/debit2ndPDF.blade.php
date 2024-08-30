<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyBlue <br>The Happiness</title>
    <!--style.css-->
    <link rel="stylesheet" href="site/assets/css/table-pdf.css">
</head>
<body>
    <h1 class="text-center"> {{ $tittle }} </h1>
    <hr>
    <p class="text-center"> {{ $tittle1 }} </p>
    <p class="text-right">Date: {{ $date }} </p>
    <h5 class="text-left">Debit: Land Purposes (BDT): {{ $debitFirst }}</h5>
    <table id=customers>
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
<!-------------------------------------------------------------------------------------------------------->

<h5 class="text-left">Debit: Land Maintenance/Management(BDT): {{ $debitSecond }}</h5>
    <table id=customers>
        <thead>
            <tr>
                <th class="text-center">Serial</th>
                <th class="text-center">Date</th>
                <th class="text-center">Description</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Remarks</th>
            </tr>
        </thead>
        <tbody id=customers>
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
<!-------------------------------------------------------------------------------------------------------->

<h5 class="text-left">Debit: Survay & Documents/Stationary(BDT): {{ $debitThird }}</h5>
    <table id=customers>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-------------------------------------------------------------------------------------------------------->
<h5 class="text-left">Debit: Transport & Refreshment(BDT): {{ $debit4th }}</h5>
    <table id=customers>
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
    <br><br><br><br><br><br><br>
<!-------------------------------------------------------------------------------------------------------->
<h5 class="text-left">Debit: Bank Fees(BDT): {{ $debit5th }}</h5>
    <table id=customers>
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
    <br><br><br>
    <div class="text-right">Land Purposes (BDT): {{ $debitFirst }} </div>
                    <div class="text-right">Land Maintenance/Management(BDT): {{ $debitSecond }} </div>
                    <div class="text-right">Survay & Documents/Stationary(BDT): {{ $debitThird }} </div>
                    <div class="text-right">Transport & Refreshment(BDT): {{ $debit4th }} </div>
                    <div class="text-right">Bank Fees(BDT): {{ $debit5th }} </div>
                    <div class="text-right">Total Debit Amounts (BDT): {{ $debitTotal }} </div>
</body>
</html>