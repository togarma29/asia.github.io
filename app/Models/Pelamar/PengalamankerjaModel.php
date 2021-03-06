<?php

namespace App\Models\Pelamar;

use CodeIgniter\Model;

class pengalamankerjaModel extends Model
{
  protected $table  = 'pengalamankerja';
  protected $useTimestamp = true;
  protected $allowedFields = ['userId', 'namaPerusahaan', 'jabatanAwal', 'jabatanAkhir', 'mulaiBekerja', 'akhirBekerja', 'gaji', 'namaAtasan', 'alasanKeluar'];

  protected $validationRules = [
    'namaPerusahaan' => 'required|alpha_numeric_punct',
  ];
  protected $validationMessages = [];
}
