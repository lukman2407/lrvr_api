<?php 
namespace App\Transformers;

use App\Models\tbl_trx_kry;
use League\Fractal\TransformerAbstract;
//ini kia
class TblTrxKryTransformers extends TransformerAbstract
{
    public function transform(tbl_trx_kry $data){
    return [
        
        'tanggal' => $data->tanggal,
        'toko' => $data->toko,
        'nokartu' => $data->nokartu,
        'nostruk' => $data->nostruk,       
        'nocp' => $data->nocp,
        'nilai' => $data->nilai,
        'status' => $data->status,
        'kasir' => $data->kasir

    ];
}
} 