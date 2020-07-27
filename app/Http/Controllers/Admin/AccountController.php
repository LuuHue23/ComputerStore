<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\User;
use Auth;
class AccountController extends Controller 
{
	public function login()
	{
		return view('Admin/login');
	}
	public function post_login(Request $req)
	{
		$this->validate($req,[
			'email'=>'required|email',
			'password'=>'required'
		],
		[
			'email.required'=>'Vui lòng nhập email',
			'email.email'=>'Email không đúng định đạng',
			'password.required'=>'Vui lòng nhập password'
		]);

		if(Auth::attempt($req->only('email','password'),$req->has('rmb'))){
			return redirect()->route('index_admin');
		}
		else{
			return view('Admin.login');
		}
	}
	public function logout()
	{
		Auth::logout();
		return view('Admin.login');
	}
	public function index()
	{
		return view('Admin/index');
	}
	public function list()
	{
		$user= User::all();
		return view('Admin.list',compact('user'));
	}
	public function edit($id){
		$qr= User::find($id);
		return view('Admin.edit', compact('qr'));
	}
	public function post_edit($id, Request $req){
		$us= User::find($id)->update([
			'name'=>$req->name,
			'email'=>$req->email,
			'created_at'=>$req->created_at,
			'status'=>$req->status
		]);
		return redirect()->route('list');

	}
	public function delete($id){
		$us=User::find($id)->delete();
		return redirect()->back();
	}
}
