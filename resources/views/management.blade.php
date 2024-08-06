<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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
            background-color:#FFAF92  !important;
        }

        .bg-cos {
            box-sizing: border-box !important;
            border-right: solid 1px black !important;
        }

        .navsea {
            width: 100%;
            height: 3.5em;
            background-color: red;
            position: fixed;
            z-index: 2;
        }

        .ml-500 {
            margin-right: -500px;
        }

        .w-90 {
            width: 90% !important;
        }

        .card-img-top {
            width: 100% !important;
            height: 15vw !important;
            object-fit: cover !important;
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
                            <a id="link1" href="{{route('management',1)}}" class="nav-link text-dark" aria-current="page">
                                อาหาร
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a id="link2" href="{{route('management',2)}}" class="nav-link text-dark">
                                เครื่องดื่ม
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a id="link3" href="{{route('management',3)}}" class="nav-link text-dark">
                                ของหวาน
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 pd overflow-auto vh-100">
                <div class="row mb-2">

                    @foreach($categorys->products as $row)
                    <div class="col-4 mt-2 h-100 d-flex align-items-stretch">
                        <button type="button" class="btnvisi">
                            <div class="card mb-3 w-100">
                                <img src="{{$row->product_photo}}" class="card-img-top w-100" alt="{{$row->productsName}}">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$row->productsName}}</h5>
                                </div>
                                <div class="d-flex">
                                    <a href="<?php echo "/edit/$row->id"; ?>" class="btn btn-warning w-100 rounded-0">แก้ไข</a>
                                    <a href="<?php echo "/management/delete/$row->id"; ?>" class="btn btn-danger w-100 rounded-0">ลบ</a>
                                </div>
                        </button>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-3 pd">
                <div class="card vh-100" style="z-index: 5;">
                    <div class="card-body mx-2 w-95 mcoauto">
                        <div class="container-field">
                            <p class="h1 text-center">เพิ่มโต๊ะ</p>
                            <hr class="mt-2">
                            <div class=" text-right w-100 mt-4">
                                <form action="/reservetable/create" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="seat" placeholder="จำนวนที่นั่ง">
                                    </div>
                                    <div class="my-2 d-flex justify-content-around">
                                        <button type="submit" class="btn btn-primary w-100">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card vh-100 mt-5" style="z-index: 5;">
                        <div class="card-body mx-2 w-95 mcoauto">
                            <div class="container-field">
                                <p class="h1 text-center">เพิ่มอาหาร</p>
                                <hr class="mt-2">
                                <div class=" text-right w-100 mt-4">
                                    <form action="/management/add" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" name="name" class="form-control" placeholder="ชื่ออาหาร">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" name="price" class="form-control" placeholder="ราคา">
                                        </div>
                                        <select class="form-select form-select-sm mb-4" aria-label=".form-select-lg example" name="type">
                                            <option selected>Open This Select Menu</option>
                                            <option value="1">อาหาร</option>
                                            <option value="2">เครื่องดื่ม</option>
                                            <option value="3">ของหวาน</option>
                                        </select>
                                        <div class="mb-4 ">
                                            <input class="form-control p-2" type="file" id="formFile" name="img">
                                        </div>
                                        <div class="my-2 d-flex justify-content-around">
                                            <button type="submit" class="btn btn-primary w-100">บันทึก</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <script>
            const link = document.querySelector("#link<?php echo "$categorys->id"; ?>");
            link.classList.add('active', 'text-white');
            link.classList.remove('text-dark');
        </script>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>