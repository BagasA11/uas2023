<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('barangs')->insert([
            //'id' => '',
            'jenis' => 'Aqua botol 500ml',
            'harga' => 3000,
            'stock' => 100
        ]);

        DB::table('barangs')->insert([
            //'id' => '',
            'jenis' => 'Le Minerle botol 500ml',
            'harga' => 3500,
            'stock' => 100
        ]);
    }
}
