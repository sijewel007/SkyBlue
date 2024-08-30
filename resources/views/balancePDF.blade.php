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
    <p class="text-center"> {{ $tittle1 }} </p>
    <p class="text-right">Date: {{ $date }} </p>
    <p class="text-left">This Balance Sheet showed the Annual General Meeting(AGM)-2023 Data.</p>
    <table id=customers>
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
                <td rowspan="2" class="text-center">01</td>
                <td class="text-left">A. Total Member Deposit Amount BDT</td>
                <td class="text-right"> {{ $firstCredit }} </td>
                <td rowspan="2" class="text-right"><b> {{ $firstTotal }} </b></td>
                <td rowspan="2" class="text-left">Credit</td>
            </tr>

            <tr>
                <td width=55% class="text-left">B. Bank Interest Amount (BDT)</td>
                <td class="text-right"> {{ $firstInterest }} </td>
            </tr>

            <tr>
                <td rowspan="5" class="text-center">02</td>
                <td class="text-left">A. Debit: Land Value BDT</td>
                <td class="text-right"> {{ $debitLand }} </td>
                <td rowspan="5" class="text-right"><b> {{ $firstDebit }} </b></td>
                <td rowspan="5" class="text-center">Debit</td>
            </tr>

            <tr>
                <td >B. Debit: Media & Ali Hossain Uncle BDT</td>
                <td class="text-right"> {{ $debitMedia }} </td>
            </tr>
            <tr>
                <td>C. Debit: Survey & Papers Verifications BDT</td>
                <td class="text-right"> {{ $debitSurvey }} </td>
            </tr>
            <tr>
                <td>D. Debit: Transports & Refreshment BDT</td>
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
</body>
</html>