<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $customer[] = Customer::create([
			 'Name' => 'Raju',
			 'phone' => '9985466529',
			 'address' => 'Belagavi'
		]);
		
		$customer[] = Customer::create([
			 'Name' => 'Vinod',
			 'phone' => '9985466529',
			 'address' => 'Belagavi'
		]);
		
		$customer[] = Customer::create([
			 'Name' => 'Mant',
			 'phone' => '9985466529',
			 'address' => 'Belagavi'
		]);
    }
}
