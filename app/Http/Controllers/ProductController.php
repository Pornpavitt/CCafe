<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\product;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index(){
        $product = product::all();  //เอา ข้อมูลproductทั้งหมดส่งไปที่หน้า view product
        return view('/product', compact('product'));
    }
    
    function productpage(Request $rq){ //หน้าโชว์รายการอาหารหลังจากเราเลือกโต๊ะแล้ว
        if($rq->id==NULL){ 
            $dep = category::find(1);
        }
        else{   //ส่งตัวแปรต่างๆไปให้หน้า product ทำงานแบบแยกหมวดหมู่ของสินค้าได้
            $dep = category::find($rq->id);
        }
        // dep เอาไว้แสดงสินค้าในประเภทของสินค้า
        // tableID เอาไว้กำหนดไอดีโต๊ะ
        $bill_id = bill::latest()->first()->id; 
        $tableID = $rq->tid; 
        $productName = [];
        $productIdAll = []; 
        $bill_product = DB::select("SELECT `product_id`, `table_id`, `price`, `qty`
        FROM `bill_product` WHERE `bill_id`= $bill_id AND `table_id`=$tableID");//หาว่าในตราง Product id นี้กับโต๊นี้มีสินค้าอะไรบ้าง
        $bill_productArray = json_decode(json_encode($bill_product), true); //convert from stdClass to array
        for($i=0;$i<count($bill_productArray);$i++){ //เก็บชื่อกับไอดีสินค้า ลงไปใน Arry 
            $product = product::find($bill_productArray[$i]['product_id']); 
            array_push($productName,$product['productsName']);
            array_push($productIdAll,$product->id);
        }

        return view('product', compact('dep','bill_id','tableID','bill_productArray','productName','productIdAll'));
    }

    function deleteitem(){ //ลบบิลที่ยังไม่สำเร็จ 
        $bill_id = bill::latest()->first()->id;
        $user=Auth::user()->id;
        DB::update("UPDATE `bills` SET `status`='finished' WHERE `id` = $bill_id AND `usersID` = $user ");
        // $tableID = $rq->tid;
        // DB::delete("DELETE FROM bills WHERE status='unfinished';");
        
        $emptyBill = bill::where("status",'=', "unfinished")->get();
        $emptyBill->each->forceDelete();
        return redirect('/dashboard');

    }
   
}