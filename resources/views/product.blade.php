<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

        * {
            margin: 0 !important;
            font-family: "Jost", sans-serif !important;
        }

        .btnvisi {

            background: transparent !important;
            border: none !important;
            font-size: 0 !important;
        }

        .mt-0 {
            margin: 0 !important;
        }

        .pd {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .bottomq {
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .w-45 {
            width: 45% !important;
        }

        .w-95 {
            width: 99% !important;
        }

        .mcoauto {
            margin: 0 auto !important;
        }

        .active {
            background-color: #FFAF92 !important;
        }

        .bg-cos {
            box-sizing: border-box !important;
            border-right: solid 1px black !important;
        }

        .textbot {
            position: absolute;
            bottom: 0;
        }

        .fix {
            position: fixed;
        }

        .mall {
            padding: 0 auto;
        }

        .pall {
            margin: 0 auto !important;
        }

        .test {
            width: 100%;
            background-color: red;
        }

        .mb-6 {
            margin-bottom: 3.6em !important;
        }

        .mt-10 {
            margin-top: 38em !important;
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        .openBtn {
            display: flex;
            justify-content: left;
        }

        .openButton {
            border: none;
            border-radius: 5px;
            background-color: #1c87c9;
            color: white;
            padding: 14px 20px;
            cursor: pointer;
            position: fixed;
        }

        .loginPopup {
            position: absolute;
            text-align: center;
            width: 100%;
        }

        .formPopup {
            display: none;
            position: fixed;
            left: 50%;
            top: 18%;
            transform: translate(-50%, 5%);
            z-index: 9;
            border-radius: 15px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        .formContainer {
            width: 35em;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
        }

        .formContainer input[type=text],
        .formContainer input[type=password] {
            width: 100%;
            border: none;
            background: #eee;
        }

        .formContainer input[type=text]:focus,
        .formContainer input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        .formContainer .btn {
            padding: 12px 20px;
            border: none;
            background-color: green;
            color: #fff;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
            opacity: 0.8;
            font-size: 1.1em;
        }

        .formContainer .cancel {
            background-color: #cc0000;
        }

        .formContainer .btn:hover,
        .openButton:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container-field">
        <div class="row">
            <div class="col-lg-2 mt-0 pd">

                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-cos vh-100">
                    <a href="/redirects" class="d-flex align-items-center mb- mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-4 fw-bold" style="color:black;">Choose food</span>
                    </a>
                    <hr class="my-2">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item my-2">
                            <a id="link1" href="/product/{{$tableID}}/1" class="nav-link text-dark" aria-current="page">
                                อาหาร
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a id="link2" href="/product/{{$tableID}}/2" class="nav-link text-dark">
                                เครื่องดื่ม
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a id="link3" href="/product/{{$tableID}}/3" class="nav-link text-dark">
                                ของหวาน
                            </a>
                        </li>
                        <!-- <form action="/search" method="post">
                                @csrf
                                <input type="text" class="d-none" name="table_id" value="{{$tableID}}">
                                <input type="text" name="" value="">
                                <input type="text" name="product" placeholder="ค้นหาสินค้า" value="">
                                <button type="submit">ค้นหา</button>
                            </form> -->
                        <li class="nav-item my-2 textbot">
                            <a id="link3" href="{{route('management',1)}}" class="nav-link text-dark ">
                                จัดการสินค้า
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 pd overflow-auto vh-100">
                <div class="row mb-2">
                    @foreach($dep->products as $pro)
                    <div class="col-4 mt-2">
                        <!-- <a href="/add/product/{{$tableID}}/{{$pro->id}}"> -->
                        <button type="button" class="btnvisi" onclick="openForm(<?php echo $pro->id; ?>,'<?php echo $pro->productsName; ?>')">
                            <div class="card mb-3 h-100 w-100">
                                <img src="{{$pro->product_photo}}" class="card-img-top " height="250px" width="250px" alt="{{$pro->productsName}}">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{$pro->productsName}} {{$pro->productsPrice}}</h5>
                                </div>
                            </div>
                        </button>
                        <!-- </a> -->
                    </div>
                    @endforeach


                </div>

            </div>
            <div class="col-lg-3 pd">
                <div class="card vh-100">
                    <h1 class="mt-2 mall">โต๊ะ {{$tableID}}</h1>
                    <div class="row px-1">
                        <div class="col-3 mt-2">
                            สินค้า
                        </div>
                        <div class="col-3 mt-2">
                            Qty
                        </div>
                        <div class="col-3 mt-2">
                            ราคารวม
                        </div>
                        <div class="col-3 mt-2">
                        </div>
                    </div>
                    <hr class="mt-2">
                    <div class="overflow-auto">
                        <div class="card-body  w-95 mcoauto">
                            <div class="container-field">
                                
                                <!-- <form action="/delete" method="post"> -->
                                @csrf
                                @php
                                $total_price=0;
                                $sumqty = 0;
                                @endphp
                                <!-- ลูปสินค้าทั้งหมดตาม bill id แสดงราคาและจำนวน-->
                                @for($i=0;$i<count($bill_productArray);$i++) @php $total_price+=$bill_productArray[$i]['price']; $sumqty+=$bill_productArray[$i]['qty']; @endphp <div class="row">
                                    <div class="row border-bottom py-2"> 
                                        <p class="col-3">{{$productName[$i]}}</p>
                                        <p class="col-3">{{number_format($bill_productArray[$i]['qty'],0,".",",")}}</p>
                                        <p class="col-3">{{number_format($bill_productArray[$i]['price'],0,".",",")}}</p>
                                        <a class="btn btn-secondary col-3" href="/deleteorder/{{$bill_id}}/{{$productIdAll[$i]}}/{{$tableID}}/{{$dep->id}}">ลบข้อมูล</a>
                                    </div>
                            </div>
                            @endfor

                            <div class="bottomq text-right w-100 ">
                                <div class="my-2 d-flex justify-content-around">
                                    <a class="btn btn-primary w-95" href="/delete/{{$bill_id}}/{{Auth::user()->id}}/{{$tableID}}">บันทึก</a>
                                    <!-- <button type="button" class="btn btn-success w-45">ดูรายละเอียด</button> -->
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>

                </div>

                <hr class="mt-2" style="border: 2px solid black; ">
                <div class=" mt-2 mb-2 " style="z-index: 99;">
                    <p style="z-index: 99;">ทั้งหมด {{number_format($sumqty,0,".",",")}} รายการ</p>
                    <p style="z-index: 99;">Total: {{number_format($total_price,2,".",",")}}</p>
                </div>
                <hr style="border: 2px solid black;" class="mb-6">


            </div>
        </div>
        <div class="loginPopup">
            <div class="formPopup" id="popupForm">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form action="/add/product" method="get" class="formContainer">
                            <input id="productID" type="text" name="id" class="d-none" value="">
                            <input type="text" name="tid" class="d-none" value="{{$tableID}}">
                            <input id="productName" class="form-control mb-2" type="text" value="" readonly>
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control form-control-lg" name="productQty" placeholder="จำนวนอาหาร" required>
                            </div>
                            <button type="submit" class="btn mb-4">ยืนยัน</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script>
        const link = document.querySelector("#link<?php echo "$dep->id"; ?>");
        link.classList.add('active', 'text-white');
        link.classList.remove('text-dark');
    </script>
    <script>
        function openForm(id, name) {
            document.getElementById("popupForm").style.display = "block";
            const productID = document.querySelector('#productID');
            const productName = document.querySelector('#productName');
            productID.value = id;
            productName.value = name;
        }

        function closeForm() {
            document.getElementById("popupForm").style.display = "none";
        }
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>