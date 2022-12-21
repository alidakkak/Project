<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class Testcontroller extends Controller
{

    ///////////// filters //////////////
    public function index(Request $request)
    {
        return User::filter($request)->get();
    }
    public function rand_exp() {
      return  User::all()->where("role","expert")->random(2);
    }
}


    /*
        // logout
    public function logout(Request $request) {
        $token = $request->header('auth-token');
        if($token) {
            try{
                JWTAuth::setToken($token)->invalidate();
            }catch(\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return 'some thing went wrongs';
            }
            return 'logged out successfully';
        }
        else
            return 'erroe 404';
    }*/
