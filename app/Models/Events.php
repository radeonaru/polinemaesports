<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'id_event';
    protected $fillable = [
        'nama_event',
        'lokasi_event',
        'tanggal_event',
        'deskripsi_event',
        'gambar_event'
    ];
}
