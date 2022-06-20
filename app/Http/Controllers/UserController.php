<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends Controller
{
    public function user(){
        $user = User::query()
                ->orderBy('id', 'desc')
                ->paginate(7);
        return view('/content/user/user',['user' => $user]);
    }
    
    public function search(Request $request){
        $cari = $request->cari;
        $user = User::query()
            ->where('username','like', '%'.$cari.'%')
            ->orWhere('name', 'like', '%'.$cari.'%')
            ->paginate();
        return view('/content/user/user', ['user' => $user]);
    }

    public function formUser(){
        return view('/content/user/formUser');
    }

    public function saveUser(Request $request){
        User::create([
            'username'=>$request->username,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect('/showUser')->with('alertCreate', 'Data Added  Successfully');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/showUser')->with('alertDelete', 'Data Deleted Successfully');
    }

    public function formupdateUser($id){
        $user = User::find($id);
        return view('/content/user/updateUser', ['user' => $user]);
    }

    public function updateUser($id, Request $request){
        $user = User::find($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/showUser')->with('alertUpdate', 'Data Changed Successfully');
    }

    public function login(){
        return view('login');
    }

    public function checkLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)
                    ->where('password',$request->password)
                    ->first();
        Auth::login($user);
        return redirect('/showDashboard');
    }

    public function cekLogin(Request $request){
        if (!Auth::attempt([
            'email' => $request-> email,
            'password' => $request-> pass
        ])){
            return redirect('/login');
        }
        else{
            return redirect('/dashboard');
        }
    }

    public function logout(){
        Auth::logout();
        
        return redirect('/login')->with('alertLogout', 'You Have Logged Out');
    }
}
