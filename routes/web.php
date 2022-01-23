<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
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


//login user dan admin
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

// Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
//     Route::post('/login', 'App\Http\Controllers\pelindoController@loginpost')->middleware('isAdmin');
//     Route::get('/divisi', 'App\Http\Controllers\pelindoController@divisi');
//     Route::get('/sdm', 'App\Http\Controllers\pelindoController@');
//     Route::get('/umum', 'App\Http\Controllers\pelindoController@');
//     Route::get('/it', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pelkap', 'App\Http\Controllers\pelindoController@');
//     Route::get('/keuangan', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pbau', 'App\Http\Controllers\pelindoController@');
//     Route::get('/tpb', 'App\Http\Controllers\pelindoController@');
//     Route::get('/tambah', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmit', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmsdm', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmumum', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmpelkap', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmpbau', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmtpb', 'App\Http\Controllers\pelindoController@');
//     Route::get('/pkmkeuangan', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminit', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminsdm', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminumum', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminpelkap', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminpbau', 'App\Http\Controllers\pelindoController@');
//     Route::get('/admintpb', 'App\Http\Controllers\pelindoController@');
//     Route::get('/adminkeuangan', 'App\Http\Controllers\pelindoController@');
// });


//------------------------------PUNYA ADMIN--------------------------------------------------------
//Pilihan Admin
Route::get('/divisi', function () {
    return view('admin.halamanutama');
})->middleware('manager');

// View pkm dan job Admin
Route::get('/sdm', function () {
    return view('admin.sdm');
});

Route::get('/umum', function () {
    return view('admin.umum');
});

Route::get('/it', function () {
    return view('admin.it');
});
Route::get('/pelkap', function () {
    return view('admin.pelkap');
});
Route::get('/pbau', function () {
    return view('admin.pbau');
});

Route::get('/tpb', function () {
    return view('admin.tpb');
});

Route::get('/keuangan', function () {
    return view('admin.keuangan');
});

// View JOB ADMIN
Route::get('/adminit', 'App\Http\Controllers\pelindoController@jobit');
Route::get('/adminumum', 'App\Http\Controllers\pelindoController@jobumum');
Route::get('/adminsdm', 'App\Http\Controllers\pelindoController@jobSDM');
Route::get('/adminkeuangan', 'App\Http\Controllers\pelindoController@jobkeuangan');
Route::get('/admintpb', 'App\Http\Controllers\pelindoController@jobtpb');
Route::get('/adminpelkap', 'App\Http\Controllers\pelindoController@jobPelkap');
Route::get('/adminpbau', 'App\Http\Controllers\pelindoController@jobpbau');

//Add-Action JOB ADMIN
Route::POST('/add-jobit', 'App\Http\Controllers\pelindoController@addjobit');
Route::POST('/add-jobumum', 'App\Http\Controllers\pelindoController@addjobumum');
Route::POST('/add-jobsdm', 'App\Http\Controllers\pelindoController@addjobSDM');
Route::POST('/add-jobpbau', 'App\Http\Controllers\pelindoController@addjobpbau');
Route::POST('/add-jobtpb', 'App\Http\Controllers\pelindoController@addjobtpb');
Route::POST('/add-jobpelkap', 'App\Http\Controllers\pelindoController@addjobPelkap');
Route::POST('/add-jobkeuangan', 'App\Http\Controllers\pelindoController@addjobkeuangan');


//Update-Action JOB ADMIN
Route::POST('/update-jobit', 'App\Http\Controllers\pelindoController@updatejobit');
Route::POST('/update-jobumum', 'App\Http\Controllers\pelindoController@updatejobumum');
Route::POST('/update-jobsdm', 'App\Http\Controllers\pelindoController@updatejobSDM');
Route::POST('/update-jobpbau', 'App\Http\Controllers\pelindoController@updatejobpbau');
Route::POST('/update-jobtpb', 'App\Http\Controllers\pelindoController@updatejobtpb');
Route::POST('/update-jobpelkap', 'App\Http\Controllers\pelindoController@updatejobPelkap');
Route::POST('/update-jobkeuangan', 'App\Http\Controllers\pelindoController@updatejobkeuangan');


//Delete-Action JOB ADMIN
Route::get('/delete-jobit/{id}', 'App\Http\Controllers\pelindoController@deletejobit');
Route::get('/delete-jobumum/{id}', 'App\Http\Controllers\pelindoController@deletejobumum');
Route::get('/delete-jobsdm/{id}', 'App\Http\Controllers\pelindoController@deletejobSDM');
Route::get('/delete-jobpbau/{id}', 'App\Http\Controllers\pelindoController@deletejobpbau');
Route::get('/delete-jobtpb/{id}', 'App\Http\Controllers\pelindoController@deletejobtpb');
Route::get('/delete-jobpelkap/{id}', 'App\Http\Controllers\pelindoController@deletejobPelkap');
Route::get('/delete-jobkeuangan/{id}', 'App\Http\Controllers\pelindoController@deletejobkeuangan');


