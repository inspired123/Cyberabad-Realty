<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{


	public $table = 'contactform';


	public $fillable = ['name','email','phone', 'subject','message','updated_at','created_at'];


}