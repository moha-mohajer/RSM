<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
     // Table Name
     protected $table = 'devices';
     // Primery Key
     public $primeryKey = 'id';
     // Timestams
     public $timestamps= true;
}
