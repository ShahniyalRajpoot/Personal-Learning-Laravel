<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;


class CustomerController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
   
        $request->validate(
            [
                'fname'=>'required',
                'email'=>'required|email',
                'contact'=>'required', 
                // 'password'=>'required',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required'
                // 'password_confirmation'=>'required|same:password'

            ]
        );

        $customer= new Customers;
        $customer->name=$request->fname;
        $customer->email=$request->email;
        $customer->contact=$request->contact;
        $customer->password=md5($request->password);
        $customer->confirm_password=md5($request->password_confirmation);
        $customer->save();

        return redirect('/customer/view');
    }



    public function view(Request $request){
        $search=$request['search'] ?? "";
        if($search !=""){
            $customer= Customers::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }else{
            $customer= Customers::paginate(15);
        }
        
        $data =compact('customer','search');
        return view('customer-view')->with($data);
    }

    public function trash_view(){
        $customer= Customers::onlyTrashed()->get();
        $data =compact('customer');
        return view('trash-view')->with($data);
    }

    public function trash($id){
        $customer =Customers::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        // return  redirect()->back();
        return redirect('/customer/view');
    }




    public function restore($id){
        $customer =Customers::onlyTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        // return  redirect()->back();
        return redirect('/customer/view');
    }



    public function delete($id){
        $customer =Customers::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forcedelete();
        }
        // return  redirect()->back();
        return redirect('/trash-view');
    }



    public function edit($id){
        $url=url('/customer/update')."/".$id;
        $title="Update User";
        $customer =Customers::find($id);

        if(is_null($customer)){
            return redirect('/customer/view');
        }else{
            $data= compact('customer','url','title');
            return view('form')->with($data);
        }
    }



    public function update($id ,Request $request){
        $request->validate(
            [
                'fname'=>'required',
                'email'=>'required|email',
                'contact'=>'required', 
            ]
        );

        $customer=Customers::find($id);
        $customer->name=$request->fname;
        $customer->email=$request->email;
        $customer->contact=$request->contact;
        $customer->save();
        return redirect('/customer/view');
    }


}
