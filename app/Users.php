<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Users extends Model
{


	public $table = 'users';


	public $fillable = ['first','last', 'email', 'Mobileno','password','profile_pic','address','city','country','postal_code','description','ip','browser','device','os','role','otp'];


}