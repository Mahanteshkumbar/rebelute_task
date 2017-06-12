<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

	protected $fillable = [ 'Name',
							 'product',
							 'phone',
							 'address' 
					];

    public function customers(){
		return $this->belongsToMany(Vendor::class,'customer_vendor','vendor_id','customer_id')->withTimestamps();
	}
}
