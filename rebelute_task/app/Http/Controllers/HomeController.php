<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Customer;

use App\Http\Requests\CreateCustomerRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function show(){
        $vendors = Vendor::all();
        return view('vendor_list',compact('vendors'));
    }

    public function listCustomer(){
        $customers = Customer::all();
        return view('customer_list',compact('customers'));
    }


    public function vendorCustomer(){        
        $customer = Customer::find(1);
        $customer->vendors()->sync([1,2,3]);
        return view('home');
    } 


    public function createCustomer(CreateCustomerRequest $request){
        //return $request->all();
        Customer::create($request->all());
        return view('home');//->withSuccess('Information Saved Successfully!!');
    }

    public function addCustomer(){
        return view('customer');
    }

}
