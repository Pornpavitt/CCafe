<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="seat">
        <button type="submit">เพิ่มโต๊ะ</button>
    </form>
    <form action="/management/add" method="post">
        @csrf
        <p><input type="text" name="name" required>ชื่อสิค้า</p>
        <p><input type="text" name="price" required>ราคา</p>
        <p><select name="type">
                <option value="1">อาหาร</option>
                <option value="2">เครื่องดื่ม</option>
                <option value="3">ของหวาน</option>
            </select></p>
        <p><input type="file" name="image" value=""></p>
        <p><input type="submit" value="เพิ่มสินค้า"></p>
    </form>

    @foreach($product as $pro)
    {{$pro->productsName}}->
    {{$pro->productsPrice}}->
    <a href="<?php echo "/management/delete/$pro->id"; ?>"> ลบข้อมูล </a>-->
    <a href="<?php echo "/edit/$pro->id"; ?>">แก้ไข</a><br>
    @endforeach
</body>

</html>