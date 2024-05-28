<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'price', 'serie', 'sale_date', 'type'];
    //protected $guarded = [];
}
