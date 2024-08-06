<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

        * {
            margin: 0 !important;
            font-family: "Jost", sans-serif !important;
        }

        .mall {
            margin: 0 auto !important;

        }
    </style>
</head>

<body>
    <x-app-layout>
        @php $i=0;@endphp

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cashier Management') }}
            </h2>
        </x-slot>
        <div class="container mall pt-5">
            @foreach($billhistory as $bill)
            <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item border">
                    <h2 class="accordion-header" id="flush-heading<?php echo $bill->id; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $bill->id; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $bill->id; ?>">
                            บิลที่ : {{$bill->id}}
                        </button>
                    </h2>
                   
                    <div id="flush-collapse<?php echo $bill->id; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $bill->id; ?>" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            วันที่จ่าย : {{$bill->deleted_at}}
                            @foreach($bill->products as $bp)
                                <p>{{$bp->productsName}}</p>
                            @endforeach
                            <span class="d-flex justify-content-end">จำนวนทั้งหมด : {{number_format($qty[$i],0,".",",")}}</span>
                            <span class="d-flex justify-content-end">ราคารวมทั้งหมด : {{number_format($price[$i],0,".",",")}}</span>
                        </div>
                    </div>
                    
                </div>
            </div>
            @php $i+=1;@endphp
            @endforeach
        </div>
        
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>