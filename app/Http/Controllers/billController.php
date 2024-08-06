<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class billController extends Controller
{
    function add_product(Request $rq)
    {
        $bill_id = bill::latest()->first();
        $product = product::find($rq->id);
        $bid = $bill_id->id;
        $pid = $product->id;
        $tid = $rq->tid;
        $pp = $product->productsPrice * $rq->productQty;

        $finQty = DB::select("SELECT * FROM `bill_product` WHERE `bill_id` = $bid AND `product_id` = $pid");
        if (empty($finQty)) { //Add ค่าเข้าไปที่แนบมากับลิงค์
            DB::insert("INSERT INTO `bill_product`(`bill_id`, `product_id`, `table_id`,`price`,`qty`) 
            VALUES ($bid,$pid,$tid,$pp,$rq->productQty)");
        } else { //บวกค่าใหม่ กับ ค่าเก่า
            $qty = DB::select("SELECT `qty` FROM `bill_product` WHERE `bill_id` = $bid AND `product_id` = $pid");
            $price = DB::select("SELECT `price` FROM `bill_product` WHERE `bill_id` = $bid AND `product_id` = $pid");
            $qtyArray = json_decode(json_encode($qty), true); //convert from stdClass to array
            $priceArray = json_decode(json_encode($price), true); //convert from stdClass to array

            $qty = $qtyArray[0]["qty"] + $rq->productQty;
            $price = $priceArray[0]["price"] + $pp;
            DB::update("UPDATE `bill_product` SET `qty` = $qty, `price`=$price WHERE `bill_id` = $bid AND `product_id` = $pid");
        }
        $depID = 1;

        return redirect("/product/$tid/$depID");
    }
    function billDetail(Request $rq)
    { // แสดงบิลที่ต้องชำระ  **********
        $bill = bill::find($rq->bid);
        $table_id = $rq->tid;
        $bill_detail = [];
        $find_bill_detail = json_decode(json_encode(DB::select("SELECT * FROM `bill_product` WHERE `bill_id`=$bill->id")), true);

        foreach ($find_bill_detail as $record) {
            array_push($bill_detail, $record);
        }

        // print_r($bill_detail);
        // echo $bill;
        return view('billdetail', compact('bill', 'table_id', 'bill_detail'));
    }
    function delete(Request $rq)
    { // ลบ Product ออกจาก bill product
        $product = $rq->pid;
        $tid = $rq->tid;
        $bid = $rq->bid;
        $depID = $rq->did;
        // echo $bid;
        DB::delete("DELETE FROM `bill_product` WHERE `bill_id` = $bid AND `product_id` = $product AND `table_id` = $tid");
        // echo $deletebillid;
        return redirect("/product/$tid/$depID");
    }

    function history(Request $rq)
    {
        $billhistory = bill::onlyTrashed()->get(); //นำค่าที่โดนลบไปแล้วมาแสดงผล
        $qty = [];
        $price = [];
        $qtyArray = array();
        $priceArray = array();
        foreach ($billhistory as $b) {
            $find_bill_detail = json_decode(json_encode(DB::select("SELECT * FROM `bill_product` WHERE `bill_id`= $b->id")), true);
            // print_r($find_bill_detail);  //นำตัวแปรที่ finished แล้วนำมาแสดงทั้งหมด

            foreach ($find_bill_detail as $bill_detail) {

                if (array_key_exists($bill_detail['bill_id'], $priceArray)) { //ถ้าบิลไอดีเหมือนกันเอามาบวกกัน
                    $qtyArray[$bill_detail['bill_id']] += $bill_detail['qty'];
                    $priceArray[$bill_detail['bill_id']] += $bill_detail['price'];
                    // echo "add";
                } else {
                    $qtyArray[$bill_detail['bill_id']] = $bill_detail['qty'];
                    $priceArray[$bill_detail['bill_id']] = $bill_detail['price']; ///ถ้าบิลไอไม่เหมือนกันเอา key value นั้มาเป็นตัวตั้งง
                    // echo 'set';
                }
            };
        };
        // print_r($priceArray);
        foreach ($priceArray as $element) { // เอา ราคาเก็บไว้ในอาเรย์
            // echo $element . " ";
            array_push($price, $element);
            // print_r($price);
        }
        foreach ($qtyArray as $element) { // เอา ราคาเก็บไว้ในอาเรย์
            // echo $element . " ";
            array_push($qty, $element);
            // print_r($price);
        }
        return view("history", compact('billhistory','price','qty'));
    }
}
