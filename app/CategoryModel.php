<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'description', 'status', 'sub_id', 'sub_lv'];

		/**
     * Get category from sub category.
     */
    public function subCategories()
    {
    	return $this->belongToMany('App\SubCategoryModel');
    }
}
