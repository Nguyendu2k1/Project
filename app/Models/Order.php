<?php 

require_once('app/Models/Model.php');

class Order extends Model
{
    protected $table = "orders";

    protected $id = "order_id";

    protected $fillable = ['order_id',  'user_id', 'receiver_name', 'phone_number', 'address', 'order_note', 'subtotal',
    'payment_type'];
}