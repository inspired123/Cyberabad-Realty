<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Enquiry extends Model
{
 

	public $table = 'Enquiry_form';


	public $fillable = ['name','email','phone','PropertyLocation','PropertyType','PropertyPurpose','Agent','MinBeds','MinBathrooms','MinPrice','MaxPrice','MinArea','MaxArea','PropertyID','AdditionalDetails','created_at','updated_at'];
}