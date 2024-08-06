<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class paymentController extends Controller
{
    function paymentForm()
    {
        return view('payment');
    }

    function payment(Request $rq){ //เอาไว้ลบ บืลที่ชำระเงินแล้ว
        bill::destroy($rq->bill_id);
        // echo "done";
        alert()->html('<b>ชำระเงินเสร็จสิ้น</b>', "_", 'success');
        return redirect('/dashboard');
    }
}
