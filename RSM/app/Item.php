<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Table Name
    protected $table = 'items';
    // Primery Key
    public $primeryKey = 'id';
    // Timestams
    public $timestamps= true;
}
