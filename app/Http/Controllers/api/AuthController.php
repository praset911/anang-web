<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'confirm_password' => 'required|same:password'
    ]);  

    if($validator->fails()){
        return response()->json([
            'success' => false,
            'message' => 'Terjadi Kesalahan',
            'data' => $validator->errors()
        ]);
    }

    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);

    $success['email'] = $user->email;
    $success['name'] = $user->name;

    return response()->json([
        'success' => true,
        'message' => 'Register Berhasil',
        'data' => $success
    ]);
  }

  public function login(Request $request)
  {
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
    {
        $auth=Auth::user();
        $success['token'] = $auth->createToken('auth_token')->plainTextToken;
        $success['name'] = $auth->name;

        return response()->json([
            'success' => true,
            'message' => 'Login Berhasil',
            'data' => $success
        ]);
    }else{
        return response()->json([
            'success' => false,
            'message' => 'cek kembali email dan password anda',
            'data' => null
        ]);
    }
  }

  public function getAllUsers()
{
    $users = User::all();

    return response()->json([
        'success' => true,
        'message' => 'Data semua pengguna berhasil diambil',
        'data' => $users
    ]);
}
}