<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'my_flights'; // menuju ke tabel database yang di inginkan
    // protected $primaryKey = 'flight_id'; // memberi tau klw ini primarykey
    // public $incrementing = false; // memberita klw ini incremen
    // protected $keyType = 'string'; // memberti tau type data
    // public $timestamps = false; // memberi tau klw tidak ada tabel timestamps
}
