<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Barang;
use Illuminate\Http\Request;
//use Illuminate\Http\RedirectResponse;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    //show data to page
    public function index()
    {
        #get session data       
        $getid = session('id');
        if(!isset($getid))
        {
            session()->regenerate();
            return redirect('/');
        }

        $profile = Karyawan::where('id', $getid)->first();
        $role = $profile->role;

        return view('additem', 
                        [
                           'role' => $role
                        ]
                    );

    }

    //insert data to table
    public function save(Request $req)
    {
        //$validate = $req;
        $req->validate(
            [
                'jenis' => 'required',
                'hargajual' => 'required|min:100|integer',
                'hargabeli' => 'required|min:100|integer',
                'stock' => 'required|min:10|max:200|integer'
            ]
        );

        $barang = new Barang();
        $barang->jenis = $req->jenis;
        $barang->hargajual = $req->hargajual; 
        $barang->hargabeli = $req->hargabeli; 
        $barang->stock = $req->stock;
        $barang->save();
        return redirect('dashboard');
    }

    //delete data
    public function remove(int $id)
    {
        //return affected row
        $deleted = DB::table('barangs')->where('id', '=', $id)->delete();
        //affected row = 1
        if($deleted < 1){
            echo '<script>
                    alert("gagal");
                </script>';
        }

        return redirect('dashboard');
    }

    //refresh stock
    public function refresh(int $id)
    {
        $update = Barang::find($id);
        $update->stock = 100;
        $update->save();

        return redirect('dashboard');
    }
}
