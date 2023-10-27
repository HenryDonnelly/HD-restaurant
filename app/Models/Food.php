<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'category',
        'description',
        'price',
        'picture'];
}

// to view all books

// $foods = Food::all();
// $foods->toArray();

// $books = App\Models\Book::all();
// $books->toArray();


// $books = App\Models\Book::orderBy('title','asc')->get();
// $books->toArray();

// $books = App\Models\Book::where('category','Fiction')->get();
// $books->toArray();

// $book = App\Models\Book::find(1);
// $book->toArray();

// $books = App\Models\Book::take(5)->get();
// $books->toArray();

// $books = App\Models\Book::inRandomOrder()->take(3)->get();
// $books->toArray();

