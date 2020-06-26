<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Auth;
use App\Tintuc;
use App\Customer;

use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    //
    public function getAdd(){
		return view('backend.Customer');
    }
    public function postAdd(CustomerRequest $request){
        $customer = new Customer;
		$customer->name = $request->inputName;
		$customer->gender = $request->inputGender;
		$customer->email = $request->inputEmail;
		$customer->address = $request->inputAddress;
        $customer->phone_number = $request->inputPhoneNumber;
        $customer->note = $request->inputNote;

        $file=$request->file('inputFile')->getClientOriginalName();

        //if($request->hasFile('inputFile')){
         $customer->image = $request->file('inputFile')->move('img/',$file);
        //}
        $customer->image = 'img/'.$file;
		$customer->save();
		return redirect('ca');
	}
	public function getList(){
		$customers = Customer::all();
		return view('backend.CustomerDisplay',compact('customers'));
    }


    public function delete($id){
		$customer = Customer::find($id);
		$customer->delete();
		return redirect('ca')->with(['flash_message' =>'Xóa bài viết thành công']);
    }
    public function getEdit($id){
		$customer = Customer::find($id);
		return view('backend.editCustomer',compact('customer'));
	}
    public function postEdit($id,Request $request){
        // $request la bien tao ,REquest la thu vien
		$customer = Customer::find($id);
		$customer->name = $request->inputName;
		$customer->name = $request->inputName;
		$customer->gender = $request->inputGender;
		$customer->email = $request->inputEmail;
		$customer->address = $request->inputAddress;
        $customer->phone_number = $request->inputPhoneNumber;
        $customer->note = $request->inputNote;
        $file=$request->file('inputFile')->getClientOriginalName();

        $customer->image = $request->file('inputFile')->move('img/',$file);
        $customer->image = 'img/'.$file;
		$customer->save();
		return redirect('ca')->with(['flash_level' => 'success','flash_message' =>'Sữa bài viết thành công']);
	}
}

