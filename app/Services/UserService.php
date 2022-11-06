<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {
    public function Store(array $dataUser){
        $data = $dataUser;
        $result = User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
    
        ]);
        return $result;
    }
}
?>