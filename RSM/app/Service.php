<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
 // Table Name
 protected $table = 'services';
 // Primery Key
 public $primeryKey = 'id';
 // Timestams
 public $timestamps= true;
}
