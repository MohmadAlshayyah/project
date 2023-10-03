<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\OfferTrait;
class CategoriesControllers extends Controller
{


    
   
    use  OfferTrait;
    public function show(){
        $categories= Categories::select('id','name','status','photo') ->get();
        return view('admin.categories.show',compact('categories'));
      
    
        }
    
        public function home(){
    
            return view('admin.home');
        
            }
          
    
        public function subcategories(){
    
            
            $subcategories= SubCategories::select('id','name','category','old','categorie_id','photo') ->get();
            return view('admin.categories.subcategories',compact('subcategories'));
         
             
            }
    
           /* $subcategories= Categories::find(44);
            $hhs = $subcategories -> Subcategories;
           return view('admin.categories.subcategories',compact('hhs')) ;*/
            
        public function addcategories(){
    
            return view('admin.categories.addcategories');
        
            }

            
  

    
                

            public function store(Request $request){
$file_name = $this ->saveImage($request -> photo , 'images/offers') ;
Categories::create([

                    'photo' => $file_name ,
                    'name' => $request -> name

                    

                ]);
                
                $categories= Categories::select('id','name','status','photo') ->get();
                return view('admin.categories.show',compact('categories'));


            }
    
    

            public function editCategories($offer_id){

                Categories::findOrFail($offer_id);
                $categories = Categories:: select('id','name','status','photo')->find($offer_id);
                return view('admin.categories.edit',compact('categories'));
               return $offer_id;

            }



            public function deleteCategories($offer_id){

                $categories = Categories::find($offer_id);
                if(!$categories)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               $categories -> delete();
               return redirect()->route('admin.categories.delete' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
               
               
               
               
                       }
    



                       public function updatecategories(Request $request , $offer_id)
                       {
                       
                           $categories = Categories::find($offer_id);
                           if(!$categories)
                           return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
                           
                       $categories -> update($request ->all());
                    
                       }
    





    public function addsub(){
    
    
        $categories= Categories::select() ->get();
        return view('admin.categories.addsub',compact('categories'));
    
        
    
    }





    public function storesub(Request $request){
        $file_name = $this ->saveImage($request -> photo , 'images/offers') ;
        SubCategories::create([
            'photo' => $file_name ,
                            'category'=> $request -> category ,
                            'name' => $request -> name,
                            'old' => $request -> old,
                            'categorie_id' => $request -> categorie_id
        
                        ]);
                        
                        $subcategories= SubCategories::select('id','name','category','old','categorie_id','photo') ->get();
                        return view('admin.categories.subcategories',compact('subcategories'));
        
        
                    }




                    public function editsub($offer_id){

                        SubCategories::findOrFail($offer_id);
                        $subCategories = SubCategories:: select('id','name','category')->find($offer_id);
                        return view('admin.categories.editsub',compact('subCategories'));
                       return $offer_id;
        
                    }
        

                    public function updatesub(Request $request , $offer_id)
                    {
                    
                        $categories = SubCategories::find($offer_id);
                        if(!$categories)
                        return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
                        
                    $categories -> update($request ->all());
                    /*$offer -> update([
                    
                    'name' => $request ->name ,
                    'price' => $request ->price 
                    
                    ]);*/
                    }



                    public function getmany(){
                        $subCategories  =   SubCategories:: find(1);
return $subCategories -> categories;



                    }
 

                    
            public function deletesub($offer_id){

                $categories = SubCategories::find($offer_id);
                if(!$categories)
               return redirect()->back() -> with(['success' => 'تم التحديث بنجاح']);
               $categories -> delete();
               return redirect()->route('admin.categories.deletesub' , $offer_id)-> with(['success' => 'تم التحديث بنجاح']);
               
               
               
               
                       }
        
    
}
