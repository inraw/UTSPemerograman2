<?php

namespace App\Models;

use CodeIgniter\Model;

class MDosen extends Model
{
    protected $table            = 'dosen';
    protected $primaryKey       = 'id_dosen';

    protected $allowedFields    = ['nama_dosen', 'alamat_dosen', 'tanggal_lahir', 'matkul_dosen'];
}
