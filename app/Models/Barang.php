<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'jenis',
        'harga',
        'stock',
    ];

    public function show()
    {
        $item = Barang::all();    
        return $item;
    }
        
    
}
