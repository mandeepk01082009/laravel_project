<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;  
  
class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $customer = new Customer();
        $data = compact('customer', 'url', 'title');
        return view('layout.customer')->with($data);
    }

    public function store(Request $request)
    {
        // p($request->all());
        // die;
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

        return redirect('/customer');
        //----------------
    }

    public function view(Request $request)
        {
            $search = $request['search'] ?? "";
            if ($search != "") {
                // where
                $customers = Customer::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
            }else{
            $customers = Customer::paginate(15);
            }
            $data = compact('customers', 'search');
            return view('layout.customer-view')->with($data);

        }

        public function trash(){
            $customers = Customer::onlyTrashed()->get();
            $data = compact('customers');
            return view('layout.customer-trash')->with($data);
        }

        public function delete($id)
        {
           $customer = Customer::find($id);
           if(!is_null($customer)){
            $customer->delete();
           }
           return redirect('customer');

        }

         public function forceDelete($id)
        {
           $customer = Customer::withTrashed()->find($id);
           if(!is_null($customer)){
            $customer->forceDelete();
           }
           return redirect()->back();

        }

        public function restore($id)
        {
           $customer = Customer::withTrashed()->find($id);
           if(!is_null($customer)){
            $customer->restore();
           }
           return redirect('customer');

        }

        public function edit($id)
        {
            $customer = Customer::find($id);
            if (is_null($customer)) {
                // not found
                return redirect('customer');
            }else{
                $title = "Update Customer";
                $url = url('customer/update') . "/" .$id;
                $data = compact('customer', 'url', 'title');
                return view('layout.customer')->with($data);
            }

        }

        public function update($id, Request $request)
        {
            $customer = Customer::find($id);
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->gender = $request['gender'];
            $customer->address = $request['address'];
            $customer->state = $request['state'];
            $customer->country = $request['country'];
            $customer->dob = $request['dob'];
            $customer->save();
            return redirect('/customer');
        }
        
}
