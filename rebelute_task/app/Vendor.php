<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //

    protected $fillable = [ 'Name',
							 'product',
							 'phone',
							 'address' 
					];

	public function vendors(){
		return $this->belongsToMany(Customer::class,'customer_vendor','vendor_id','customer_id')->withTimestamps();
	}
}
