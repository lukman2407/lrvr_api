<?php
namespace App\Modules\Trxkry\Controllers;
use App\Http\Controllers\Controller;
use App\Models\tbl_trx_kry;
use Illuminate\Http\Request; 
use App\Transformers\TblTrxKryTransformers;
use Exception;
use Validator;
class Trxkry extends Controller{
    public function tbl_trx_kry(){
        $data = \App\Models\tbl_trx_kry::get();
        $response = fractal()
        ->collection($data)
        ->transformWith(new TblTrxKryTransformers())
        ->toArray();

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $response['data']
        ]);
    } 

    

}
?>