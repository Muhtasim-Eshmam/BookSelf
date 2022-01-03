<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customermain');
    }

   
    public function store(Request $request)
    {
        $customer= new customer();
        $customer->bookname = $request->bookname;
        $customer->author = $request->author;
        $customer->quantity = $request->quantity;

        
        // Mail::to($customer->status)->send(new Welcomstatus());

        $customer->save();
       
       
       

    }


    public function addcomment()
    {
        return view("comments");
    }
   
    // public function show(customer $customer)
    // {
    //     $customer = customer::orderBy('status','ASC')->get();
    //     return view('customer.show',compact('customer'));
    // }

   
    // public function edit(customer $customer , $id)
    // {
    //     $customer=customer::find($id);
    //     return view('customer.update',compact('customer'));
    // }

    
    // public function update(Request $request, customer $customer, $id)
    // {
    //     $customer=customer::find($id);
    //     $customer->work = $request->work;
    //     $customer->duedate = $request->duedate;
    //     $customer->description = $request->description;
    //     $customer->status = $request->status;
   
    //     $customer->save();
    //     return back();

    // }
 
}
