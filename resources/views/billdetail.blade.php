<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>billDetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: "Jost", sans-serif !important;
            box-sizing: border-box;
        }

        .wt {
            width: 36%;
            margin: 0 auto;
            background-color: white;
            box-sizing: border-box;
            border: 0.3 solid black;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .mall {
            margin: 0 auto !important;
            margin-top: 7em !important;
        }

        .w-45 {
            width: 35%;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <div class="wt h-100 p-5 mb-5 mt-2">
            <form action="/payment" method="post">
                <input type="text" name="bill_id" class="d-none" value="{{$bill->id}}">
                @csrf
                <h1 class="text-center display-4 fw-bold pt-2 pb-5">CC Cafe</h1>
                <p>โต๊ะ {{$table_id}}</p>
                <p>รหัสพนักงาน : {{$bill->usersID}}</p>
                <p>เบอร์โทร : 0924567550</p>
                <p class="pb-2">เวลาเข้าบิล : {{$bill->created_at}}</p>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">QTY</th>
                            <th colspan="2">ราคา</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=0; $total=0; $qty=0 @endphp
                        @foreach($bill->products as $product)
                        @php $total+=$bill_detail[$i]['price']; $qty+=$bill_detail[$i]['qty']; @endphp
                        <tr>
                            <th scope="row">{{$product->productsName}}</th>
                            <td>{{$bill_detail[$i]['qty']}}</td>
                            <td>{{$bill_detail[$i]['price']}}</td>
                        </tr>
                        @php $i+=1; @endphp
                        @endforeach
                    </tbody>
                </table>
                <h6 class="float-end">ทั้งหมด :{{number_format($qty,0,".",",")}} รายการ</h6><br>
                <h6 class="float-end">ราคารวม: {{number_format($total,0,".",",")}} บาท </h6>
                <img src="{{ URL::to('/public/uploads/product/qrcode.png') }}" width="25%" alt="qrc">


                <button type="submit" class="btn btn btn-outline-success position-absolute start-50 translate-middle w-45 mall">ชำระเงิน</button>
            </form>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>