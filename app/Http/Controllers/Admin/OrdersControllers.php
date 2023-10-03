<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersControllers extends Controller
{
    public function orders(){

        return view('admin.orders.orders');
    
        }

        

        public function pending(){

return view('admin.orders.pending');
        
}




public function progress(){

   return view('admin.orders.progress');

   }
         




   public function delivered(){

       return view('admin.orders.delivered');
   
       }


       public function list(){

return view('admin.orders.list');
       
}






       public function canceled(){

return view('admin.orders.canceled');
       
}


public function transactions(){

  return view('admin.orders.transactions');

  }



}
