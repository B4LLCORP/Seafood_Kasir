<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = "produks";
    protected $primaryKey = "ProdukID";
    protected $autoincrementing = "produks";
    protected $guarded =[];
}
