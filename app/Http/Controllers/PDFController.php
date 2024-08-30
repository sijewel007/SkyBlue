<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use PDF;

class PDFController extends Controller
{
    public function credit_pdf_get(Request $request)
    {
        $sum_1 = profile::where('status','=','Credit')->where('card',4)->where('username','=','sijewel007@gmail.com')->sum('amount');
        $total = number_format($sum_1, 2);

        $sum_2 = profile::where('status','=','Credit')->where('card',4)->where('username','=','md.mustafiz1983@gmail.com')->sum('amount');
        $total_1 = number_format($sum_2, 2);

        $sum_3 = profile::where('status','=','Credit')->where('card',4)->where('username','=','gmms007@gmail.com')->sum('amount');
        $total_2 = number_format($sum_3, 2);

        $sum_4 = profile::where('status','=','Credit')->where('card',4)->where('username','=','sheikh.arshad.kuddus@gmail.com')->sum('amount');
        $total_3 = number_format($sum_4, 2);

        $sum_5 = profile::where('status','=','Credit')->where('card',4)->where('username','=','marufhossenpdb@gmail.com')->sum('amount');
        $total_4 = number_format($sum_5, 2);

        $sum_6 = profile::where('status','=','Credit')->where('card',4)->where('username','=','mdipu22@yahoo.com')->sum('amount');
        $total_5 = number_format($sum_6, 2);

        $sum_7 = profile::where('status','=','Credit')->where('card',4)->where('username','=','fariahossain23@gmail.com')->sum('amount');
        $total_6 = number_format($sum_7, 2);

        $sum_8 = profile::where('status','=','Credit')->where('card',4)->where('username','=','khalilur864@gmail.com')->sum('amount');
        $total_7 = number_format($sum_8, 2);

        $sum_9 = profile::where('status','=','Credit')->where('card',4)->where('username','=','sohanmunsi79@gmail.com')->sum('amount');
        $total_8 = number_format($sum_9, 2);

        $sum_10 = profile::where('status','=','Credit')->where('card',4)->where('username','=','shakir.rajbd@yahoo.com')->sum('amount');
        $total_9 = number_format($sum_10, 2);

        $sum_11 = profile::where('status','=','Credit')->where('card',4)->where('username','=','miloniceiu@yahoo.com')->sum('amount');
        $total_10 = number_format($sum_11, 2);

        $sum_12 = profile::where('status','=','Credit')->where('card',4)->where('username','=','abid1747@gmail.com')->sum('amount');
        $total_11 = number_format($sum_12, 2);

        $sum_13 = profile::where('status','=','Credit')->where('card',4)->where('username','=','shahed@live.it')->sum('amount');
        $total_12 = number_format($sum_13, 2);

        $sum_14 = profile::where('status','=','Credit')->where('card',4)->where('username','=','alamgir1980uk@gmail.com')->sum('amount');
        $total_13 = number_format($sum_14, 2);

        $sum_15 = profile::where('status','=','Credit')->where('card',4)->where('username','=','cadet962@gmail.com')->sum('amount');
        $total_14 = number_format($sum_15, 2);


        $sum = $sum_1 + $sum_2 + $sum_3 + $sum_4 + $sum_5 + $sum_6 + $sum_7 + $sum_8 + $sum_9 + $sum_10 + $sum_11 + $sum_12 + $sum_13 + $sum_14 + $sum_15;
        $total_15 = number_format($sum,2);

        $interest = profile::where('card',4)->where('type',2)->orderBy('deposit_date', 'DESC')->get();
        $bank = profile::where('card',4)->where('type',2)->sum('amount');
        $total_16 = number_format($bank,2);

        $bal = $bank + $sum;
        $total_17 = number_format($bal,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Credit Sheet (First Step)',
            'date' => date('d/m/Y'),
            'total' => $total,
            'total_1' => $total_1,
            'total_2' => $total_2,
            'total_3' => $total_3,
            'total_4' => $total_4,
            'total_5' => $total_5,
            'total_6' => $total_6,
            'total_7' => $total_7,
            'total_8' => $total_8,
            'total_9' => $total_9,
            'total_10' => $total_10,
            'total_11' => $total_11,
            'total_12' => $total_12,
            'total_13' => $total_13,
            'total_14' => $total_14,
            'total_15' => $total_15,
            'total_16' => $total_16,
            'total_17' => $total_17,
            'interest' => $interest
        ];
        $pdf = PDF::loadview('creditPDF', $data);
        return $pdf->download('Credit.pdf');
    }

