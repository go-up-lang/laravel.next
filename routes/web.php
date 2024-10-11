<?php

use App\Models\Write;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

Route::post('/write', function (Request $request) {
    $input = $request->validate([
        'note' =>[
            'required',
            'string',
            'max:255',
        ],
    ]);

    $write = new Write();
    $write->note = $input['note'];
    //$write->user_id = Auth::id();
    $write->save();
});
