<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Advertise extends Model
{


	public $table = 'advertise';


	public $fillable = ['name','email','phone', 'state','city', 'country', 'postal_code', 'address','full', 'updated_at','created_at'];


}