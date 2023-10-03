<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = 'sub_categories';

    protected $fillable = [
       'id', 'category', 'name','status','old','photo','categorie_id','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories(){


        return $this -> belongsTo('App\Models\Categories','categorie_id','id');
        
        }



        public function scopeActive($query){
            return $query -> where('status',1);
            
            }


            public function getActive(){
                return   $this -> status == 1 ? 'مفعل'  : 'غير مفعل';
              }

}
