<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Profiles extends Model
{


	public $profile = 'profiles';


	public $fillable = ['username','firstname', 'lastname', 'email','pwd','profile','address','city','country','postal'];


}