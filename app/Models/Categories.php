<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
       protected $table = 'main_categories';

    protected $fillable = [
        'name', 'photo','status','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function subCategories(){


        return $this -> hasMany('App\Models\SubCategories','categorie_id','id');
        
        }


        public function scopeActive($query){
            return $query -> where('status',1);
            
            }

    



            public function getActive(){
                return   $this -> status == 1 ? 'مفعل'  : 'غير مفعل';
              }
}
