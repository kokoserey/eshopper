<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menus;
use App\CategoryModel;

class MenuController extends Controller
{
   	public function index() {
   		$data['menus'] = Menus::with('getMainMenu','sub')
    					->whereSubLv('1')
    					->get();//where('sub_lv' , 1)->get();  

         // Menus::find(1)->getMainMenu();

      $data['categories'] = CategoryModel::with('subCategories')
        ->wherestatus('1')
              ->get();
     
    	return view('eshopper\index', $data);
   	}

   	public function page($name) {
   		return $name;
   	}

    //
    public function show(){
    	$menus = Menus::with('getMainMenu','sub')
    					->whereSubLv('1')
    					->get();//where('sub_lv' , 1)->get();
    	//return $menus;
    	return compact('menus'); 
    }
}
