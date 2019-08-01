<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(){
        return view('auth.changePassword');
    }

    public function changePasswordFinal(Request $request){
        $user = auth()->user();
        $id = $user->id;
        DB::table('users')->where(['id'=>$id])->update(['password'=>Hash::make($request->password)]);
    }
}
