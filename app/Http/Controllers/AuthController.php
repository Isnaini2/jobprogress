<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $role = Auth::user()->role;
            if ($role == 'sdm') {
                return redirect('/usrsdm');
            } else if ($role == 'tpb') {
                return redirect('/usrtpb');
            } else if ($role == 'umum') {
                return redirect('/usrumum');
            } else if ($role == 'pbau') {
                return redirect('/usrpbau');
            } else if ($role == 'it') {
                return redirect('/usrit');
            } else if ($role == 'keuangan') {
                return redirect('/usrkeuangan');
            } else if ($role == 'pelkap') {
                return redirect('/usrpelkap');
            } else if ($role == 'manager') {
                return redirect('/usrmanager');
            } else if ($role == 'asistenmanager') {
                return redirect('/usrasistenmanager');
            }
        } else {
            return back();
        }
    }
}
