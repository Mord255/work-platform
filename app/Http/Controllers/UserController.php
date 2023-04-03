<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class UserController extends Controller{

    public function index(){
        return view('layouts/main');
    }

    public function login(){
        return view('layouts/login');
    }

    public function register(){
        return view('layouts/register');
    }

    public function loguear(Request $request){
        try {
            DB::beginTransaction();

            if ($request->email != '' && $request->password != '') {
                $user = User::where('email',$request->email)->where('password',$request->password)->where('state',true)->first();
                if ($user) {
                    return response()->json(['success'=>true,'message'=>'Bienvenido','data'=>$user],200);
                }else{
                    return response()->json(['success'=>false,'message'=>'Usuario Incorrecto'],400);
                }
            }else{
                return response()->json(['success'=>false,'message'=>'Usuario Incorrecto'],400);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()],500);//->getMessage()
        }
    }

    public function createUser(Request $request){
        try {
            DB::beginTransaction();

            if ($request->name != '' && $request->lastname != '' && $request->email != '' && $request->password != '' && $request->id_rol != '') {

                $email = User::where('email',$request->email)->first();
                if ($email) return response()->json(['success'=>false,'message'=>'El correo ya existe'],400);

                $user = new User();
                $user->name = $request->name;
                $user->lastname = $request->lastname;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->id_rol = $request->id_rol;
                $user->save();

                return response()->json(['success'=>true,'message'=>'Usuario Creado Exitosamente'],200);
            }else{
                return response()->json(['success'=>false,'message'=>'Campos Incompletos'],400);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()],500);//->getMessage()
        }
    }

}
