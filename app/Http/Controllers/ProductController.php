<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
{
    $books = [
        [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'price' => 10.99,
        ],
        [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'price' => 12.99,
        ],
        [
        'title' => '1984',
        'author' => 'George Orwell',
        'price' => 9.99,
        ],
        [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'price' => 8.99,
        ],
        [
        'title' => 'The Catcher in the Rye',
        'author' => 'J.D. Salinger',
        'price' => 11.99,
        ],
        ];
        
        return response()->json(['gadgets' => $gadgets, 'books' => $books]);
}
}
