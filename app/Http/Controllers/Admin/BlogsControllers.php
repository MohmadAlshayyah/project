<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsControllers extends Controller
{
    
    public function index(){
 
        return view('admin.blogs.index');
                 
        }

        
        

        public function blogs(){

            return view('admin.blogs.blogs');
                     
            }

            


            public function createblo(){

                return view('admin.blogs.createblo');
                         
                }

                


                public function createblogs(){

                    return view('admin.blogs.createblogs');
                             
                    }
    
                    public function email(){

                        return view('admin.blogs.email');
                                 
                        }


}