// View PKM ADMIN

Route::get('/pkmit', 'App\Http\Controllers\pelindoController@pkmIT');
Route::get('/pkmumum', 'App\Http\Controllers\pelindoController@pkmumum');
Route::get('/pkmsdm', 'App\Http\Controllers\pelindoController@pkmsdm');
Route::get('/pkmpbau', 'App\Http\Controllers\pelindoController@pkmpbau');
Route::get('/pkmtpb', 'App\Http\Controllers\pelindoController@pkmTPB');
Route::get('/pkmpelkap', 'App\Http\Controllers\pelindoController@pkmPelkap');
Route::get('/pkmkeuangan', 'App\Http\Controllers\pelindoController@pkmKeuangan');

//Add-Action pkm
Route::POST('/add-pkmit', 'App\Http\Controllers\pelindoController@addpkmIT');
Route::POST('/add-pkmumum', 'App\Http\Controllers\pelindoController@addpkmumum');
Route::POST('/add-pkmsdm', 'App\Http\Controllers\pelindoController@addpkmsdm');
Route::POST('/add-pkmpbau', 'App\Http\Controllers\pelindoController@addpkmPBAU');
Route::POST('/add-pkmtpb', 'App\Http\Controllers\pelindoController@addpkmTPB');
Route::POST('/add-pkmpelkap', 'App\Http\Controllers\pelindoController@addpkmPelkap');
Route::POST('/add-pkmkeuangan', 'App\Http\Controllers\pelindoController@addpkmKeuangan');


//Update-Action
Route::POST('/update-pkmit', 'App\Http\Controllers\pelindoController@updatepkmIT');
Route::POST('/update-pkmumum', 'App\Http\Controllers\pelindoController@updatepkmumum');
Route::POST('/update-pkmsdm', 'App\Http\Controllers\pelindoController@updatepkmsdm');
Route::POST('/update-pkmpbau', 'App\Http\Controllers\pelindoController@updatepkmPBAU');
Route::POST('/update-pkmtpb', 'App\Http\Controllers\pelindoController@updatepkmTPB');
Route::POST('/update-pkmpelkap', 'App\Http\Controllers\pelindoController@updatepkmPelkap');
Route::POST('/update-pkmkeuangan', 'App\Http\Controllers\pelindoController@updatepkmKeuangan');


//Delete-Action
Route::get('/delete-pkmit/{id}', 'App\Http\Controllers\pelindoController@deletepkmIT');
Route::get('/delete-pkmumum/{id}', 'App\Http\Controllers\pelindoController@deletepkmumum');
Route::get('/delete-pkmsdm/{id}', 'App\Http\Controllers\pelindoController@deletepkmsdm');
Route::get('/delete-pkmpbau/{id}', 'App\Http\Controllers\pelindoController@deletepkmPBAU');
Route::get('/delete-pkmtpb/{id}', 'App\Http\Controllers\pelindoController@deletepkmTPB');
Route::get('/delete-pkmpelkap/{id}', 'App\Http\Controllers\pelindoController@deletepkmPelkap');
Route::get('/delete-pkmkeuangan/{id}', 'App\Http\Controllers\pelindoController@deletepkmKeuangan');



//------------------------------PUNYA USER--------------------------------------------------------
// View pkm dan job

