<?php

namespace App\Http\Controllers\User;
use App\Models\Cart;
use App\Models\Details;
use App\User;
use App\Models\SubCategories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function account()
    {
     return view('user.pages.account');
    }


    public function cart()
    {
        
        return view('user.pages.cart');
      
    }


    public function remove(Request $request)
    {
        if($request -> id )
        {
            $cart =session()->get('cart');
            if(isset($cart[$request -> id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart) ;
            }
            session()->flash('session','jbsvskvhsvsdhdsvds');
        }
      
    }


    public function addwishlist($id)
    {

        $subcategors = SubCategories::findOrFail($id);
        $likes = session()->get('likes',[]);
        if(isset($likes[$id])){
         $likes[$id]['quantity']++;
 
        }else
        {
         $likes[$id]=[
             "name" => $subcategors -> name,
             "category" => $subcategors -> category,
             "photo" => $subcategors -> photo,
             "quantity" => 1
         ];
        }
        session()->put('likes',$likes);
        return redirect()->back()->with('success','Category has been added to cart');
     }
    

    public function addproducttocart($id)
    {
        $subcategors = SubCategories::findOrFail($id);
       $carts = session()->get('carts',[]);
       if(isset($carts[$id])){
        $carts[$id]['quantity']++;

       }else
       {
        $carts[$id]=[
            "name" => $subcategors -> name,
            "category" => $subcategors -> category,
            "photo" => $subcategors -> photo,
            "quantity" => 1
        ];
       }
       session()->put('carts',$carts);
       return redirect()->back()->with('success','Category has been added to cart');
    }

    public function cartupdeate(Request $request)
    {
  if($request -> id && $request -> quantity){
$cart  = session()->get('cart');
$cart[$request -> id]["quantity"] = $request->quantity;
session()->put('cart' , $cart);
session()->falsh('session' , 'gfhbrkhgkshksuhsdkfsdh');
    
        
    }

    }


    public function cartdelete(Request $request){

       if($request -> id){
$carts= session()->get('carts');
if(isset($carts[$request -> id])){

unset($carts[$request -> id]);
session()->put('carts',$carts);


}
session()->flash('success','SFHJHVBDFKVJBDVKDSB');


       }
       
       
               }




               public function storecheckout(Request $request){
              
                Details::create([
                 
                                    'f_name'=> $request -> f_name ,
                                    'l_name' => $request -> l_name,
                                    'company_name' => $request -> company_name,
                                    'rehion' => $request -> rehion,
                                    'street'=> $request -> street ,
                                    'suite' => $request -> suite,
                                    'city' => $request -> city,
                                    'country' => $request -> country,
                                    'phone'=> $request -> phone ,
                                    'email' => $request -> email,
                                 
                                ]);

                                $details= Details::select('id','f_name','l_name','company_name','rehion','street','suite','city','country','phone','email') ->get();
                                return view('user.pages.checkout',compact('details'));
                
                
                            }





    public function show($id)
    {
        $post = User::find($id);

        if (!$post) {
            return abort(404); // إذا لم يتم العثور على المنشور
        }

        return view('user.pages.account', compact('post'));
    }

        


    public function checkout()
    {
     return view('user.pages.checkout');
    }


    public function comingsoon()
    {
     return view('user.pages.comingsoon');
    }




    public function privacypol()
    {
     return view('user.pages.privacypol');
    }


 

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    


   


    public function typography()
    {
     return view('user.pages.typography');
    }

    public function wishlist()
    {
        
        $subcategories= SubCategories::select('id','name','category') ->get();
        return view('user.pages.wishlist',compact('subcategories'));
    }


    public function about()
    {
     return view('user.pages.about');
    }

}
