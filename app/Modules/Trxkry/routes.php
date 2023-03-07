<?php
// use App\Modules\Komcek\Controllers\Komcek;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'v1/trx_kry', 'namespace' => 'App\Modules\Trxkry\Controllers','middleware' => ['api_token']], 
function (){
Route::get('/tbl_trx_kry','Trxkry@tbl_trx_kry');
// Route::post('/update_komcek','Komcek@update_komcek');
// Route::post('/insert_komcek','Komcek@insert_komcek');
// Route::post('tbl_komcek','Komcek@tbl_komcek')
});
?>