Route::middleware(['auth'])->group(function () {
    Route::middleware(['sdm'])->group(function () {
        Route::get('/usrsdm', function () {
            return view('pengguna.sdm');
        });
        Route::get('/userpkmsdm', 'App\Http\Controllers\pelindoController@sdm');
        Route::get('/usersdm', 'App\Http\Controllers\pelindoController@penggunaSDM');
        Route::POST('/add-usersdm', 'App\Http\Controllers\pelindoController@addpenggunaSDM');
        Route::POST('/update-usersdm', 'App\Http\Controllers\pelindoController@updatepenggunaSDM');
        Route::POST('/update-status-usersdm', 'App\Http\Controllers\pelindoController@updatestatuspenggunasdm');
        Route::get('/delete-usersdm/{id}', 'App\Http\Controllers\pelindoController@deletepenggunaSDM');
    });

    Route::middleware(['umum'])->group(function () {
        Route::get('/usrumum', function () {
            return view('pengguna.umum');
        });
        Route::get('/userpkmumum', 'App\Http\Controllers\pelindoController@umum');
        Route::get('/userumum', 'App\Http\Controllers\pelindoController@penggunaumum');
        Route::POST('/add-userumum', 'App\Http\Controllers\pelindoController@addpenggunaumum');
        Route::POST('/update-userumum', 'App\Http\Controllers\pelindoController@updatepenggunaumum');
        Route::POST('/update-status-userumum', 'App\Http\Controllers\pelindoController@updatestatuspenggunaumum');
        Route::get('/delete-userumum/{id}', 'App\Http\Controllers\pelindoController@deletepenggunaumum');
    });

    Route::middleware(['it'])->group(function () {
        Route::get('/usrit', function () {
            return view('pengguna.it');
        });
        Route::get('/userpkmit', 'App\Http\Controllers\pelindoController@index');
        Route::get('/userit', 'App\Http\Controllers\pelindoController@penggunait');
        Route::POST('/add-userit', 'App\Http\Controllers\pelindoController@addpenggunait');
        Route::POST('/update-userit', 'App\Http\Controllers\pelindoController@updatepenggunait');
        Route::POST('/update-status-userit', 'App\Http\Controllers\pelindoController@updatestatuspenggunait');
        Route::get('/delete-userit/{id}', 'App\Http\Controllers\pelindoController@deletepenggunait');
    });

    Route::middleware(['pelkap'])->group(function () {
        Route::get('/usrpelkap', function () {
            return view('pengguna.pelkap');
        });
        Route::get('/userpkmpelkap', 'App\Http\Controllers\pelindoController@Pelkap');
        Route::get('/userpelkap', 'App\Http\Controllers\pelindoController@penggunapelkap');
        Route::POST('/add-userpelkap', 'App\Http\Controllers\pelindoController@addpenggunapelkap');
        Route::POST('/update-userpelkap', 'App\Http\Controllers\pelindoController@updatepenggunapelkap');
        Route::POST('/update-status-userpelkap', 'App\Http\Controllers\pelindoController@updatestatuspenggunapelkap');
        Route::get('/delete-userpelkap/{id}', 'App\Http\Controllers\pelindoController@deletepenggunapelkap');
    });

    Route::middleware(['pbau'])->group(function () {
        Route::get('/usrpbau', function () {
            return view('pengguna.pbau');
        });
        Route::get('/userpkmpbau', 'App\Http\Controllers\pelindoController@PBAU');
        Route::get('/userpbau', 'App\Http\Controllers\pelindoController@penggunapbau');
        Route::POST('/add-userpbau', 'App\Http\Controllers\pelindoController@addpenggunapbau');
        Route::POST('/update-userpbau', 'App\Http\Controllers\pelindoController@updatepenggunapbau');
        Route::POST('/update-status-userpbau', 'App\Http\Controllers\pelindoController@updatestatuspenggunapbau');
        Route::get('/delete-userpbau/{id}', 'App\Http\Controllers\pelindoController@deletepenggunapbau');
    });

    Route::middleware(['tpb'])->group(function () {
        Route::get('/usrtpb', function () {
            return view('pengguna.tpb');
        });
        Route::get('/userpkmtpb', 'App\Http\Controllers\pelindoController@TPB');
        Route::get('/usertpb', 'App\Http\Controllers\pelindoController@penggunatpb');
        Route::POST('/add-usertpb', 'App\Http\Controllers\pelindoController@addpenggunatpb');
        Route::POST('/update-usertpb', 'App\Http\Controllers\pelindoController@updatepenggunatpb');
        Route::POST('/update-status-usertpb', 'App\Http\Controllers\pelindoController@updatestatuspenggunatpb');
        Route::get('/delete-usertpb/{id}', 'App\Http\Controllers\pelindoController@deletepenggunatpb');
    });

    Route::middleware(['keuangan'])->group(function () {
        Route::get('/usrkeuangan', function () {
            return view('pengguna.keuangan');
        });
        Route::get('/userpkmkeuangan', 'App\Http\Controllers\pelindoController@keuangan');
        Route::get('/userkeuangan', 'App\Http\Controllers\pelindoController@penggunakeuangan');
        Route::POST('/add-userkeuangan', 'App\Http\Controllers\pelindoController@addpenggunakeuangan');
        Route::POST('/update-userkeuangan', 'App\Http\Controllers\pelindoController@updatepenggunakeuangan');
        Route::POST('/update-status-userkeuangan', 'App\Http\Controllers\pelindoController@updatestatuspenggunakeuangan');
        Route::get('/delete-userkeuangan/{id}', 'App\Http\Controllers\pelindoController@deletepenggunakeuangan');
    });
});



// View PKM USER

//View Job USER

//Add-Action JOB PENGGUNA

//Update-Action JOB PENGGUNA

//update-status-userit

//Delete-Action JOB PENGGUNA
