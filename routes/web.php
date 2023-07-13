<?php
use App\Deposit;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/deposits', function (Request $request) {
    //
});

Route::delete('/deposit/{deposit}', function (Deposit $deposit) {
    //
});