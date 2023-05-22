<?php

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
    $data = [
        'navlinks' => config('extradb.navlinks'),
        'comicCards' => config('comics'),
        'dcItems' => config('extradb.dcitems'),
        'footerLinks' => config('extradb.footerlinks')
    ];

    return view('home', $data);
})->name('home');


Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    $data = [
        'navlinks' => config('extradb.navlinks'),
        'dcItems' => config('extradb.dcitems'),
        'footerLinks' => config('extradb.footerlinks')

    ];
    if ($id >= 0 && $id < count($comics)) {
        $data['comic'] = $comics[$id];
        return view('comics.show', $data);
    } else {
        abort('404');
    }
})->name('comics');
