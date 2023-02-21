<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketModel extends Model
{
    use HasFactory;

    protected $table = 'tiket';
    protected $primaryKey = 'id_tiket';
    protected $fillable = [
        'no_tiket', 
        'nama', 
        'alamat', 
        'no_hp', 
        'status', 
    ];
}
