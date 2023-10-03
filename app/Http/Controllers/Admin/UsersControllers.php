<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersControllers extends Controller
{
    
    public function user(){

        return view('admin.users.user');
                 
        }





        public function role(){

            return view('admin.users.role');
                     
            }





            public function createrole(){

                return view('admin.users.createrole');
                         
                }



                public function createuser(){

                    return view('admin.users.createuser');
                             
                    }
}
