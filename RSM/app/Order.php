<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 // Table Name
 protected $table = 'orders';
 // Primery Key
 public $primeryKey = 'id';
 // Timestams
 public $timestamps= true;
}
