<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservetable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

        * {
            margin: 0 !important;
            font-family: "Jost", sans-serif !important;
        }

        .pdbtn {
            box-sizing: border-box !important;
            padding: 4em !important;
            color: black !important;
        }

        .me {
            border: 5px red solid !important;
        }

        .maime {
            border: 5px green solid !important;
        }
        .mall{
            margin: 0 auto !important;
        }
    </style>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cashier Management') }}
        </h2>
    </x-slot>

    <div class="container overflow-auto mall py-10">
        <div class="row">
            @foreach($table as $tb)
            <a href="/product/{{$tb->id}}/1" class="col-2 mt-2 mb-2">
                    <button type="button" class="maime pdbtn btn-outline-light h6">โต๊ะ {{$tb->id}}<br>{{$tb->tableseats}} ที่นั่ง</button>
            </a>
            @endforeach
        </div>
    </div>
    <!-- <div class="container bg-white my-5 px-5 py-5 border">
        <div class="row">
            @foreach($table as $tb)
            <a href="/product/{{$tb->id}}/1" class="col-4 py-3 mx-1 mb-1 btn btn-primary">
                โต๊ะ {{$tb->id}}
                <p>{{$tb->tableseats}} ที่นั่ง</p>
            </a>
            @endforeach
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</x-app-layout>

</html>