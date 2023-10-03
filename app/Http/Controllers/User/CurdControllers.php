<?php

namespace App\Http\Controllers\User;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurdControllers extends Controller
{
 



   public function electronics(){
    $subcategories= Categories::find(47);
            $hhs = $subcategories -> Subcategories;
           return view('user.home.electronics',compact('hhs')) ;
  
      }


      

   public function fashion()
   {
      $subcategories= Categories::find(48);
      $hhs = $subcategories -> Subcategories;
     return view('user.home.fashion',compact('hhs')) ;
    
   }




   public function furniture()
   {
      $subcategories= Categories::find(50);
      $hhs = $subcategories -> Subcategories;
     return view('user.home.furniture',compact('hhs')) ;
    
   }



   public function jewellery()
   {
      $subcategories= Categories::find(49);
      $hhs = $subcategories -> Subcategories;
     return view('user.home.jewellery',compact('hhs')) ;
    
   }



   public function multipurpose()
   {
      $subcategories= Categories::find(51);
      $hhs = $subcategories -> Subcategories;
     return view('user.home.multipurpose',compact('hhs')) ;
   }


   public function nft()
   {

      $subcategories= Categories::find(46);
      $hhs = $subcategories -> Subcategories;
     return view('user.home.nft',compact('hhs')) ;
    
   }




   public function rtl()
   {
    return view('user.home.rtl');
   }




   public function shop()
   {
    return view('user.home.shop');
   }


 
}
