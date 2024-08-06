<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

        * {
            margin: 0 !important;
            font-family: "Jost", sans-serif !important;
        }


        body {
            background-color: #8B8B8B !important;
        }

        .btnvisi {
            background: transparent !important;
            border: none !important;
            font-size: 5 !important;
        }

        .px-10 {
            padding: 2em 9.6em !important;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
        }

        .w-45 {
            width: 49.2%;
        }

        .sd {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
        }

        .w {
            width: 24em;
            height: 9em;
            padding-top: 3.125em;

        }

        .meta {
            font-size: 0.75rem;
        }

        .mall {
            margin: 0 auto !important;
        }

    </style>
</head>

<body>


    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cashier Management') }}
            </h2>
        </x-slot>



        <div class="py-10 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-scoll ">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        <div class="col-3 ">
                            <a href="/reservetable"><button type="button" class="btnvisi">
                                    <div class="card h-100 sd" style="width: 17.4rem; padding:2.7em 0;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">เพิ่มบิล</h5>
                                            <span class="btn btn-warning">+</span>
                                        </div>
                                    </div>
                                </button></a>
                        </div>
                        @if(count($bill)==0)
                        <div class="col-3 ">
                            <div class="card h-100 sd" style="width: 17.4rem; padding:2.7em 0;">
                                <div class="card-body">
                                    <h5 class="card-title text-center h3">ไม่มีบิล</h5>
                                </div>
                            </div>
                        </div>
                        @else
                        @php $i=0 @endphp
                        @foreach($bill as $bill)
                        <div class="col-3  mb-3">
                            <div class="card h-100 sd">
                                <div class="card-body ">
                                    <p class="card-text mb-4 float-end meta">{{$bill->created_at}}</p>
                                    <h5 class="card-title">บิลที่ : {{$bill->id}}</h5>
                                    <h5 class="card-title">โต๊ะที่ : {{$tableall[$i]}}</h5>
                                    <h6 class="card-subtitle mb-2">พนักงาน : {{$bill->user->name}}</h6>
                                    <!-- <p>ราคารวม: {{$priceall[$i]}} บาท </p> -->
                                    <p>ราคารวม: {{number_format($priceall[$i],2,".",",");}} บาท </p>
                                    <div class="text-center mt-3">
                                        <a href="/product/{{$tableall[$i]}}/1"><button class="btn btn btn-outline-success w-100">เพิ่มรายการสินค้า</button></a>
                                        <a href="/bill/detail/{{$tableall[$i]}}/{{$bill->id}}"><button class="btn btn btn-outline-success w-100">ชำระเงิน และ ดูรายระเอียดบิล</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $i+=1 @endphp
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>