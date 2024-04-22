<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ["name", "year", "img", "category_id"];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
