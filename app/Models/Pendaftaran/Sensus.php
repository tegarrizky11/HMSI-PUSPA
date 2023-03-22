<?php

namespace App\Models\Pendaftaran;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Sensus extends Model
{
    use HasFactory, Loggable;
    protected $fillable = [
        'nama',
        'angkatan',
        'email',
        'whatsapp',
        'telepon',
        'keterangan',
        'status',
    ];
    protected $primaryKey = 'id';
    protected $table = 'pend_sensus';
    const tableName = 'pend_sensus';
}
