<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Addbuillderform extends Model
{
 

	public $table = 'addbuillderform';


	public $fillable = ['name','phone','email','construction_name','project_name','address','country','state','city','area','pincode','about','about_project','project_type','brochure','layout','location','property_images','possession_date','created_at','updated_at','status'];
}