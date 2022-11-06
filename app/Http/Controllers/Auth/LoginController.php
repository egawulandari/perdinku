<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(AuthRequest $request){
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd($credential);

        if (Auth::attempt($credential)) {
            switch(Auth::user()->role){
                case 'Admin':
                return redirect()->route('admin.dashboard');
                    break;
                case 'Pegawai':
                    return redirect()->route('user.dashboard');
                    break;
                case 'DIVISI-SDM':
                    return redirect()->route('sdm.dashboard');
                    break;
                default:
                    return redirect()->route('login');
            }
        }else{
            return redirect()->back()->with('error','Gagal Login!');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
