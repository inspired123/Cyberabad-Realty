<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Propertyenquiry extends Model
{


	public $table = 'propertyenquiry';


	public $fillable = ['name','email', 'question','reply','property_id'];


}