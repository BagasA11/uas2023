<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Item</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        nav
        {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            background-color:rgb(184, 184, 255);
            
        }

        nav a
        {
            /*top, right, bottom, left*/
            margin: 5px 10px 10px 10px;
            font-size: 20px;
            text-decoration: none;
        }

        header
        {
            text-align: center;
            margin-top: 25px;
            color: rgb(70, 197, 255);
            border-bottom: 5px solid rgb(70, 197, 255);
            width: 100%;
            padding-bottom: 20px;
            height: 55px;
            padding-top: 5px;
        }

        form
        {
            width: 100%;
            background-color: rgb(236, 236, 236);
            padding-left: 300px;
        }

        form .formwrap
        {
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 50%;
            
        }

        button
        {
            font-size: 20px;
            height: 30px;
            padding-top: 2px;
            margin-bottom: 20px;
            color: white;
            background-color: rgb(118, 118, 230);
        }

    </style>
</head>
<body>
<!--navbar-->
@include('dashcomp.navbar')
<header>
    <h1>Tambah Data Barang</h1>
</header>
<form action="{{route('save')}}" method="post">
    @csrf
    <div class="formwrap">
        <br><br>
        <label for="jenis">nama barang : </label>
        <input type="text" id="jenis" name="jenis" placeholder="masukkan nama/merk barang secara lengkap">
        <br>
        <label for="hargajual">Harga Jual: </label>
        <input type="number" minlength="500" placeholder="1500" name="hargajual">
        <br>
        <label for="hargabeli">Harga Beli: </label>
        <input type="number" minlength="500" placeholder="1500" name="hargabeli">
        <br>
        <label for="stock">stock : </label>
        <input type="number" minlength="10" placeholder="masukkan stock barang" name="stock">
        <br>
        <button type="submit">
            send
        </button>
    </div>
</form>
</body>
</html>