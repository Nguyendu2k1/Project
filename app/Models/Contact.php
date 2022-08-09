<?php

require_once('app/Models/Model.php');

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = ['name','email','message'];
}