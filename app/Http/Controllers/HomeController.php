<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    function index(){ //โชว์บิล ขึ้มาในหน้า Dashbord ***
        $role = Auth::user()->role;

        $price = array();
        $priceall = [];
        $tableall = [];
        $bill = bill::where('status', "=", 'finished')->get();

        foreach ($bill as $b) {
            $find_bill_detail = json_decode(json_encode(DB::select("SELECT bill_id,price,table_id FROM bill_product WHERE bill_id = $b->id ")), true);
            // print_r($find_bill_detail);  //นำตัวแปรที่ finished แล้วนำมาแสดงทั้งหมด
            
            foreach ($find_bill_detail as $bill_detail) {

                if(array_key_exists($bill_detail['bill_id'], $price)){ //ถ้าบิลไอดีเหมือนกันเอามาบวกกัน
                    $price[$bill_detail['bill_id']] += $bill_detail['price'] ;
                    // echo "add";
                }
                else{
                    $price[$bill_detail['bill_id']]= $bill_detail['price'] ; //ถ้าบิลไอไม่เหมือนกันเอา key value นั้มาเป็นตัวตั้ง
                    // echo 'set';
                }

                array_push($tableall, $bill_detail['table_id']); //เก็บ table id ทั้งหมดเข้าในอาเรย์ ที่ มัน finished
            };
        };
        // print_r($price);
        foreach($price as $element){ // เอา ราคาเก็บไว้ในอาเรย์
            // echo $element." ";
            array_push($priceall, $element);
        }
        // print_r($tableall);
        return view('admin.dashboard', compact('bill', 'priceall', 'tableall'));

    }
}
