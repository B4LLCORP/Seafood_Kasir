<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggans";
    protected $primaryKey = "PelangganID";
    protected $autoincrementing = "pelanggans";
    protected $guarded = [];
}
