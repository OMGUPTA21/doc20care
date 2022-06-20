<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use Session;
use Crypt;
class LoginController extends Controller
{
    public function index(){
        return view ('doctor.login');
    }
    public function login(Request $request){

        $user = DoctorSignup::where('email', $request['email'])->get();
        if(Crypt::decrypt($user[0]->password)==$request['pass']){
            
            $request->session()->put('user',$user[0]->name);
            return view('Doctor.dashboard');
        }
    }
}
