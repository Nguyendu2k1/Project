<?php 

require_once('app/Models/Model.php');

class Product extends Model
{
    protected $table = "products";

    protected $id = 'product_id';

    protected $fillable = ['product_id','name','description','rate','price','weight','image','category_id'];

    public function formatPrice() 
    {
        return number_format($this->price,0,'.', ',');
    }

    public function getLatestProducts($limit = 3) 
    {
        $sql = "SELECT * FROM products LIMIT $limit";
        return $this->getAll($sql);
    }

    public function getToprateProducts($limit = 3) 
    {
        $sql = "SELECT * FROM products ORDER BY rate DESC LIMIT $limit";
        
        return $this->getAll($sql);
    }

    public function image()
    {
        $sql = "SELECT * FROM products WHERE product_id = {$this->id}";
        return $this->getFirst($sql)->get();
    }

    public function getProductsByIds($itemIds)
    {
        $sql = "SELECT * FROM products WHERE product_id IN ($itemIds)";
        
        return $this->getAll($sql)->get();
    }
}