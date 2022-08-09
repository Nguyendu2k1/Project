<?php 

require_once('app/Models/Model.php');

class Category extends Model
{
    protected $table = 'categories';

    protected $id = 'category_id';

    protected $fillable = ['category_id','name','slug'];

    public function image()
    {
        $sql = "SELECT * FROM categories WHERE category_id = {$this->id}";
        return $this->getFirst($sql)->get();
    }
}