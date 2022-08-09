<?php

require_once('app/Models/Model.php');

class User extends Model
{
  protected $table = "users";

  protected $fillable = ['user_id','name','email','password'];
}
