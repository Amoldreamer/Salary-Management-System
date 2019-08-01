<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Validator;

class NewRegisterController extends Controller
{
    public function NewRegister(){
        $states = DB::table('states')->get();
        
        return view('auth.newRegister',compact('states'));
    }

    public function newRegisterFinal(Request $request){
        $validator = Validator::make($request->all(),[
            "name"=>"required",
            "email"=>"required|max:25|min:8|email|unique:users",
            "date_of_birth"=>"required|before:18 years ago",
            "password"=>"required|confirmed",
        ]);
        if($validator->fails()){
            return redirect("newRegister")->withErrors($validator);
        }
        else{
            if($request->hasfile('photo')){
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $file->move('public/uploads/highlights/',$fileName);
            }
            if($request->role == 'admin'){
                $role_id = 1;
            }
            elseif($request->role == 'employee'){
                $role_id = 2;
            }
            do {
                $reference_id = mt_rand( 100000, 999999 );
             } while ( DB::table( 'users' )->where( 'Register', $reference_id )->exists() );

                DB::table('users')->insert(['name'=>$request->name,'Register'=>$reference_id,'email'=>$request->email,'password'=>Hash::make($request->password),
                'mobile'=>$request->mobile,'date_of_birth'=>$request->date_of_birth,'address'=>$request->address,'city'=>$request->city,'state'=>$request->state,
                'photo'=>$fileName,'role_id'=>$role_id]);
                $last = DB::table('users')->latest('created_at')->first();
                if($request->role == 'admin'){
                    $role_id = 1;
                }
                elseif($request->role == 'employee'){
                    $role_id = 2;
                }

                DB::table('role_users')->insert(['role_id'=>$role_id,'user_id'=>$last->id]);
            }

        $data = DB::table('users')
                ->join('roles','users.role_id','=','roles.id')
                ->select('users.*','roles.*')
                ->get();
                

        return view('auth.newRegisterFinal',compact('data'));
    }
}
