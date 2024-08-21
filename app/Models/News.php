<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $fillable = [
        'name_news',
        'deskripsi_news',
        'link_news',
        'gambar_news',
        'tombol_news',
    ];
}
