<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookStore extends Model
{
       protected $table = 'bookstore';
       protected $fillable = ['book_name', 'book_author', 'book_stock', 'book_date'];
}
