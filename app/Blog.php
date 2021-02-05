<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{


	public $table = 'blog';


	public $fillable = ['name','title', 'logo', 'description','status'];


}