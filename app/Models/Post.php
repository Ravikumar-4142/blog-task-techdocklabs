<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','category_id','user_id','publish'];

    public function getCategory()
    {
        return $this->hasOne(Category::class,'id', 'category_id');
    }
    public function getComments()
    {
        return $this->hasMany(Comment::class);
    }

}
