<?php

use Illuminate\Database\Seeder;
use App\Vendor;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$vendor[] = Vendor::create([
			 'Name' => 'Vinod Mobiles',
			 'product' => 'iphone',
			 'phone' => '9985466529',
			 'address' => 'Belagavi'
		]);
		
		$vendor[] = Vendor::create([
			 'Name' => 'Vinod Fruits',
			 'product' => 'apple',
			 'phone' => '9985466529',
			 'address' => 'Hubbali'
		]);
		
		$vendor[] = Vendor::create([
			 'Name' => 'Vinod Vegitables',
			 'product' => 'cocumber',
			 'phone' => '9985466529',
			 'address' => 'Pune'
		]);

		$vendor[] = Vendor::create([
			 'Name' => 'Mant Vegitables',
			 'product' => 'cocumber',
			 'phone' => '9985466529',
			 'address' => 'Dharwad'
		]);

		$vendor[] = Vendor::create([
			 'Name' => 'Raj Computer Sales',
			 'product' => 'Dell',
			 'phone' => '9985466529',
			 'address' => 'Pune'
		]);
    }
}
