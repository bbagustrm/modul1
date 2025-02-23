<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model {
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'id_admin',
        'nama_admin',
        'alamat',
        'username',
        'password'
    ];

    public $timestamps = false;
}
