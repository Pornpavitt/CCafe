<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;
use App\Models\reservetable;
use Illuminate\Support\Facades\Auth;

class ReservetableController extends Controller
{
    function index(){
        $bill = new bill;
        $bill->usersID=Auth::user()->id; //สร้าง บิลใหม่โดยเอาไอดีของคนที่ล็อกอินใส่เข้าไปในบิล เพื่อที่จะใช้ดำเนินการในขั้นต่อไป
        $bill->save();
        $table = reservetable::all();
        return view('/reservetable', compact('table'));
    }
    function addtable(Request $request){
        $new_table = new reservetable;
        $new_table->tableseats = $request->seat; //การสร้างโต๊ะใหม่ ที่ได้ค่ามาจากแบบฟรอม 
        $new_table->save();
        return redirect('/management');
    }
    
}
