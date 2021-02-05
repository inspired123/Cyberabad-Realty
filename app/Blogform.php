<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Blogform extends Model
{


	public $table = 'blogform';


	public $fillable = ['name','email', 'message'];


}