<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Servicecontact extends Model
{


	public $table = 'servicecontact';


	public $fillable = ['name','email','question', 'updated_at','created_at'];


}