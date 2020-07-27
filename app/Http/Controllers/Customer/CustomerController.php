<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CustomerController extends Controller
{
   public function index()
	{
		$category=Category::where('status',1)->get();
		$product=Product::where('status',1)->paginate(9);
		return view('Customer/index',compact('category','product'));
	}
    public function about()
    {
    	return view('Customer/about');
    }
}
