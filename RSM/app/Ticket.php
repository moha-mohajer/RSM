<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
 // Table Name
 protected $table = 'tickets';
 // Primery Key
 public $primeryKey = 'id';
 // Timestams
 public $timestamps= true;
}
