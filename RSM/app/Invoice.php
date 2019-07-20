<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
     // Table Name
     protected $table = 'invoices';
     // Primery Key
     public $primeryKey = 'id';
     // Timestams
     public $timestamps= true;
}
