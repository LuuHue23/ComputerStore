<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Product extends Model
{
	
	protected $table='product';
	protected $fillable=['name','category_id', 'slug', 'image','image_list','price','description','sale_price','status'];
	
	public function category(){
		return $this->hasOne('App\Models\Category','id','category_id');
	}
}

