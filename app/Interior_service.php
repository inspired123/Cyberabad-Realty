<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Interior_service extends Model
{


	public $table = 'interior_service';


	public $fillable = ['name','enterprise_name', 'phone', 'mail', 'about', 'service', 'logo', 'address', 'year', 'websitelink'];


}