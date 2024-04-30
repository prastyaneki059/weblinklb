<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class closingeod extends Model
{
    use HasFactory;
    protected $table = 'corp_d_closing';
    protected $fillable = [
        'nama','kode_store','shift','tanggal','setor_tunai','gambar'
    ];
}
