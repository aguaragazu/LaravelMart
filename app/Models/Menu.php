<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model {

    protected $table = "menus";
    protected $guarded = ["id"];
    protected $softDelete = true;

    public static $rules = [
	    "name" => "required",
		  "url" => "required|unique:menus",
	];
 
}
