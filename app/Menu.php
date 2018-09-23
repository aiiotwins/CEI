<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public static function getMenu($id){
    	
        $query = DB::table('mst_role_menu')
                ->select('mst_menu.id', 'mst_menu.menu_name', 'mst_menu.link')
                ->leftJoin('mst_menu', 'mst_menu.id', '=', 'mst_role_menu.id_mst_menu')
    			->where('mst_role_menu.id_mst_role', $id)
    			->get();

        return $query;
    
    }
}
