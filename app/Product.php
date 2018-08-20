<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','photo_id','price'];

    public function scopemightAlsoLike($query)
    {
        $query->inRandomOrder()->take(4);
    }

    public function scopeSearchByKeyWord($query,$keyword){
        if ($keyword!=''){

            $query->where(function ($query) use ($keyword) {

                $query->where('name', 'LIKE', '%'.$keyword.'%');

            } );
        }
        return $query;
    }




    public function photo(){

        return $this->belongsTo('App\Photo');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
