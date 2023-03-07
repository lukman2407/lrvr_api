<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;

class tbl_trx_kry extends Model{
    // protected $connection = 'rmy_projek'; // kalau koneksinya cuman 1 gausa pake ini za
    protected $table = "trx_saldo_karyawan";
    // protected $primaryKey = 'id_komcek';
    protected $guarded = [];
    public $timestamps = false;
    public $inscremnting = false;
}
?>