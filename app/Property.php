<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Property extends Model
{


	public $table = 'property';


	public $fillable = ['image','image_file','bedrooms','bathrooms','posted_by', 'property_type', 'property_for','balconies','total_area','total_area_measurement','carpet_area','carpet_area_measurement','buildup_area','buildup_area_measurement','additional_rooms' ,'sale_price' ,'sale_price_measurement' ,'sale_negotiatible' ,'sale_booking_amount' ,'rent_price' ,'rent_price_measurement' ,'rent_negotiatible' ,'rent_booking_amount' ,'rent_monthly_maintenance' ,'available_from' ,'include_price' ,'property_status' ,'age','rm_transaction_type' ,'possession_date','uc_transaction_type' ,'description','furnishing_status','bed_no','tvs' ,'greesar' ,'acs' ,'additional_furnishing' ,'amenities' ,'parking_covered' ,'parking_opened' ,'floor_no','total_floor' ,'open_side','facing' ,'over_looking','owner_type','living_room_flooring','kitchen_flooring' ,'bathroom_flooring' ,'bed_room_flooring','balcony_flooring' ,'other_flooring' ,'multi_images' ,'city' ,'state' ,'country','address','landmark','area' ,'pincode','land_area','land_area_measurement','length_area','length_area_measurement','soil_typeselect','Water_resources','floor_allowed','boundary_typeselect','possession_date1','sale_price1','sale_price_measurement1','sale_negotiatible1','sale_booking_amount1','rent_monthly1','rent_negotiatible1','rent_booking_amount1','rent_monthly_maintenance1','available_from1','lease_in_years1','amenities1' ,'created_at' ,'updated_at'  ,'status', 'location'];

   public function setCategoryAttribute($value)
    {
        $this->attributes['additional_rooms'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['additional_rooms'] = json_decode($value);
    }
}