<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller{


	public function product_detail()
	{
		$category=Category::all();
		$product=Product::where('status','1')->limit(3)->get();
		$pro_detail=Product::where('slug','ssd')->first();
		// dd($pro_detail->name);

		return view('Customer.product_detail',compact('category','product','pro_detail'));
	}


}

