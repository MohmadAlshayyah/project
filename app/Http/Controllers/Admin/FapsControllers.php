<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FapsControllers extends Controller
{
    

  public function categories(){

    return view('admin.faps.categories');
             
    }




    public function contents(){

        return view('admin.faps.contents');
                 
        }


        


        public function createcategories(){

            return view('admin.faps.createcategories');
                     
            }




            
            public function createcontents(){

                return view('admin.faps.createcontents');
                         
                }



}
