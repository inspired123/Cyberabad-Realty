<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Sales extends Model
{


	public $table = 'sales';


	public $fillable = ['name','enterprise_name', 'phone', 'mail','licence_document', 'material_rate_chart', 'exp', 'service', 'logo', 'address', 'branch', 'year', 'websitelink'];


}