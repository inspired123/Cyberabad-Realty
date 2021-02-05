<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Slides extends Model
{
	

	public $table = 'slides';


	public $fillable = ['title','logo','created_at','updated_at','status'];


}