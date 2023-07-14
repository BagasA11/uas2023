<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data ke 1
        DB::table('karyawans')->insert([
            //'id' => '',
            'username' => 'karyawan01',
            'nama' => 'Muhammad Alghozali',
            'role'=>'admin',
            'pass' => password_hash('karyawan01', PASSWORD_DEFAULT),
            
        ]);

        //data ke 2
        DB::table('karyawans')->insert([
            //'id',
            'username' => 'karyawan02',
            'nama' => 'Muhammad Ilham',
            'role'=>'admin',
            'pass' => password_hash('karyawan02', PASSWORD_DEFAULT),
            
        ]);
    }
}
