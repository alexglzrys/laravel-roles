<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Campos llenados de forma masiva con el método Model::create
    protected $fillable = ['name', 'description'];
}