    public function credit2nd_pdf_get(Request $request)
    {
        $sum_1 = profile::where('status','=','Credit')->where('card',7)->where('username','=','sijewel007@gmail.com')->sum('amount');
        $total = number_format($sum_1, 2);

        $sum_2 = profile::where('status','=','Credit')->where('card',7)->where('username','=','md.mustafiz1983@gmail.com')->sum('amount');
        $total_1 = number_format($sum_2, 2);

        $sum_3 = profile::where('status','=','Credit')->where('card',7)->where('username','=','gmms007@gmail.com')->sum('amount');
        $total_2 = number_format($sum_3, 2);

        $sum_4 = profile::where('status','=','Credit')->where('card',7)->where('username','=','sheikh.arshad.kuddus@gmail.com')->sum('amount');
        $total_3 = number_format($sum_4, 2);

        $sum_5 = profile::where('status','=','Credit')->where('card',7)->where('username','=','marufhossenpdb@gmail.com')->sum('amount');
        $total_4 = number_format($sum_5, 2);

        $sum_6 = profile::where('status','=','Credit')->where('card',7)->where('username','=','mdipu22@yahoo.com')->sum('amount');
        $total_5 = number_format($sum_6, 2);

        $sum_7 = profile::where('status','=','Credit')->where('card',7)->where('username','=','fariahossain23@gmail.com')->sum('amount');
        $total_6 = number_format($sum_7, 2);

        $sum_8 = profile::where('status','=','Credit')->where('card',7)->where('username','=','khalilur864@gmail.com')->sum('amount');
        $total_7 = number_format($sum_8, 2);

        $sum_9 = profile::where('status','=','Credit')->where('card',7)->where('username','=','sohanmunsi79@gmail.com')->sum('amount');
        $total_8 = number_format($sum_9, 2);

        $sum_10 = profile::where('status','=','Credit')->where('card',7)->where('username','=','shakir.rajbd@yahoo.com')->sum('amount');
        $total_9 = number_format($sum_10, 2);

        $sum_11 = profile::where('status','=','Credit')->where('card',7)->where('username','=','miloniceiu@yahoo.com')->sum('amount');
        $total_10 = number_format($sum_11, 2);

        $sum_12 = profile::where('status','=','Credit')->where('card',7)->where('username','=','abid1747@gmail.com')->sum('amount');
        $total_11 = number_format($sum_12, 2);

        $sum_13 = profile::where('status','=','Credit')->where('card',7)->where('username','=','shahed@live.it')->sum('amount');
        $total_12 = number_format($sum_13, 2);

        $sum_14 = profile::where('status','=','Credit')->where('card',7)->where('username','=','alamgir1980uk@gmail.com')->sum('amount');
        $total_13 = number_format($sum_14, 2);

        $sum_15 = profile::where('status','=','Credit')->where('card',7)->where('username','=','cadet962@gmail.com')->sum('amount');
        $total_14 = number_format($sum_15, 2);


        $sum = $sum_1 + $sum_2 + $sum_3 + $sum_4 + $sum_5 + $sum_6 + $sum_7 + $sum_8 + $sum_9 + $sum_10 + $sum_11 + $sum_12 + $sum_13 + $sum_14 + $sum_15;
        $total_15 = number_format($sum,2);

        $interest = profile::where('card',7)->where('type',2)->orderBy('deposit_date', 'DESC')->get();
        $bank = profile::where('card',7)->where('type',2)->sum('amount');
        $total_16 = number_format($bank,2);

        $bal = $bank + $sum;
        $total_17 = number_format($bal,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Credit Sheet (First Step)',
            'date' => date('d/m/Y'),
            'total' => $total,
            'total_1' => $total_1,
            'total_2' => $total_2,
            'total_3' => $total_3,
            'total_4' => $total_4,
            'total_5' => $total_5,
            'total_6' => $total_6,
            'total_7' => $total_7,
            'total_8' => $total_8,
            'total_9' => $total_9,
            'total_10' => $total_10,
            'total_11' => $total_11,
            'total_12' => $total_12,
            'total_13' => $total_13,
            'total_14' => $total_14,
            'total_15' => $total_15,
            'total_16' => $total_16,
            'total_17' => $total_17,
            'interest' => $interest
        ];
        $pdf = PDF::loadview('credit2ndPDF', $data);
        return $pdf->download('Credit2nd_Step.pdf');
    }

