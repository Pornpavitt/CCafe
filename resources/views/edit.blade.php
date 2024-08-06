<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.D.I.T.H</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .mt {
                margin-top: 30px !important;
            }

            .btn {
                background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%) !important;
                color: white;
                padding: 15px 50px !important;
                margin-bottom: 20px !important;
                box-sizing: border-box !important;
                font-size: 1.2em !important;
            }

            .btn:hover {
                color: white !important;
                text-decoration: underline !important;
            }

            a:hover {
                text-decoration: underline !important;
            }

            * {
                font-family: "Jost", sans-serif !important;
            }

            section {
                height: 100vh !important;
                width: 100% !important;
                background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.5)),
                    url(https://i.pinimg.com/originals/ba/36/31/ba363114cb86bdac0e73bf15a881dd40.jpg) no-repeat center center/cover !important;
            }
        </style>
    </head>

    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h1 class="mb-5 display-5 fw-bold">แก้ไขรายการอาหาร</h1>

                                <form method="POST" action="/management/edit/">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <input type="text" name="id" value="<?php echo "$editid"; ?>" readonly class="form-control form-control-lg" />
                                        <label class="form-label" value="">ชื่อสินค้า</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="productsName" value="<?php echo "$editfood"; ?>" class="form-control form-control-lg" />
                                        <label class="form-label" value="">ชื่อสินค้า</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="productsPrice" value="<?php echo "$editprice"; ?>" class="form-control form-control-lg" />
                                        <label class="form-label" value="">ราคา</label>
                                    </div>
                                    <button class="btn btn-block" type="submit">บันทึก</button>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    </body>

    </html>
    <form action="/management/edit/" method="post">
        @csrf
        <input type="text" name="id" value="<?php echo "$editid"; ?>" readonly>
        <input type="text" name="productsName" value="<?php echo "$editfood"; ?>">
        <input type="text" name="productsPrice" value="<?php echo "$editprice"; ?>">
        <button type="submit" class="button">รายการ</button>

    </form>
</body>

</html>