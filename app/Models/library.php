<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;
    protected $table = 'libraries';
    protected $primaryKey = 'id';
    protected $fillable = ['book_title', 'book_author', 'book_description', 'book_image'];
    public $timestamps = false;
}
