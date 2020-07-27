<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\User;
use Auth;
class AccountController extends Controller 
{
	public function login()
	{
		return view('Customer/login');
	}
	public function post_login(Request $req)
	{	
		$this->validate($req,[
			'email'=>'required|email',
			'password'=>'required'
		],
		[
			'email.required'=>'Vui lòng nhập email',
			'email.email'=>'Email không đúng định dạng',
			'password.required'=>'Mật khẩu không được để trống'
		]
	);
		//dd($req->only('email','password'));
		if(Auth::attempt($req->only('email','password'),$req->has('remember'))){
			return redirect()->route('index');
		}
		else{
			return redirect()->back();
		}

	}

	public function register()
	{
		return view('Customer/register');
	}
	public function createAccount(Request $req)
	{
		$this->validate($req,[
			'email'=>'required|email|unique:account,email',
			'password'=>'required|min:6|max:20',
			'name'=>'required',
			'password_confirmation'=>'required|same:password',
			'phone'=>'required|unique:account,phone|max:10',
			'address'=>'required'
		],
		[
			'email.required'=>'Email không được để trống',
			'email.email'=>'Không đúng định dạng email',
			'email.unique'=>'Email đã được sử dụng',
			'password.required'=>"Password không được để trống",
			'password.min'=>'Password tối thiểu 6 kí tự',
			'password.max'=>'Password tối đa 20 kí tự',
			'name.required'=>'Name không được để trống',
			'password_confirmation.same'=>'Password không khớp',
			'phone.required'=>'Vui lòng nhập số điện thoại',
			'phone.unique'=>'Số điện thoại không được để trống',
			'phone.number'=>'Vui lòng nhập số',
			'phone.max'=>'Tối đa 10 kí tự',
			'address.required'=>'Địa chỉ không được để trống'
		]);
		
		$user= new User();
		$user->name = $req->name;
		$user->email=$req->email;
		$user->phone=$req->phone;
		$user->password=bcrypt($req->password);
		$user->address=$req->address;
		$user->save();
		return redirect()->route('login');
	}
	public function logout()
	{
		Auth::logout();
		return redirect()->route('index');
	}
}