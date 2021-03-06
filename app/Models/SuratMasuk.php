<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class);
    }
    public function disposisi()
    {
        return $this->hasMany(Disposisi::class);
    }
}
