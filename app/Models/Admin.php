<?php

require_once('app/Models/Model.php');

class Admin extends Model
{
    protected $table = "admin";

    protected $fillable = ['admin_id','name','email','password'];
}
