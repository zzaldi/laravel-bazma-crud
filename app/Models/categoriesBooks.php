<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriesBooks extends Model
{
    use HasFactory;
    protected $table = 'categories_books';
    protected $fillable = ['nama'];
}
