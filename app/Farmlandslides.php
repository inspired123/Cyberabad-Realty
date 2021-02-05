<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Farmlandslides extends Model
{
	

	public $table = 'farmlandslides';


	public $fillable = ['title','logo','created_at','updated_at','status'];


}