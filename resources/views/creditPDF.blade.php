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
    <p class="text-left">This Credit Sheet showed the Annual General Meeting(AGM)-2023 Data.</p>
    <table id=customers>
        <thead>
            <tr>
                <th class="text-center">Serial</th>
                <th class="text-center">Name</th>
                <th class="text-center">Share</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <tr>
                <td class="text-center">01</td>
                <td class="text-left">SHAFIQUL ISLAM</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">02</td>
                <td class="text-left">MD MUSTAFIZUR RAHMAN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_1 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">03</td>
                <td class="text-left">MD GOLAM MOSTAFA</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_2 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">04</td>
                <td class="text-left">SHAIKH ARSHAD KUDDUS</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_3 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">05</td>
                <td class="text-left">MARUF HOSSAIN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_4 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">06</td>
                <td class="text-left">MOHAMMED DIPU</td>
                <td class="text-center">2</td>
                <td class="text-right">{{ $total_5 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">07</td>
                <td class="text-left">MARZAN SULTANA</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_6 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">08</td>
                <td class="text-left">MD KHALILUR RAHMAN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_7 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">09</td>
                <td class="text-left">SOHAN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_8 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">10</td>
                <td class="text-left">MD SHAKIR HOSSAIN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_9 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">11</td>
                <td class="text-left">UMME HABIBA</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_10 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">12</td>
                <td class="text-left">MD ABIDUR RAHMAN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_11 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">13</td>
                <td class="text-left">PARVIN AKTER</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_12 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">14</td>
                <td class="text-left">ALAMGIR MOSINUZZAMAN</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_13 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center">15</td>
                <td class="text-left">MD KAMRUL HASAN HABIB</td>
                <td class="text-center">1</td>
                <td class="text-right">{{ $total_14 }}</td>
                <td class="text-center">ACTIVE</td>
            </tr>

            <tr>
                <td class="text-center" colspan="2">Total</td>
                <td class="text-center">16</td>
                <td class="text-right">{{ $total_15 }}</td>
                <td class="text-center">TAKA</td>
            </tr>            
        </tbody>              
    </table>
    <br>

    <div class="section-header">
        <h1 class="text-center"> {{ $tittle }} </h1>
        <p class="text-center"> {{ $tittle1 }} </p>
        <p class="text-center">Initial <span>Stage</span> (Bank Interest)</p>
    </div><!--/.section-header-->
    

    <table id=customers>
        <thead>
            <tr>
                <th class="text-center">Serial</th>
                <th class="text-center">Date</th>
                <th class="text-center">Description</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            @foreach($interest as $inter)
                <tr>
                    <td class="text-center">{{ $inter->serial }}</td>
                    <td class="text-left">{{ $inter->deposit_date }}</td>
                    <td class="text-center">{{ $inter->description }}</td>
                    <td class="text-right">{{ number_format($inter->amount,2) }}</td>
                    <td class="text-center">{{ $inter->status }}</td>
                </tr>
            @endforeach
                <tr>
                    <td class="text-center" colspan="3">Total</td>
                    <td class="text-right">{{ $total_16 }}</td>
                    <td class="text-center">TAKA</td>
                </tr>
        </tbody>
    </table>
</body>
</html>