    public function debit_pdf_get(Request $request)
    {
        $debit = profile::where('card',5)->where('type',1)->orderBy('deposit_date', 'DESC')->get();
        $first = profile::where('card',5)->where('type',1)->sum('amount');
        $debitFirst = number_format($first,2);

        $debit1 = profile::where('card',5)->where('type',2)->orderBy('deposit_date', 'DESC')->get();
        $second = profile::where('card',5)->where('type',2)->sum('amount');
        $debitSecond = number_format($second,2);

        $debit2 = profile::where('card',5)->where('type',3)->orderBy('deposit_date', 'DESC')->get();
        $third = profile::where('card',5)->where('type',3)->sum('amount');
        $debitThird = number_format($third,2);

        $debit3 = profile::where('card',5)->where('type',4)->orderBy('deposit_date', 'DESC')->get();
        $fourth = profile::where('card',5)->where('type',4)->sum('amount');
        $debit4th = number_format($fourth,2);

        $debit4 = profile::where('card',5)->where('type',5)->orderBy('deposit_date', 'DESC')->get();
        $fifth = profile::where('card',5)->where('type',5)->sum('amount');
        $debit5th = number_format($fifth,2);

        $sum = $first + $second +$third + $fourth + $fifth;
        $debitTotal = number_format($sum,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Balance Sheet (First Stage)',
            'date' => date('d/m/Y'),
            'debit' => $debit,
            'debit1' => $debit1,
            'debit2' => $debit2,
            'debit3' => $debit3,
            'debit4' => $debit4,
            'debitFirst' => $debitFirst,
            'debitSecond' => $debitSecond,
            'debitThird' => $debitThird,
            'debit4th' => $debit4th,
            'debit5th' => $debit5th,
            'debitTotal' => $debitTotal,
        ];
        $pdf = PDF::loadview('debitPDF', $data);
        return $pdf->download('Debit1st_Step.pdf');
    }


    public function debit2nd_pdf_get(Request $request)
    {
        $debit = profile::where('card',6)->where('type',1)->orderBy('deposit_date', 'DESC')->get();
        $first = profile::where('card',6)->where('type',1)->sum('amount');
        $debitFirst = number_format($first,2);

        $debit1 = profile::where('card',6)->where('type',2)->orderBy('deposit_date', 'DESC')->get();
        $second = profile::where('card',6)->where('type',2)->sum('amount');
        $debitSecond = number_format($second,2);

        $debit2 = profile::where('card',6)->where('type',3)->orderBy('deposit_date', 'DESC')->get();
        $third = profile::where('card',6)->where('type',3)->sum('amount');
        $debitThird = number_format($third,2);

        $debit3 = profile::where('card',6)->where('type',4)->orderBy('deposit_date', 'DESC')->get();
        $fourth = profile::where('card',6)->where('type',4)->sum('amount');
        $debit4th = number_format($fourth,2);

        $debit4 = profile::where('card',6)->where('type',5)->orderBy('deposit_date', 'DESC')->get();
        $fifth = profile::where('card',6)->where('type',5)->sum('amount');
        $debit5th = number_format($fifth,2);

        $sum = $first + $second +$third + $fourth + $fifth;
        $debitTotal = number_format($sum,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Debit Sheet (Second Step)',
            'date' => date('d/m/Y'),
            'debit' => $debit,
            'debit1' => $debit1,
            'debit2' => $debit2,
            'debit3' => $debit3,
            'debit4' => $debit4,
            'debitFirst' => $debitFirst,
            'debitSecond' => $debitSecond,
            'debitThird' => $debitThird,
            'debit4th' => $debit4th,
            'debit5th' => $debit5th,
            'debitTotal' => $debitTotal,
        ];
        $pdf = PDF::loadview('debit2ndPDF', $data);
        return $pdf->download('Debit2nd_Step.pdf');
    }

