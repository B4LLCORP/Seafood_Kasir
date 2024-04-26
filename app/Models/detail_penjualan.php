<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    protected $table = "Detail_Penjualans";
    protected $primaryKey = "DetailID";
    protected $autoincrementing = "Detail_Penjualans";
    protected $guarded = [];
}
