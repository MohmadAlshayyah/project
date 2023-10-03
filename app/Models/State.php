<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $fillable = [
        'state', 'price','status','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public function scopeActive($query){
        return $query -> where('status',1);
        
        }


        public function getActive(){
            return   $this -> status == 1 ? 'مفعل'  : 'غير مفعل';
          }

}
