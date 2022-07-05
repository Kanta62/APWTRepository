<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }
    public function Login(){
        return view('customer.Login');
    }
    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20",
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ],
    );
        $customer = Customer::where('username',$request->username)
        ->where('password',$request->password)
        ->first();

    // return $customer;
        if($customer){
        $request->session()->put('customer',$customer->username);
        return redirect()->route('Dashboard');
        }
        return back()->with('error','Invalid Username or Password!');
    }
    public function CustReg(){
        return view('customer.Registration');
    }
    public function passes($attribute, $value)
    {
        if(preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $value)){
            return true;
        }else {
            return false;
        }
    }

    public function Create(Request $request)
    {     
           $rules = [
            "name"=>"required|min:4|max:20",
            "CustId"=>"required|integer|digits:8",
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            "gender"=>'required',
            "username"=>'required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirmpass' => 'required_with:password|same:password|min:8',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required'
           ];
        ['name.required'=>"Required Field must be Filled-Up"];//
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return redirect('registration')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();

				$customer = new Customer;
                $customer->name = $data['name'];
                $customer->CustId = $data['CustId'];
				$customer->dob = $data['dob'];
				$customer->gender = $data['gender'];
                $customer->username = $data['username'];
                $customer->password = $data['password'];
				$customer->confirmpass = $data['confirmpass'];
				$customer->email = $data['email'];
                $customer->phone = $data['phone'];
				$customer->address = $data['address'];
				$customer->save();
				return redirect('login')->withSuccess('Registered successfully!');
		}
    
    }


   public function Dashboard(Request $request)
    {
            $customer = Customer::where('username', $request->session()->get('customer'))->first();
            return view('customer.Dashboard')->with('customer', $customer);
    
    }
    public function logout(){
        session()->forget('customer');
        return redirect()->route('Login');
    }

    public function CustomerProfile(Request $request){
            
    }

    public function editProfile(Request $request){
        $customer = Customer::where('username', $request->session()->get('customer'))->first();
        // return $customer;
        return view('customer.EditProfile')->with('customer', $customer);

    }
    public function editProfileSubmitted(Request $request){
        $customer = Customer::where('username', $request->session()->get('customer'))->first();
        // return  $student;
        $customer->name = $request->name;
        $customer->CustId = $request->CustId;
        $customer->dob = $request->dob;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('Dashboard');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
