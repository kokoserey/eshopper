<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    //

    protected $table =  'subcategories';

    protected $fillable = ['id','name','status', 'cat_id'];

    public function category(){
    	return $this->belongTo('App\CategoryModel');
    }
}
