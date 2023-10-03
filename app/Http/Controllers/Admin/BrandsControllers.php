<?php

namespace App\Http\Controllers\Admin;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\OfferTrait;
class BrandsControllers extends Controller
{
    use  OfferTrait;
    public function brand(){

            
        $brands= Brand::select('id','name','slug','photo') ->get();
        return view('admin.brands.brand',compact('brands'));

   
   }




   public function editbrand($offer_id){

    Brand::findOrFail($offer_id);
    $brands = Brand:: select('id','name','status','photo')->find($offer_id);
    return view('admin.brands.editbrand',compact('brands'));
   return $offer_id;

}



public function deletebrand($offer_id){

    $brand = Brand::find($offer_id);
    if(!$brand)
   return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
   $brand -> delete();
   return redirect()->route('admin.brand.deletebrand' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
   
   
   
   
           }




           public function updatebrand(Request $request , $offer_id)
           {
           
               $brand = Brand::find($offer_id);
               if(!$brand)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               
           $brand -> update($request ->all());
           /*$offer -> update([
           
           'name' => $request ->name ,
           'price' => $request ->price 
           
           ]);*/
           }



       
   public function allproducts(){

       return view('admin.brands.allproducts');
   
       }
       
       public function stockoutproducts(){

           return view('admin.brands.stockoutproducts');
       
           }



           public function export(){

  return view('admin.brands.export');
           
  }

  public function productreviews(){

      return view('admin.brands.productreviews');
  
      }

      public function addbrand(){

        return view('admin.brands.addbrand');
    
        }


        public function store(Request $request){
            $file_name = $this ->saveImage($request -> photo , 'images/offers') ;
            Brand::create([
            
                                'photo' => $file_name ,
                                'name' => $request -> name,
                                'slug' => $request -> slug
            
                                
            
                            ]);
                            
                            $brands= Brand::select('id','name','slug','photo') ->get();
                            return view('admin.brands.brand',compact('brands'));
            
            
                        }
                
        }


