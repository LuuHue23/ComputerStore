<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller{


	public function product_detail($slug)
	{
		$category=Category::all();
		$product=Product::where('status','1')->limit(3)->get();
		$pro_detail=Product::where('slug',$slug)->first();
		return view('Customer.product_detail',compact('category','product','pro_detail'));
	}
	public function product_cate($slug)
	{
		$category=Category::where('slug',$slug)->first();
		$cate=Category::all();
		$product=Product::where('category_id',$category->id)->paginate(9);
		return view('Customer.product',compact('product','cate'));
	}
	public function search(Request $req)
	{
		$seek = $req->get('search');
		$product=Product::where('status',1)->where('name','like','%'.$seek.'%')->paginate(9);
		$cate=Category::all();
		return view('Customer.product',compact('product','cate'));
	}


}

