<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Furniture extends Model
{


	public $table = 'furniture';


	public $fillable = ['name','enterprise_name', 'phone', 'mail','licence_document', 'material_rate_chart', 'chartprice', 'service', 'logo', 'address', 'branch', 'year', 'websitelink'];


}