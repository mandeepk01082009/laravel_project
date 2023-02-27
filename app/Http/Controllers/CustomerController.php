<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('layout.customer');
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        //Insert Query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
        //----------------
    }

    public function view()
        {
            $customers = Customer::all();
            // echo "<pre>";
            // print_r($customers->toArray());
            // echo "</pre>";
            // die;
            $data = compact('customers');
            return view('layout.customer-view')->with($data);

        }
        
}
