<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function songs(Category $category){
        return view('category.songs', compact('category'));
    }
}
