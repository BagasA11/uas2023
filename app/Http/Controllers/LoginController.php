<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //: RedirectResponse
    public function index(Request $req)
    {
       //validate input data
       $validated = $req->validate([
        'username' => 'required',
        'pass' => 'required'
       ]);

       //get validated data
       $user = $validated['username'];
       $pass = $validated['pass'];
       
       
       //get data by input
       $retrieve = Karyawan::where('username', $user)->first();
       //-> return data if succes : return null if fail
       /*
       echo '<br>';
       echo $passComp;
       */
      if(!$retrieve){
          $passComp = '';
          $id = '';
          return redirect('/');
        
       } else{
        $id = $retrieve->id;
        //get password
        $passComp = $retrieve->pass;
       }
      
       if(password_verify($pass, $passComp)){
        $req->session()->regenerate();
        $req->session()->put('id', $id);
        return redirect('dashboard');
       } else{
        return redirect('/');
       }

      // var_dump($retrieve);
       

    }

    /* @include('dashcomp.item',  [
                'item' => $item
            ])*/
   

    public function goHome()
    {
        $getid = session('id');
        
        if(!isset($getid))
        {
            session()->regenerate();
            return redirect('/');
        }

        //get profile by id
        $profile = Karyawan::where('id', $getid)->first();
        //$username = $profile->username;
        //$nama = $profile->nama;
        //$role = $profile->role;
        $barangModel = new Barang();
        $item = $barangModel->show();
        return view('dashboard', 
                        [
                           'username' => $profile->username,
                           'nama' => $profile->nama,
                           'role' => $profile->role,
                           'item' => $item
                        ]
                    );

    }

    public function logout(Request $req)
    {
        //ke halaman logout
        //hapus session
        //regenerate session
        //redirect to root
        //Auth::logout();
        //$req->session()->invalidate();
        $req->session()->flush();
        $req->session()->regenerateToken();
       // $session = session();
       
        return view('index');
    }

    public function menuKaryawan()
    {
        //mengecek session
        $getid = session('id');
        
        if(!isset($getid))
        {
            session()->regenerate();
            return redirect('/');
        }

        //mendapatkan data personal karyawan
        $profile = Karyawan::where('id', $getid)->first();
        $role = $profile->role;

        $karyawan = new Karyawan();
        $data = $karyawan->show();

        return view('menukaryawan', ['karyawan' => $data,
                                        'role' => $role,
                                    ]);
    }
}
