<?php

namespace App\Models;

use App\Models\shift;
use App\Models\masterstore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class closingeod extends Model
{
    use HasFactory;
    protected $table = 'corp_d_closing';
    protected $fillable = [
        'nama','kode_store','shift','tanggal','setor_tunai','gambar'
    ];


    /**
     * Get the masterstore that owns the closingeod
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function masterstore(): BelongsTo
    {
        return $this->belongsTo(masterstore::class);
    }
}
