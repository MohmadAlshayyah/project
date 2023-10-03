<?php

namespace App\Http\Controllers\User;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
class LoginControllers extends Controller
{
   
    public function singup()
    {
     return view('user.pages.singup');
    }


    public function forgotpass()
    {
     return view('user.pages.reset');
    }


 

    public function resetpass()
    {
     return view('user.pages.resetpass');
    }


    public function signin()
    {
     return view('user.pages.signin');
    }


    public function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('user.wishlist');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }



}
