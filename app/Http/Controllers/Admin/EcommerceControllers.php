<?php

namespace App\Http\Controllers\Admin;
use App\Models\Coupon;
use App\Models\Shipping;
use App\Models\State;
use App\Models\Tax;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceControllers extends Controller
{
    public function currency(){

        return view('admin.ecommerce.currency');
    
        }

        

        public function tax(){

            $taxs= Tax::select('id','title','tax','status') ->get();
            return view('admin.ecommerce.tax',compact('taxs'));
        
}




            
public function edittax($offer_id){

    Tax::findOrFail($offer_id);
    $taxs = Tax:: select('id','title','tax','status')->find($offer_id);
    return view('admin.ecommerce.edittax',compact('taxs'));
   return $offer_id;

}



public function deletetax($offer_id){

    $taxs = Tax::find($offer_id);
    if(!$taxs)
   return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
   $taxs -> delete();
   return redirect()->route('admin.ecommerce.deletestate' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
   
   
   
   
           }




           public function updatetax(Request $request , $offer_id)
           {
           
               $taxs = Tax::find($offer_id);
               if(!$taxs)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               
           $taxs -> update($request ->all());
        
           }





#############################################################################################################################################



public function createtax(){

    return view('admin.ecommerce.createtax');
            
    }



    public function storetax(Request $request){

        Tax::create([
        
            'title'=> $request -> title ,
            'tax' => $request -> tax,
       
            'status' => $request -> status,
    
        ]);
        
        $taxs= Tax::select('id','title','tax','status') ->get();
        return view('admin.ecommerce.tax',compact('taxs'));
        
         
                
        }

public function coupons(){

    $coupons = Coupon::select('id','titele','code','times','discount','status') ->get();
    return view('admin.ecommerce.coupons',compact('coupons'));


   }




   public function createcoupons(){

    return view('admin.ecommerce.createcoupons');

    }




   public function store(Request $request){

    Coupon::create([
        
        'titele'=> $request -> titele ,
        'code' => $request -> code,
        'times' => $request -> times,
        'discount' => $request -> discount,
        'status' => $request -> status,

    ]);
    
    $coupons= Coupon::select('id','titele','code','times','discount','status') ->get();
    return view('admin.ecommerce.coupons',compact('coupons'));

    }
   




    public function editcoupons($offer_id){

        Coupon::findOrFail($offer_id);
        $coupon = Coupon:: select('id','titele','code','times','discount','status')->find($offer_id);
        return view('admin.ecommerce.editcoupons',compact('coupon'));
       return $offer_id;
    
    }
    
    
    
    public function deletecoupons($offer_id){
    
        $coupon = Coupon::find($offer_id);
        if(!$coupon)
       return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
       $coupon -> delete();
       return redirect()->route('admin.ecommerce.deletecoupon' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
       
       
       
       
               }
    
    
    
    
               public function updatecoupons(Request $request , $offer_id)
               {
               
                   $coupon = Coupon::find($offer_id);
                   if(!$coupon)
                   return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
                   
               $coupon -> update($request ->all());
             
               }
    
##################################################################################################################

   public function shipping(){

    $shippings= Shipping::select('id','titele','price','status') ->get();
    return view('admin.ecommerce.shipping',compact('shippings'));
   
  }



  public function editshipping($offer_id){

    Shipping::findOrFail($offer_id);
    $shippings = Shipping:: select('id','titele','price','status')->find($offer_id);
    return view('admin.ecommerce.editshipping',compact('shippings'));
   return $offer_id;

}



public function deleteshipping($offer_id){

    $shippings = Shipping::find($offer_id);
    if(!$shippings)
   return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
   $shippings -> delete();
   return redirect()->route('admin.ecommerce.deleteshipping' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
   
   
   
   
           }




           public function updateshipping(Request $request , $offer_id)
           {
            $shippings= Shipping::select('id','titele','price','status') ->get();
            return view('admin.ecommerce.shipping', compact('shippings'));
               $shippings = Shipping::find($offer_id);
               if(!$shippings)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               
           $shippings -> update($request ->all());
         
        
           }
  ########################################################################################################################################################################


  public function createshipping(){


    return view('admin.ecommerce.createshipping');
     
    }
  

    public function storeshipping(Request $request){
        Shipping::create([
        
            'titele'=> $request -> titele ,
            'price' => $request -> price,
       
            'status' => $request -> status,
    
        ]);
        
        $shippings= Shipping::select('id','titele','price','status') ->get();
        return view('admin.ecommerce.shipping',compact('shippings'));
        
         
        }
      



  public function state(){
    $states= State::select('id','state','price','status') ->get();
            return view('admin.ecommerce.state',compact('states'));
  
      }


      public function createstate(){

        return view('admin.ecommerce.createstate');
    
        }




        public function storestate(Request $request){
            State::create([
        
                'state'=> $request -> state ,
                'price' => $request -> price,
           
                'status' => $request -> status,
        
            ]);
            
            $states= State::select('id','state','price','status') ->get();
            return view('admin.ecommerce.state',compact('states'));
            
             
            }
           
        
        

            
            public function editstate($offer_id){

                State::findOrFail($offer_id);
                $states = State:: select('id','state','price','status')->find($offer_id);
                return view('admin.ecommerce.editstate',compact('states'));
               return $offer_id;

            }



            public function deletestate($offer_id){

                $states = State::find($offer_id);
                if(!$states)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               $states -> delete();
               return redirect()->route('admin.ecommerce.deletestate' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
               
               
               
               
                       }
    



                       public function updatestate(Request $request , $offer_id)
                       {
                       
                           $states = State::find($offer_id);
                           if(!$states)
                           return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
                           
                       $states -> update($request ->all());
                    
                       }
    




        #############################################################################################################################################



        }