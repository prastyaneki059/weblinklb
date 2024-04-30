<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterstore extends Model
{
    use HasFactory;
    protected $table = 'master_toko';
    protected $fillable = [
        'kode_store','name_store'
    ];
}
