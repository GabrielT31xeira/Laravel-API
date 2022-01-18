<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
            if(!$user || !Hash::check($request->password, $user->password)){
                return response(['message' => 'As credenciais não existem'],404);
            }
        $token = $user->createToken('my-app-token')->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 202);
    }

    public function register(RegisterRequest $request)
    {
        try{
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $response = [
                'name' => $request->name,
                'email' => $request->email,
            ];
            return response($response, 202);
        } catch (\Exception $e) {
            return response(['message' => 'Erro interno tente novamente mais tarde'],500);
        }
    }

    public function logout(){
        $user = request()->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response(['message' => 'Logout realizado com sucesso'], 202);

    }
}