    public function balance_pdf_get(Request $request)
    {
        $users = User::get();

        $first = profile::where('status','=','Credit')->where('card',4)->where('type',1)->sum('amount');
        $firstCredit = number_format($first,2);

        $interest = profile::where('status','=','Credit')->where('card',4)->where('type',2)->sum('amount');
        $firstInterest = number_format($interest,2);

        $credit = $first + $interest;
        $firstTotal = number_format($credit,2);

        $land = profile::where('status','=','Debit')->where('card',5)->where('type',1)->sum('amount');
        $debitLand = number_format($land,2);

        $media = profile::where('status','=','Debit')->where('card',5)->where('type',2)->sum('amount');
        $debitMedia = number_format($media,2);

        $survey = profile::where('status','=','Debit')->where('card',5)->where('type',3)->sum('amount');
        $debitSurvey = number_format($survey,2);

        $transport = profile::where('status','=','Debit')->where('card',5)->where('type',4)->sum('amount');
        $debitTransport = number_format($transport,2);

        $bank = profile::where('status','=','Debit')->where('card',5)->where('type',5)->sum('amount');
        $debitBank = number_format($bank,2);

        $debit = $land + $media + $survey + $transport + $bank;
        $firstDebit = number_format($debit,2);

        $balance = $credit - $debit;
        $firstBalance = number_format($balance,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Balance Sheet (First Stage)',
            'date' => date('m/d/Y'),
            'firstCredit' => $firstCredit,
            'firstInterest' => $firstInterest,
            'firstTotal' => $firstTotal,
            'debitLand' => $debitLand,
            'debitMedia' => $debitMedia,
            'debitSurvey' => $debitSurvey,
            'debitTransport' => $debitTransport,
            'debitBank' => $debitBank,
            'firstDebit' => $firstDebit,
            'firstBalance' => $firstBalance
        ];
        $pdf = PDF::loadview('balancePDF', $data);
        return $pdf->download('Balance.pdf');
    }

    public function balance2nd_pdf_get(Request $request)
    {
        $users = User::get();

        $creditPre = profile::where('card',4)->sum('amount');
        $debitPre = profile::where('card',5)->sum('amount');
        $balancePre = $creditPre - $debitPre;
        $balancePrevious = number_format($balancePre,2);
        

        $first = profile::where('status','=','Credit')->where('card',7)->where('type',1)->sum('amount');
        $firstCredit = number_format($first,2);

        $interest = profile::where('status','=','Credit')->where('card',7)->where('type',2)->sum('amount');
        $firstInterest = number_format($interest,2);

        $credit = $first + $interest + $balancePre;
        $firstTotal = number_format($credit,2);


        $land = profile::where('status','=','Debit')->where('card',6)->where('type',1)->sum('amount');
        $debitLand = number_format($land,2);

        $media = profile::where('status','=','Debit')->where('card',6)->where('type',2)->sum('amount');
        $debitMedia = number_format($media,2);

        $survey = profile::where('status','=','Debit')->where('card',6)->where('type',3)->sum('amount');
        $debitSurvey = number_format($survey,2);

        $transport = profile::where('status','=','Debit')->where('card',6)->where('type',4)->sum('amount');
        $debitTransport = number_format($transport,2);

        $bank = profile::where('status','=','Debit')->where('card',6)->where('type',5)->sum('amount');
        $debitBank = number_format($bank,2);

        $debit = $land + $media + $survey + $transport + $bank;
        $firstDebit = number_format($debit,2);

        $balance = $credit - $debit;
        $firstBalance = number_format($balance,2);

        $data = [
            'tittle' => 'SkyBlue',
            'tittle1' => 'Balance Sheet (Second Stage)',
            'date' => date('m/d/Y'),
            'firstCredit' => $firstCredit,
            'firstInterest' => $firstInterest,
            'firstTotal' => $firstTotal,
            'debitLand' => $debitLand,
            'debitMedia' => $debitMedia,
            'debitSurvey' => $debitSurvey,
            'debitTransport' => $debitTransport,
            'debitBank' => $debitBank,
            'firstDebit' => $firstDebit,
            'firstBalance' => $firstBalance,
            'balancePrevious' => $balancePrevious
        ];
        $pdf = PDF::loadview('balance2ndPDF', $data);
        return $pdf->download('Balance2nd_Step.pdf');
    }
}
