<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            padding-top : 0px;
            padding-bottom: 5px;
            height: 80px;
            /*background-color:rgb(184, 184, 255); */
        }

        .tambah{
            margin-top: 10px;
            margin-bottom: 0px;
            width: 100%;
            text-align: center;
            background-color: rgb(207, 207, 207);
        }
        table
        {
            width: 100%;
        }

        table thead
        {
            background-color: rgb(207, 207, 207);
            height: 30px;
            font-size: 20px;
            padding-top: 5px;     
        }
         
        table tbody tr
        {
            height: 25px;
            font-size: 15px;
            margin-bottom: 5px;
            padding: 2px;
            text-align: center;
            border-bottom:2px solid black ; 
        }

        table tbody tr #id
        {
            width: 10px;
        }

        /*
        table tbody tr #username
        {
            width: 50px;
        }
        table .harga
        {
            width: 90px;
        }*/
        table tbody .complete 
        {
            background-color: rgb(234, 234, 234);
        }
        
    </style>
</head>
<body>
    @include('dashcomp.navbar')
    <h1>daftar pegawai</h1>

    <br>
    <table>
        <thead>
            <tr>
                <th id="id">id karyawan</th>
                <th id="username">username</th>
                <th>nama lengkap</th>
                <th class="harga">role</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp
            @foreach ($karyawan as $karyawans)
            
            <tr @if ($i % 2 == 0) class="complete" 
            @endif>
                <td id="id">
                    {{$karyawans->id}}
                </td>
                <td id="username">
                    {{$karyawans->username}}
                </td>
                <td class="harga">
                    {{$karyawans->nama}}
                </td>
                <td class="harga">
                    {{$karyawans->role}}
                </td>
                <td>edit</td>
                <td>hapus</td>
            </tr>
            @php
                $i +=1;
            @endphp
            @endforeach
            
        </tbody>
    </table>
</body>
</html>