<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
	 protected $table = 'tblmenus';
     protected $fillable = [
        'title', 'description', 'mrank', 'status', 'url', 'sub_id', 'sub_lv', 'ids_cate', 'title_en', 'title_kh',
    ];
    public function getMainMenu() {
    	 return $this->belongsTo('App\Menus');
    }
    public function sub() {
    	return $this->hasMany('App\Menus','sub_id');
    }
}
