<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Entity extends Model {
    protected $fillable = ['name', 'owner', 'type', 'price', 'total'];
}