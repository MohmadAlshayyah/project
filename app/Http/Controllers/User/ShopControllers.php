<?php

namespace App\Http\Controllers\User;
use App\Models\SubCategories;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopControllers extends Controller
{
    public function shop()
    {

        $hhs= SubCategories::select('id','name','category','old','categorie_id','photo') ->get();
        return view('user.shop.shop',compact('hhs'));
     
    }


    public function nosid()
    {
        $hhs= SubCategories::select('id','name','category','old','categorie_id','photo') ->get();
        return view('user.shop.nosid',compact('hhs'));
     
    }



    public function variation1()
    {

        $subcategories= Categories::find(47);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation1',compact('hhs')) ;
     
    }




    public function variation2()
    {
        $subcategories= Categories::find(46);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation2',compact('hhs')) ;
    }



    public function variation3()
    {
        $subcategories= Categories::find(48);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation3',compact('hhs')) ;
    }



    public function variation4()
    {
        $subcategories= Categories::find(51);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation4',compact('hhs')) ;
    }



    public function variation5()
    {
        $subcategories= Categories::find(50);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation5',compact('hhs')) ;
    }


    public function variation6()
    {
        $subcategories= Categories::find(49);
        $hhs = $subcategories -> Subcategories;
       return view('user.shop.variation6',compact('hhs')) ;
    }


    public function variation7()
    {
     return view('user.shop.variation7');
    }



 
}
