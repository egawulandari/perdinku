<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request, UserService $userService){
        $dataUser = $request->all();
        $insert = $userService->Store($dataUser);

        if ($insert) {
            return redirect()->route('login')->with('success', 'Registrasi Berhasil! Silahkan Login');
        }else{
            return redirect()->back()->with('error', 'Gagal Registrasi!');
        }
    }
}
